<?php

require("connection.php");

?>
<!DOCTYPE html>
 <html lang="en"><link rel="stylesheet" href="4,5.css">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
 <h1><span>T</span>UTION<span>W</span>ALA</h1>
 <br><br><br><center><img src="logo-png.png" alt=""></img></center>
 <div class="sign-up-form">
    <img src="vector-sign-of-user-icon.webp"background="CENTER">
        <h1>Admin log</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <label>USERNAME</LAbel> <input TYPE=text class="Inputbox" placeholder="ENTER USERNAME " name="Admin_Name">
        <label>PASSWORD</LAbel><br> <input TYPE="password" class="Inputbox" placeholder="ENTER PASSWORD"  name="Admin_pass"><br>
        <button type="submit" name="Login" class=sign_btn>LOG IN </button>
        </form></div>
</pre>

<?php
if(isset($_POST['Login']))
{
    $AdminName=$_POST['Admin_Name'];
    $Adminpass=$_POST['Admin_pass'];
   $query= "SELECT * FROM `admin_login` WHERE 'username'='$_POST[Admin_Name]' And 'password'='$_POST[Admin_pass]'";
   $result=mysqli_query($con,$query);
   if($stmt=mysqli_prepare($result)==1)
   {
    session_start();
    $_SESSION['AdminLogIn']=$_POST['username'];
    header("location: adminpanel.php");
   
   }
   else{
    echo"<script>alert('incorrect password');</script>";
   
 
   }
}

?>
    
 </body>
 </html>