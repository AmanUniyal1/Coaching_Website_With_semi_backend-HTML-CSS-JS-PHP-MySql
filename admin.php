
<?php

require("connection.php");

?>

<html>
    <link rel="stylesheet" href="4,5.css">
<head></head>
<body>
   
    <h1><span>T</span>UTION<span>W</span>ALA</h1>
        <br><br><br><center><img src="logo-png.png" alt=""></img></center>
    <div class="sign-up-form">
    <img src="vector-sign-of-user-icon.webp"background="CENTER">
        <h1>Admin log</h1>
    <form method="POST" >
        <label>USERNAME</LAbel> <input TYPE=text class="Inputbox" placeholder="ENTER USERNAME " name="Admin_Name">
        <label>PASSWORD</LAbel><br> <input TYPE="password" class="Inputbox" placeholder="ENTER PASSWORD"  name="Admin_pass"><br>
        <button type="submit" name="signin" class=sign_btn>LOG IN </button>
     
</form></div>
</pre>
<?php
if(isset($_POST['signin'])){
  /* $query= "SELECT * FROM admin_login WHERE 'username'='$_POST[Admin_Name]' And 'password'='$_POST[Admin_pass]'";
   $result=mysqli_query($con,$query);
   if(mysqli_num_rows($result)==1)
   {
    session_start();
    $_SESSION['AdminLogIn']=$_POST['username'];
    header(`location': adminpanel.php`);
    echo "correct";*/?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/NS%20SHARMA/adminpanel.php" />
<?php
   }
   else{
    echo`<script>alert('incorrect password');</script>`;
   //echo"incorrect";
   }


?>

</body>
</html>