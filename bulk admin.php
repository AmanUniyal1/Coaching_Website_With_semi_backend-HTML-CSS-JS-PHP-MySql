
<?php

require("connection.php");

?>

<?php
if(isset($_POST['signin'])){
   $query= "SELECT * FROM `admin_login` WHERE 'username'='$_POST[Admin_Name]' And 'password'='$_POST[Admin_pass]'";
   $result=mysqli_query($con,$query);
   if(mysqli_num_rows($result)==1)
   {
    session_start();
    $_SESSION['AdminLogIn']=$_POST['username'];
    header(`location: adminpanel.php`);
    echo "correct";
   }
   else{
    echo`<script>alert('incorrect password');</script>`;
   
   echo"incorrect";
   }
}

?>