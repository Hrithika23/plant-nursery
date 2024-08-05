<?php
 session_start();
 include("login_register.php");
 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
    $Email =$_POST['email'];
    $password =$_POST['password'];
    if(!empty($Email) && !empty($password))
    {
        $query= "select * from users where email = '$Email' limit 1";
        $result = mysqli_query($con,$query);
        
        

        if($result)
        {
            if($result && mysqli_num_rows($result)> 0)
            {
                $user_data = mysqli_fetch_assoc($result);


                if($user_data['password'] == $password)
                {
                    header("location: categories.html");
                    die; 
                }
            }
        }
        echo "<script type='text/javascript'> alert ('wrong username or password')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert ('wrong username or password')</script>";
    }
    
 }

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,intial-scale=1.0">
        <title>Login page</title>
        <link href="login_register1.css " type="text/css" rel="stylesheet"/>
    </head>
    <body>
   
        <div class="loginbox">
            <h2>User login</h2>
         <input type="text" placeholder="email or username" name="email_username"/>
         <input type="password" placeholder="password" name="password"/>
         <button class="loginbtn"   type="submit" name="login">LOGIN</button>
         <div class="registerlink">
            <span>Not registered ?</span><a href="register.php">click here</a>
         </div>
        </div>
    </body>
</html>