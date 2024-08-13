<?php
include("connect.php");
$id= $_GET['id'];
$query="DELETE FROM reg2 WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data){
    echo"<script>alert('deleted');</script>";?>
     <meta http-equiv = "refresh" content = "0; url = http://localhost/NS%20SHARMA/adminpanel.php" />
    <?php
}
else{
    echo "<script>alert('failed');</script>";
}
?>