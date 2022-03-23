<?php
include "connection.php";
?>
<html>
<head>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style6.css">
</head>    
<body>
<div class="view">
 <nav>
    <ul>
        <li><a href="s1.php">Home</a></li>
        <li><a href="AddResult.php">Add</a></li>
        <li><a href="Update1.php">Update</a></li>
        <li><a href="delete.php">Delete</a></li>
        <li><a href="view.php">View</a></li>    
    </ul>    
 </nav>
<form method="POST">
<div class="result" >
<div>
<table class="data-table">
	 	<thead>
			<tr>
				<th>Resister No</th>
				<th>Name</th>
				<th>Class</th>
				<th>Maths</th>
				<th>Physics</th>
                <th>Chemistry</th>
                <th>Biology</th>
                <th>English</th>
                <th>Social Studies</th>
                <th>Total Marks</th>
                <th>Percentage</th>
                <th>Grade</th>
                <th>Status</th>
			</tr>

		</thead>
		<tbody>
<?php 
            
$query = "SELECT * FROM addResult ORDER BY resisterno ASC";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($result) > 0 ) {
    while ($row = mysqli_fetch_array($result)) 
    {
        $res= $row['resisterno'];
        $name = $row['name1'];
        $class = $row['class'];
        $maths = $row['maths'];
        $physics=$row['physics'];
        $chemistry=$row['chemistry'];
        $biology=$row['biology'];
        $english=$row['english'];
        $social=$row['social'];

        $sum=$row['social']+$row['biology']+$row['chemistry']+$row['physics']+$row['maths']+$row['english'];
    if($row['social'] && $row['biology'] && $row['chemistry'] && $row['physics'] && $row['maths'] && $row['english'])
        {
            $status= ($sum>=246) ? "Pass" : "Fail";
        }
        else
        {
            $status="Fail";
        }
        if($sum>=0 && $sum<=245)
        {
            $grade="C";
        }
        elseif($sum>=246 && $sum<=305)
        {
            $grade="B";
        }
        elseif($sum>=306 && $sum<=425)
        {
            $grade="B+";
        }
        elseif($sum>=426 && $sum<=546)
        {
            $grade="A";
        }
        elseif($sum>=546)
        {
            $grade="A+";
        }
    

        
        $per=round(($sum/6),2);
        echo "<tr>";
        echo "<td><h1>$res</h1></td>";
        echo "<td><h3>$name</h3></td>";
        echo "<td><h2>$class</h2></td>";
        echo "<td><h2>$maths</h2></td>";
        echo "<td><h2>$physics</h2></td>";
        echo "<td><h2>$chemistry</h2></td>";
        echo "<td><h2>$biology</h2></td>";
        echo "<td><h2>$english</h2></td>";
        echo "<td><h2>$social</h2></td>";
        echo "<td><h2>$sum</h2></td>";
        echo "<td><h2>$per</h2></td>";
        echo "<td><h2>$grade</h2></td>";
        echo "<td><h2>$status</h2></td>";                
        echo "</tr>";
        
    }
}

         
        ?>
	
		</tbody>
		
	</table>

</div>
</form>    

</div>

    
</body>
</html>