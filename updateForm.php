<?php
include "connection.php";
$name=$_POST['name1'];
$resister=$_POST['resisterno'];
$class=$_POST['class'];
$gender=$_POST['gender'];
$maths=$_POST['maths'];
$physics=$_POST['physics'];
$chemistry=$_POST['chemistry'];
$biology=$_POST['biology'];
$english=$_POST['english'];
$social=$_POST['social'];
$reg="UPDATE addresult SET name1='$name',resisterno='$resister',class='$class',gender='$gender',maths='$maths',physics='$physics',chemistry='$chemistry',biology='$biology',english='$english',social='$social' WHERE resisterno=$resister";
if(!mysqli_query($conn,$reg))
{
 echo "Error: ".mysqli_error($conn);
}
else{
    echo "<script type='text/javascript'>alert('Student Record Updated Successfully');
    windows.location.href='AddResult.php';</script>";
}
?>