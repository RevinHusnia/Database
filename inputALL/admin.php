<?php
session_start();
// if(isset($_SESSION["btnAdmin"])){
//     header("location:index.php");
//     exit;
// }

require "functions.php";

if(isset($_POST["btnAdmin"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM dataacc WHERE email = '$email'");

    if(mysqli_num_rows($result) === 1){


        $row = mysqli_fetch_assoc($result);


        if(password_verify($password, $row ["password"])){

            $_SESSION["btnAdmin"] = true;


            header("Location: tabel.php");
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
    <link rel="stylesheet" href="/inputALL/css/admin.css">
    <title>Login Administrator</title>
</head>
<body>

<div class="box">

</div>
    <h1>Administrator Login</h1>


<form action="" method="post">

<div class="inputall">
    <div class="input">
        <label for="email"></label>
        <input type="text" name="email" placeholder="Admin Name">
    </div>
    <div class="input">
        <label for="password"></label>
        <input type="password" name="password" placeholder="Password Admin">
    </div>
    
    <div class="btn">
        <button class="btn-btninput" id="btnAdmin" name="btnAdmin">Login Admin</button>
    </div>
</div>
</form>
</body>
</html>