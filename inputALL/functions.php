<?php
$conn = mysqli_connect("localhost", "root", "", "revin");


function signup($data){
    global $conn;
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT email FROM dataacc WHERE email = '$email'");

    if(mysqli_fetch_assoc($result)){
        echo"<script>
        alert('Email already exists');
        </script>";
        return false;
    }

    if( $password !== $password2 ){
        echo "<script>
            alert('Passwords uncorrect');
            </script>";
            return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO dataacc VALUES ('', '$email', '$password')");

    return mysqli_affected_rows($conn);

}
function buy($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $title = strtolower(stripcslashes($data["title"]));
    $type = strtolower(stripslashes($data["type"]));
    $materials = strtolower(stripslashes($data["materials"]));
    $number = strtolower(stripslashes($data["number"]));

    mysqli_query($conn, "INSERT INTO inputorder VALUES('', '$username', '$title', '$type', '$materials', '$number')");

    return mysqli_affected_rows($conn);

}


?>