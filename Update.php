<?php
include "connection.php";
$resister=$_POST['no'];
$query="SELECT * FROM addresult WHERE resisterno=$resister";
$result1=mysqli_query($conn,$query);
$num=mysqli_num_rows($result1);

while($data = mysqli_fetch_assoc($result1))
{
    $n=$data['name1'];
    $r=$data['resisterno'];
    $c=$data['class'];
    $g=$data['gender'];
    $b=$data['birthdate'];
    $m=$data['maths'];
    $p=$data['physics'];
    $ch=$data['chemistry'];
    $b=$data['biology'];
    $e=$data['english'];
    $s=$data['social'];
}
?>
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
        <li><a href="update.php">Update</a></li>
        <li><a href="">Delete</a></li>
        <li><a href="view.php">View</a></li>    
    </ul>    
 </nav>
<form method="POST" class="addform" action="updateForm.php">
<div class="details">
<p>Student Details</p><br><br><hr>
<div class="info">
<label style="font-size:20px; position:relative;  top: 30px; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter Name:<label>    
<input style="position:relative; top:-30px;"placeholder="Enter Name" name="name1" type="text" value="<?php echo $n; ?>" required>
<label style="font-size:20px; position:relative; top: -30px;" >&nbsp&nbsp&nbsp&nbsp&nbspEnter Resistration No:<label>    
<input style="position:relative; top:-30px;" placeholder="Enter  Resistration Number" name="resisterno"type="number" value="<?php echo $r; ?>" required>
<label for="class" style="font-size:20px;">&nbsp&nbsp&nbsp&nbspChoose a class:</label>
  <select name="class" class="class">
  <option  selected><?php echo $c; ?></option>
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
  <select name="gender" class="gender" >
     <option selected><?php echo $g; ?></option> 
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select><br><hr><br>
</div>
</div>
<div class="marks">
    <p>Marks Achieved</p><br><br><hr>
</div>
<div class="mar" style="background-color:black  ; position:relative; top: 80px; left: 460px;">
<label style="font-size:20px; position:relative; left: 0px; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMathematics:<label>    
<input style="position:relative; top:-40px;"placeholder=" Mathematics Marks" type="text" name="maths" value="<?php echo $m; ?>" required>
<label style="font-size:20px; position:relative; top: -60px; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPhysics:<label>    
<input style="position:relative; top:-30px;" placeholder=" Physics Marks" type="text" name="physics" value="<?php echo $p; ?>" required>
<label style="font-size:20px; position:relative; top: -40px; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspChemistry:<label>    
<input style="position:relative; top:-40px;"placeholder=" Chemistry Marks" type="text" name="chemistry" value="<?php echo $ch; ?>" required>
<label style="font-size:20px; position:relative; top:-60; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBiology:<label>    
<input style="position:relative; top:-20px;"placeholder=" Biology Marks" type="text" name="biology" value="<?php echo $b; ?>" required>
<label style="font-size:20px; position:relative; top:-30px ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnglish:<label>    
<input style="position:relative; top:-30px;"placeholder=" Engish Marks" type="text" name="english" value="<?php echo $e; ?>" required>
<label style="font-size:20px; position:relative; top: -40px; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSocial:<label>    
<input style="position:relative; top:-40px;"placeholder=" Social Marks" type="text" name="social" value="<?php echo $s; ?>"required>
</div>
<div class="btn" style="position:relative; top:230px; left:20px;">
<button type="submit" name="submit" style="font: size 30px;">Submit</button>
</div>    
</form>    
</div>
</body>
</html>
