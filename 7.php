<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="7.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK FORM </title>
</head>
<body>
    <H1><SPAn>T</SPAn>UTION<span>W</span>ALA</h1>
        <br><br><br><center><img src="logo-png.png" alt=""></img></center>
    <div class="sign-up-form">
    <img src="vector-sign-of-user-icon.webp"background="CENTER">
        <h1>CONTACT US</h1>
    <form name="f3">
        <INPut TYPE="NAME" class="Inputbox" placeholder="ENTER NAME " name="i6"></INPut>
        <INPut TYPE="number" class="Inputbox" placeholder="ENTER mobile numberi" name="i7"></INPut>  
<Textarea class="Inputbox" placeholder="ENTER FEEDBACK" name="i8"></Textarea>
       
        <button type="submit" class="sign_btn" onclick=b()><a href="1.php">submit </a> </button><br><br>
    </form>
    <script lang="javascript">
function b()
{
    if(document.f3.i6.value=="")
    {alert("enter your name");
    document.f3.i6.focus();
    return false;
    }
    else if(document.f3.i7.value==""||document.f3.i7.length>10||document.f3.i7.length<10)
    {alert("enter your mobile num");
    document.f3.i7.focus();
    return false;
    }
    else if(document.f3.i8.value=="")
    {alert("enter your feedback");
    document.f3.i8.focus();
    return false;
    }
}
    </script>
</body>
</html>