<?php 
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require "functions.php";

if(isset($_POST["pay"])){
    if(buy($_POST) > 0){
        echo"<script>
            alert('your order succes')
            </script>";
    }
    else{
        mysqli_errno($conn);
    }

}
?>
<!-- end php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/inputALL/css/input.css">
    <link rel="shortcut icon" href="/inputALL/img/R.png" type="image/x-icon">
    <title>Input Data Joki</title>
</head>
<body>

    <div class="box">

    </div>
    <h1>Input Data Joki</h1>
    <!-- method -->
    <form action="" method="post">
        <div class="alldiv">
        
            <div class="inputall">
                
            <div class="input">
                <label for="username"></label>
                <input class="input1" type="text" id="username" name="username" placeholder="username"/>
            </div>
            <br>
            <div class="input">
                <label for="title"></label>
                <input class="input2" type="text" id="title" name="title" placeholder="Title Order"/>
            </div>
            <br>
            <div class="input">
                <label for="type"></label>
                <input class="input3" type="text" id="type" name="type" placeholder="Type Order"/>
            </div>
            
            <p>note : Makalah, Canva Design</p>
            <div class="input">
                <label for="materials"></label>
                <input class="input4" type="text" id="materials" name="materials" placeholder="materials"/>
            </div>
            <br>
            <div>
                <label for="number"></label>
                <input class="input5" type="number" id="number" name="number" placeholder="your number">
            </div>
            
            <div class="btn">
                <button class="btn btn-1" type="submit" name="pay" id="pay">ORDER</button>
            </div>
            
        </div>
    </div>
    </form>
        <!-- end method -->
    
    </body>
</html>