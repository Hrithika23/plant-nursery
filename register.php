<?php
 session_start();
 include("login_register.php");
 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
    $username =$_POST['username'];
    $Email =$_POST['email'];
    $Phone_no =$_POST['phone_no'];
    $password =$_POST['password'];

    if(!empty($username) && !empty($Email))
    {
        $query ="insert into users(username,email,phone_no,password) values('$username','$Email',' $Phone_no','$password')";
        mysqli_query($con,  $query);
        echo "<script type='text/javascript'> alert ('successfully registered')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert ('please enter a valid information')</script>";
    }



 }

?>











<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,intial-scale=1.0">
        <title>Registration page</title>
        <link href="login_register1.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div class="registerbox">
            <h2>SIGN UP</h2>
            <form action="" method="POST">
                <input type="text" placeholder=" username" name="username"/>
                <input type="email" placeholder=" Email" name="email"/>
                <input type="number" placeholder=" Phone_no" name="phone_no"/>
                <input type="password" placeholder=" password" name="password"/>
                <button class="registerbtn" type="submit" name="registerbtn">REGISTER</button>
         <div class="loginlink">
            <span> If you already registered ?</span><a href="login.php">click here<b>to go login</b></a>
         </div>
         </form>
        </div>
    </body>
</html>