
<!DOCTYPE html>

<html lang="en">
    <link rel="stylesheet" href="adminpanel.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include("header.php");
?>    
<br><br>
    <h1 align = center>ADMIN PANEL </h1><br><br>
<?php
include("connect.php");
error_reporting(0);

$query= "SELECT * FROM reg2 " ;
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);



if($total!=0)
{  
    ?><center>
    <table><tr>
    <th >id   </th>
        <th >username      </th>
        <th >mobile number </th>
        <th >password      </th>
        <th >gender        </th>
        <th>operation</th>
        </tr>


    <?php
    while( $result=mysqli_fetch_assoc($data))
    {
        echo"
       <tr>
       <td >  ".$result['id']."  </td>
       <td>".$result['username']."</td>
       <td> ".$result['number']."</td>
       <td> ".$result['password']." </td>
       <td>".$result['gender']."</td>
       <td><a href='update_design.php?id=$result[id]'><input type='submit' value='update'class='update'></a>
       <a href='delete.php?id=$result[id]'><input type='submit' value='delete'class='delete'></a></td>
       </tr>
       ";
    }

}
else{
    echo "table don,t have records";
}
?></table>
    </center>
 
</body>
</html>
