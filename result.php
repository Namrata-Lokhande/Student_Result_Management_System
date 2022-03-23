<?php
include "connection.php";
$resister=$_POST['no'];
$query="SELECT * FROM addresult WHERE resisterno=$resister";
$result1=mysqli_query($conn,$query);
$num=mysqli_num_rows($result1);

$sum=0;
$index=0;

while($data = mysqli_fetch_assoc($result1))
{
    $n=$data['name1'];
    $class=$data['class'];
    $re=$data['resisterno'];
    $gen=$data['gender'];
    $math=$data['maths'];
    $phy=$data['physics'];
    $bio=$data['biology'];
    $eng=$data['english'];
    $soc=$data['social'];

    $sum=$data['social']+$data['biology']+$data['chemistry']+$data['physics']+$data['maths']+$data['english'];
    if($data['social'] && $data['biology'] && $data['chemistry'] && $data['physics'] && $data['maths'] && $data['english'])
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
}
?>
<html>
<head>
<link rel="stylesheet" href="style4.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Redressed&display=swap" rel="stylesheet">

</head>    
<body>
<a href="s1.php" style="position:relative; left: 800px; top:0px; "><img src="https://img.icons8.com/ios/50/ffffff/delete-sign--v1.png"/></a>

<div class="head">
    <marquee><b><u>Academic Year(2021-2022)</u></b></marquee>
    <span>Result</span>
    
</div>

<div class="result ">
 <div class="details">
    <h1 style="background-color:yellow; color:yellow; border-radius:10px;"><b>Student Details</b></h1><br><br>
    <table class="detailsTable" style="width: 450px; position:relative top:200px; color:white; height: 500px; background-color:transperant">
            <tr>
                <th><span>Student Name:</span></th>
                <th><?php echo $n; ?></th>
            </tr>
        <tbody>
            <tr>
                <th><span>Resistration No : </span></th>
                <th><?php echo $re; ?></th>
            </tr>
            <tr>
                <th><span>Class : </span></th>
                <th><?php echo $class;?></th>
            </tr>
            <tr>
                <th><span>Status<span></th>
                <th><?php echo $status; ?></th>
            </tr>
            <tr>
                <th><span>Grade</span></th>
                <th><?php echo $grade; ?></th>
            </tr>
         <tr>
                <th><span>Total Marks :</span></th>
                <th><?php echo $sum; ?></th>
            </tr>
            <tr>
                <th><span>Percentage</span></th>
                <th><?php echo round(($sum/6),2); ?>%</th>
            </tr>
        </tbody> 
    </table>        
    
    
 </div>
 <div class="marks" style="background-color:yellow;">
    <h1 ><b>Student Marks</b></h1><br><br>
    <table class="markTable" >
        
            <tr>
                <th><span>Mathematics:</span></th>
                <th><?php echo $math; ?></th>
            </tr>
        <tbody>
            <tr>
                <th><span>Physics : </span></th>
                <th><?php echo $phy; ?></th>
            </tr>
            <tr>
                <th><span>Biology : </span></th>
                <th><?php echo $bio;?></th>
            </tr>
            <tr>
                <th><span>English</span></th>
                <th><?php echo $eng; ?></th>
            </tr>
            <tr>
                <th><span>Social</span></th>
                <th><?php echo $soc; ?></th>
            </tr>
            <tr>
                <th><span>Total Marks :</span></th>
                <th><?php echo $sum; ?></th>
            </tr>
            <tr>
                <th><span>Percentage</span></th>
                <th><?php echo round(($sum/6),2); ?>%</th>
            </tr>
        </tbody> 
    </table>        
    
    
 </div>
</div>
</body>
</html>