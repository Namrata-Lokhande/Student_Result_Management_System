<html>
<head>
    <link rel="stylesheet" href="style1.css">
</head>    
<body>
<div class="add">
 <nav>
    <ul>
        <li><a href="s1.php">Home</a></li>
        <li><a href="AddResult.php">Add</a></li>
        <li><a href="update1.php">Update</a></li>
        <li><a href="delete.php">Delete</a></li>
        <li><a href="view.php">View</a></li>    
    </ul>    
 </nav>
<form method="POST" class="addform">
<div class="details">
<p>Student Details</p><br><br><hr>
<div class="info">
<input placeholder="Enter Name" name="name1"type="text" required>
<input placeholder="Enter  Resistration Number" name="resisterno"type="number" required>
<label for="class" style="font-size:20px;">&nbsp&nbsp&nbsp&nbspChoose a class:</label>
  <select name="class" class="class">
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
    <option value=4>4</option>
    <option value=5>5</option>
    <option value=6>6</option>
    <option value=7>7</option>
    <option value=8>8</option>
    <option value=9>9</option>
    <option value=10>10</option>
  </select>
  <br><hr><br><br>
<label for="gender" style="font-size:20px;">&nbsp&nbsp&nbsp&nbspGender:</label>
  <select name="gender" class="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select><br><hr><br>
  <label for="birthday" class="l">&nbsp&nbsp&nbsp&nbspBirth Date:</label>
  <input type="date" id="birthdate" name="birthdate">
</div>
</div>

<div class="marks">
    <p>Marks Achieved</p><br><br><hr>
</div>
<div class="mar">
<input placeholder=" Mathematics Marks" type="text" name="maths" required>
<input placeholder=" Physics Marks" type="text" name="physics" required>
<input placeholder=" Chemistry Marks" type="text" name="chemistry" required>
<input placeholder=" Biology Marks" type="text" name="biology" required>
<input placeholder=" Engish Marks" type="text" name="english" required>
<input placeholder=" Social Marks" type="text" name="social" required>
</div>
<div class="btn">
<button type="submit" name="submit" style="font: size 30px;">Submit</button>
</div>    
</form>    
</div>
</body>
</html>
<?php
include "connection.php";
if(isset($_POST['submit']))
{
    if(empty($_POST['name1']) || empty($_POST['resisterno']) || empty($_POST['class']) || empty($_POST['gender'])
     ||empty($_POST['birthdate']) || empty($_POST['maths']) ||empty($_POST['physics'])
    || empty($_POST['chemistry']) || empty($_POST['biology']) || empty($_POST['english']) || empty($_POST['social']))
    {
        die("Please fill all the required data");
    }
    else
    {
        $name1=$_POST['name1'];
        $resisterno=$_POST['resisterno'];
        $class=$_POST['class'];
        $gender=$_POST['gender'];
        $birthdate=$_POST['birthdate'];
        $maths=$_POST['maths'];
        $physics=$_POST['physics'];
        $chemistry=$_POST['chemistry'];
        $biology=$_POST['biology'];
        $english=$_POST['english'];
        $social=$_POST['social'];

        $query="INSERT INTO addresult(name1,resisterno,class,gender,birthdate,maths,physics,chemistry,biology,english,social) VALUES ('$name1','$resisterno','$class','$gender','$birthdate','$maths','$physics','$chemistry','$biology','$english','$social')";
        
        $run=mysqli_query($conn,$query);
        if($query)
        {
            echo "<script> alert('Added  Result successfully');
            window.location='AddResult.php'; 
            </script>";
        }
    }
}
?>
