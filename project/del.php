<?php

$con = mysqli_connect("localhost","root","","project");

$id= $_GET['id'];

$sel="SELECT * FROM std WHERE c_id='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();
unlink("upload/".$row['image']);


$del ="DELETE FROM std WHERE c_id='$id'";
$con->query($del);
header("location:show.php");

?>
