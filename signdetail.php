<?php
include "connection.php";

$u=$_POST['username1'];
$p=$_POST['password1'];

$query="INSERT INTO signup(username, password1) VALUES ('$u','$p')";
$query=mysqli_query($conn,$query);
if($query)
{
    echo "<script> alert('Successfully Signup');
    window.location='admin.php'; 
    </script>";
}
else
{
    echo "<script> alert('Invalid Details'); 
    window.location='admin.php'; 
    </script>";
}



