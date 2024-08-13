<?php
include("connect.php");
error_reporting(0);
$id= $_GET['id'];
$query= "SELECT * FROM reg2 where id='$id'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
?>

  
<?php
include("connect.php");
error_reporting(0);
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
        <h1>update</h1>
    <form name="f1" action="#" method="post">
        <INPut TYPE="NAME" class="Inputbox" placeholder="ENTER USERNAME "value="<?php echo $result['username'];?>" name="username" required></INPut>
        <INPut TYPE="number" class="Inputbox" placeholder="ENTER mobile number"value="<?php echo $result['number'];?>"name="number" required></INPut>
        <INPut TYPE="password" class="Inputbox" placeholder="ENTER PASSWORD"value="<?php echo $result['password'];?>"name="password"required></INPut><br>
        <LAbel>GENDER</LAbel>&nbsp;
        <select name="gender" id="" required>
            <option value="not selected">select </option>
<option value="male"
<?php
if($result['gender']=='male'){
    echo"selected";

}


?>
>male</option>
<option value="female"
<?php
if($result['gender']=='female'){
    echo"selected";
    
}


?>>female</option>
        </select>
        <p><input type="checkbox">I agree to the terms of services </p>
        <button type="submit" class="sign_btn" value="update" name="update" onclick=a();> <a href="">update </a></button><br><br>
        <p>do you have an account ?<a href="4.php" class="aa"> SIGN IN</a></p>
    </form>
    <script lang="javascript">
        function a(){
            if(document.f1.username.value=="")
            {
                alert("name required");
                document.f1.username.focus();
                return false;
            }
            else if(document.f1.number.value==""||document.f1.number.length<10|| document.f1.number.length>10)
            {
                alert("mobile no should be 10 digit");
                document.f1.number.focus();
                return false;
            }
            else if(document.f1.password.value==""||document.f1.password.length<10|| document.f1.password.length>14)
            {
                alert("entered pass should b/w 10 to 14 digit ");
                document.f1.password.focus();
                return false;
            }
        }
    </script>
</body>
</html>
<?php
if(isset($_POST['update']))
{
$username  =$_POST['username'];
$number    =$_POST['number'];
$password  =$_POST['password'];
$gender    =$_POST['gender'];

if($username !="" && $number !="" && $password  !="")
{
    
$query = "INSERT INTO reg2 VALUES('$username', '$number', '$password', '$gender')";

$query="UPDATE reg2 set username='$username', number='$number',password='$password',gender='$gender' WHERE id='$id' ";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('update successfully');</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/NS%20SHARMA/adminpanel.php" />

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