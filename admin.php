<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body> 
      
    <div class="admin">
      
            <div class="head">
                <h1><b>SignUp / Login</b></h1>
            </div>
            <a href="s1.php"><img src="https://img.icons8.com/ios/50/ffffff/delete-sign--v1.png"/></a>
            <form method="POST" action="signdetail.php">   
            <div class="adminsign">
             
                <div>
                    <h1><u>Signup</u></h1><br>
                </div>    
                <div>
                    <label>Username</label><br>
                    <input type="text" class="w3-input" name="username1"><br>
                </div>
                <div>
                    <label>Password</label><br>
                    <input type="password" class="w3-input" name="password1" ><br>
                </div>
                <div class="btn">
                    <br><button type="submit" >Submit</button>
                </div>
                <div class="p">
                    <br><p><b>Have an account ?<u> Please Login</u></b></p>
                </div>
            </div>
            </form>
            
            <div class="adminlogin">
            <form method="POST" action="logindetail.php">    
                <div>
                    <h1><u>Login</u></h1><br>
                </div>    
                <div>
                    <label>Username</label><br>
                    <input type="text" class="w3-input" name="username2"><br>
                </div>
                <div>
                    <label>Password</label><br>
                    <input type="password" class="w3-input" name="password2"><br>
                </div>
                <div class="btn">
                    <br><button type="submit">Submit</button>
                </div>
                <div class="p">
                    <br><p><b>Don't Have an account ?<u> Signup</u></b></p>
                </div>
            </div>
            </form>
    </div>
</body>
</html>

