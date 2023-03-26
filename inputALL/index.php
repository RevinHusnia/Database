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

            header("Location: tabel.php");
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
    <link rel="stylesheet" href="/inputALL/css/navbar.css">
    <title>Input Data Joki</title>
</head>
<body>
    
    <!-- navbar content -->
    <div class="container">
        <ul class="ulbar">
            <li class="li">
                <h1>Menu</h1>
            </li>
            <li class="li">
                <a href="/inputALL/html/home.html">Home</a>
            </li>
            
            <li class="li">
                <a href="/inputALL/html/about me.html">About Me</a>
            </li>
            
            <li class="li">
                <a href="">About Web</a>
            </li>
            
            <li class="li">
                <a href="/inputALL/admin.php">Tabel Order</a>
            </li>
            
            <li class="li">
                <a href="/inputALL/logout.php">Logout</a>
            </li>
        </ul>
    </div>
    <!-- navbar content end -->
    
    <img src="/inputALL/img/php2.jpg" alt="">
    
    
    <form action="" method="post">
        <div class="alldiv">
            
            <div class="inputall">
                
            <div class="box">
                </div>
                <h1 class="hd">Input Data Joki</h1>
                
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
                    <input list="lala" class="input3" id="type" name="type" placeholder="Type Order"/>
                    

                <datalist id="lala">
                    <option value="Makalah">
                    <option value="Canva Design">
                    <option value="Cisco">
                </datalist>

                </div>
                
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