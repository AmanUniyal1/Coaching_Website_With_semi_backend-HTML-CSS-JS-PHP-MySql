<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="4,5.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP FORM OF COACHING CENTER</title>
</head>
<body>
    <H1><SPAn>T</SPAn>UTION<span>W</span>ALA</h1>
        <br><br><br><center><img src="logo-png.png" alt=""></img></center>
    <div class="sign-up-form">
    <img src="vector-sign-of-user-icon.webp"background="CENTER">
        <h1>SIGN UP</h1>
    <form name="f1" action="#" method="post">
        <INPut TYPE="NAME" class="Inputbox" placeholder="ENTER USERNAME " name="username" required></INPut>
        <INPut TYPE="number" class="Inputbox" placeholder="ENTER mobile number"name="number"required></INPut>
        <INPut TYPE="password" class="Inputbox" placeholder="ENTER PASSWORD"name="password"required></INPut><br>
        <LAbel>GENDER</LAbel>&nbsp;
        <select name="gender" id="">
            <option value="not selected">select </option>
<option value="male">male</option>
<option value="female">female</option>
        </select>
        <p><input type="checkbox">I agree to the terms of services </p>
        <button type="submit" class="sign_btn" value="register" name="register"> <a href="">submit </a></button><br><br>
        <p>do you have an account ?<a href="4.php" class="aa"> SIGN IN</a></p>
    </form>
</body>
</html>
<?php
if(isset($_POST['register']))
{
    $username  =$_POST['username'];
    $number    =$_POST['number'];
    $password  =$_POST['password'];
    $gender    =$_POST['gender'];
    


    if($username !="" && $number !="" && $password  !="")
    {

    
    
$query = "INSERT INTO reg2 VALUES('','$username', '$number', '$password', '$gender')";

$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert(' successful');</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/NS%20SHARMA/aman.php" />

    <?php
    
}

else

{
    echo " failed ";

}


}
else{
    echo "<script>alert('please fill the form');</script>";
}
}
?>