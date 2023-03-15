<?php
session_start();
if(isset($_SESSION["login"])){
    header("location:index.php");
    exit;
}

require "functions.php";

if(isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM dataacc WHERE email = '$email'");

    if(mysqli_num_rows($result) === 1){


        $row = mysqli_fetch_assoc($result);


        if(password_verify($password, $row ["password"])){

            $_SESSION["login"] = true;


            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/inputALL/css/login.css">


    <!-- framework -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>  
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Login</title>
</head>
<body>
    <div class="box">

    </div>
    <?php if(isset($error)) : ?>
    <p>Password / Username salah</p>
    <?php endif; ?>

    <h1>Login Page</h1>
    <form action="" method="post">
        
        

        <div class="inputall">
            <div class="input2">
                <label for="email"></label>
                <i class='fas fa-user-circle' style='font-size:18px'></i>
                <input type="text" name="email" id="email" required="required" placeholder="Email">
            </div>
            <br>
            <div class="input2">
                <label for="password"></label>
                <i class='fas fa-user-lock' style='font-size:14px'></i>
            <input type="password" name="password" id="password" required="required" placeholder="Password">
        </div>
        


        <br>
        <div class="btn">
    
            <button type="submit" name="login">
            <i class='fas fa-file-import' style='font-size:14px'></i>Login</button>
        </div>
        <a href="singup.php">Login</a>
    </div>
</form>
</body>
</html>