<!-- <php
session_start();
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Retreived data from DB</title>
<!-- EXTERnAL links -->
    <link rel="stylesheet" href="img.css">
    <script src="gg.js"></script>

</head>
<body>
<!-- Search button  -->
  <div id="searchdiv">

<form action="search.php" method="post" enctype="multipart/form-data">
  
  <input type="text" name="search" placeholder="SEARCH">
  <input type="submit" name="submitquery" value="Search">
  
</form>
</div>
<!-- TABLE DIV START -->
<div class="container">
     <form action="checkbox.php" method="POST">
<table class="table">
<!-- 
php
  if(isset($_SESSION['status'])){
   echo "<h4>".$_SESSION['status']."</h4>"
   unset($_SESSION['status']);
  
  }
   ?> -->

   <thead class="thead-dark">
     <tr>
      <th>
            <button input="submit" name="del_multiple_row" class="btn btn-danger" 
                    onClick='return confirm("Are you sure you want to delete?")'>DELETE</button> 
      </th>
      <th>ID</th>
      <th>NAME</th>
      <th>TYPE</th>
      <th>SIZE</th>
      <th>IMAGE</th>
      <th colspan="2">OPERATION</th>
    </tr>
  </thead>
  <tbody>

<?php
include "dbconnect.php";

// DIsplay content In Table
$limit = 3;
if(isset($_GET['page'])){
      $page = $_GET['page'];
}else{
  $page = 1;
}
$offset = ($page - 1) * $limit;

$selectquery = "select * from ggfk  where 1 limit {$offset},{$limit}";


$query = mysqli_query($conn,$selectquery);

while ($dbdata = mysqli_fetch_assoc($query)) {
  
  ?>
    <tr>
      <td>
        <input type="checkbox" name="del_id[]" class="idcheckbox" value=" <?php echo $dbdata['id'];   ?>">
      </td>
      <td><?php echo $dbdata['id'];   ?></td>
      <td><?php echo $dbdata['name'];   ?></td>
      <td><?php echo $dbdata['type'];   ?></td>
      <td><?php echo $dbdata['size'];   ?></td>
      <td><img src="http://localhost/GG/uploads/<?php echo $dbdata['name']; ?>" width = 100 height=100></td>

      <td><a href="edit.php?id=<?php echo $dbdata['id'];   ?>">EDIT</a></td>


      <td><a href="delete.php?id=<?php echo $dbdata['id'];   ?>"
      onClick='return confirm("Are you sure you want to delete?")'>DELETE</a></td>

    </tr>
  <?php
}
?>


<!-- //for PAGINATION -->
<?php

$sql1 = "select * from ggfk";

$result1 = mysqli_query($conn,$sql1) or die("Query failed");

if(mysqli_num_rows($result1) > 0){

  $total_records = mysqli_num_rows($result1);
  $total_pages = ceil($total_records / $limit);
 
       echo '<ul class="pagination">';

       if($page > 1){
       echo '<li class="page-item"><a class="page-link" href="display.php?page='.($page - 1).'">Previous</a></li>';
       }
       
       for($i = 1; $i <= $total_pages; $i++){
         if($i == $page){
                  $active = "active";
      }else{
               $active = "";
               
        }
           echo '<li class="page-item '.$active.'"><a class="page-link" href="display.php?page='.$i.'">'.$i.'</a></li>';

          }
           
          if($total_pages > $page){
          echo '<li class="page-item"><a class="page-link" href="display.php?page='.($page + 1).'">Next</a></li>';
          }
          echo '</ul>';
}
?>


</tbody>
</div>
</table>
</form>

<!-- Select and UnSELECT All Checkbox  -->
<div>
  <input type="button" onclick="selectall()" value="Select All">
  <input type="button" onclick="unselectall()" value="UnSelect All">
</div>
  
</body>
</html>