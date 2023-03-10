<?php
include "dbconnect.php";

$id = $_GET['id'];
$delete = "DELETE FROM ggfk WHERE id=$id";


$run = mysqli_query($conn,$delete);

include "display.php";


?>