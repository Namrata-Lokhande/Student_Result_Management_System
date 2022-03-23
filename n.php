<?php
include "connection.php";
$re=$_POST['no'];

$query="DELETE  FROM addResult WHERE resisterno=$re";
if(!mysqli_query($conn,$query))
{
    echo "Error: ".mysqli_error($conn);
}
else{
    
        echo "<script type='text/javascript'>alert('Student Record Deleted Successfully');
        windows.location.href='AddResult.php';</script>";
    
}
?>