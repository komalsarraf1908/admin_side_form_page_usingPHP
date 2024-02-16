<?php
session_start();

$con = mysqli_connect("localhost","root","","project");

$a= $_POST['email'];
$b=$_POST['password'];


$sel="SELECT * FROM admin WHERE email='$a' and password='$b'";

$rs= $con->query($sel);
if($rs -> num_rows>0){
    $row= $rs->fetch_assoc();
    $_SESSION['admin_name']=$row['name'];
    header("location:show.php");
}
else{
    header("location:login.php?msg=err");
}




?>