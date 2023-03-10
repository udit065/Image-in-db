<?php

include 'dbconnect.php';

$dir = $_SERVER['DOCUMENT_ROOT'];
$target_dir = "$dir/GG/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
$pic = $_FILES['fileToUpload'];
// print_r($pic);


// getting data from db
$filename = $pic['name'];
$filetype = $pic['type'];
$filesize = $pic['size'];
$filepath = $pic['full_path'];


$query = "insert into ggfk (name,type,size,image) values('$filename','$filetype','$filesize','$target_file')" ;

             $run = mysqli_query($conn,$query) or die(mysqli_error());

// header ('location:gg.php');

?> 
