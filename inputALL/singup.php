<?php 
require "functions.php";

if(isset($_POST["singup"])) {
    if(signup($_POST) > 0) {
        echo "<script>
                alert('save success');
            </script>";

            header("Location: login.php");
            exit;
    }
    else{
        mysqli_errno($conn);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/inputALL/css/singup.css">

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
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Sing Up</title>

!


</head>
<body>
        <img src="/inputALL/img/bgg.jpg" alt="">
    <div class="box">

    </div>
    <h1>SING UP PAGE</h1>

    <form action="" method="post">
        
        <div class="inputall">
            <div class="input1">
                <label for="email"></label>
                <i class='fas fa-user-circle' style='font-size:18px'></i>
                <input name="email" type="text" id="email" placeholder="Email">
            </div>
            <br>

            <div class="input1">
                 <label for="password"></label>
                 <i class='fas fa-user-lock' style='font-size:14px'></i>
                <input name="password" type="password" id="password" placeholder="Password">
            </div>
            <br>
            
            <div class="">
                <label for="password2"></label>
                <i class='fas fa-user-check' style='font-size:14px'></i>
                <input name="password2" type="password" id="password2" placeholder="Confirm Password">
            </div>
            <br>
            <div class="">
                <label for="gender"></label>
                <i class="fa fa-venus-mars" style="font-size:17px"></i>
                <input list="browsers" name="gender" type="choice" id="gender" placeholder="Gender">

                <datalist id="browsers">
                    <option value="Man">
                    <option value="Women">
                </datalist>
            </div>
            <br>
            
            <div class="btn">
                <button class="btn btn-2" type="submit" name="singup">
                <i class='fas fa-file-import' style='font-size:14px'></i>SignUp</button>
            </div>
            <p>Already have an account <a href="login.php">SignIn</a></p>
        </div>
    </form>
</body>
</html>