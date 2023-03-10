<?php

session_start();
include "dbconnect.php";

if(isset($_POST['del_multiple_row'])){

    $all_id = $_POST['del_id'];

    $extract = implode(", " , $all_id);
    
    // echo $extract;

    $query = "delete from ggfk where id in($extract) ";

    $run = mysqli_query($conn,$query);
//SESSION NOT WORKING 
    if($run)
    {
       $_SESSION['status'] = "DATA DELETED SUCCESSFULLY";
       header('location:display.php');
    }
    else{
        $_SESSION['status'] = "DATA NOT DELETED!!";
        header('location:display.php');
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

     }
        
    
}


?>