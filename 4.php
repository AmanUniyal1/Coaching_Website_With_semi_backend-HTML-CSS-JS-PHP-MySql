
<?php
include("connect.php");
error_reporting(0);
if(isset($_POST['submit']));
{
  $mobile= $_POST['number'];
  $pwd= $_POST['password'];
  $query="SELECT *from reg2 where number='$mobile'&& password='$pwd'";
  $data=mysqli_query($conn,$query);
  $total=mysqli_num_rows($data);
  if($total){
  
  echo "<script>alert('unsuccessful');</script>";}
  else{
 
        echo "<script>alert('succesfully log in');</script>";
    }
  
}
?>
<!DOCTYPE html>
<html lang="en"><link rel="stylesheet" href="4,5.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN FORM OF COACHING CENTER</title>
</head>
<body>

<h1><SPAn>T</SPAn>UTION<span>W</span>ALA</h1>
<br><br><br><center><img src="logo-png.png" alt=""></img></center>
    <div class="sign-in-form" >
<img src="vector-sign-of-user-icon.webp" background="CENTER">
 
    <h1>SIGN IN</h1>
<form name="f1" action="adminpanel.php" method="post"><PRe>
    <INPut TYPE="number"   class="Inputbox" placeholder="ENTER mobile number" name ="number" required ></INPut><br> </br>
    <INPut TYPE="password" class="Inputbox" placeholder=" PASSWORD" name="password"required ></INPut>
</PRe>
<button  type="submit" class="sign_btn"  name="submit">sign in</button>
  

    </FORM></div>
</h3>

</body>
</html>