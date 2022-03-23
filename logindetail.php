<?php
include "connection.php";
$u1=$_POST['username2'];
$p1=$_POST['password2'];
$user = "SELECT username , password1 from signup WHERE username='$u1' and password1='$p1'";
$runcheck = mysqli_query($conn , $user) or die(mysqli_error($conn));
if (mysqli_num_rows($runcheck) > 0) 
	{
        $row = mysqli_fetch_array($runcheck);
        $user=$row['username'];
        $pass=$row['password1'];
    }
    if($user == $u1 && $pass == $p1)
    {
        $query="INSERT INTO login(username, password2) VALUES ('$u1','$p1')";
        $run = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
        echo "<script> alert('Successfully Login'); 
        window.location='AddResult.php'; 
        </script>";
    }
    else{
        echo "<script> alert('Invalid Details'); 
        window.location='admin.php'; 
        </script>";
    }
?>
