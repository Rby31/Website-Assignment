<?php

include "db.php";

$email=$_POST['email'];
$pwd=$_POST['password'];

$sql="insert into register(email,password)
    values('$email','$pwd')";
$result=mysqli_query($con,$sql);
if($result){
    header("location: login.php");
}else{
    echo "error";
}    
 
?> 