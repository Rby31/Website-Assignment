<?php

include "db.php";

$email=$_POST['email'];
$pwd=$_POST['password'];

$sql="select * from register where email='$email' and password='$pwd'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
echo $count;
if($count>0){
    header("location:../main.html");
}else{
    header("location: login.php");
}   
