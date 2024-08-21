<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">  
    <title>Login</title>
</head>
<body>
<div>
    <div><a href="#"> <img src="images/logo.png"width="3%" height="40px"> </a></div>
    <div class="left"><img src="images/picture1.jpg" height="100%" width="100%"></div>
<div class="right">
    <h1> SCHOOLABORATION</h1>
    <font> Welcome to Schoolaboration</font><br>
    <form method="POST" >
    <div class="user"><br><br>Username or Email<br><br>
    <input class="username" type="text" id="username" name="name"><br><br>Password</div><br>
    <input class="password" type="text" id="password" name="password"><br><br>
    <a class="forgetpass" href="#">Forget Password?</a><br><br>
     <button class="signinbutton" type="submit" name="login">Sign in </button><br><br>OR<br><br>
     <a href="#">Sign in with Google</a><br><br>New User?
     <a href="signup.html"> Create Account</a></div>
 </form>


</div>

<?php
        $conn = mysqli_connect('localhost','root','','schoolaboration');

global $conn;
    if(isset($_POST['login'])){
            $name = $_POST["name"];
            $password = $_POST["password"];
            $_SESSION["status"] = false;

            //condition for checking valid input from user
            $sql = " Select * from user_info where name='$name' AND password='$password' ";
            $result = mysqli_query($conn, $sql);
            $row_num = mysqli_num_rows($result);
            $data = mysqli_fetch_assoc($result);

            if ($row_num == 1) {
                $_SESSION["status"] = true;
                $phone = $data['phone'];
                $email = $data['email'];
                $_SESSION["phone"] = $phone;
                $_SESSION['nam'] = $name;
                 $_SESSION['email'] = $email;
                
                echo("<script LANGUAGE='JavaScript'>
    window.alert('Login successful');
    window.location.href='dashboard.html';
    </script>");
            } else {
                echo("<script LANGUAGE='JavaScript'>
    window.alert('Invalid');
    window.location.href='login.php';
    </script>");
            }
    }
        ?>
        </body>
</html>