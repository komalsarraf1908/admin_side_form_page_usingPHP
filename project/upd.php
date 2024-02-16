<?php

$con = mysqli_connect("localhost","root","","project");

$id=$_POST['id'];
$a= $_POST['name'];
$b= $_POST['mobile'];
$c= $_POST['spec'];
$d= $_POST['color'];

if(isset($_POST['pay'])){
   $e = implode(",",$_POST['pay']);
}
else{
    $e ="";
}


if(isset($_FILES['img']['name']) && $_FILES['img']['name']!=""){

$buf = $_FILES['img']['tmp_name'];
$fn= time().$_FILES['img']['name'];
move_uploaded_file($buf,"upload/".$fn);



$ins ="UPDATE std SET name='$a', mobile='$b', spec='$c', color='$d', pay='$e', image='$fn' WHERE c_id='$id'";

if($con->query($ins)){
   header("location:show.php");
}
}
else{
    
    $ins ="UPDATE std SET name='$a', mobile='$b', spec='$c', color='$d', pay='$e' WHERE c_id='$id'";

if($con->query($ins)){
   header("location:show.php");
}
}

?>