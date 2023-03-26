<?php
$conn = mysqli_connect("localhost", "root", "", "revin");


function signup($data){
    global $conn;
    $email = htmlspecialchars(strtolower(stripslashes($data["email"])));
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $data["password"]));
    $password2 = htmlspecialchars(mysqli_real_escape_string($conn, $data["password2"]));
    $gender = htmlspecialchars(mysqli_real_escape_string($conn, $data["gender"]));

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
    mysqli_query($conn, "INSERT INTO dataacc VALUES ('', '$email', '$password', '$gender')");

    return mysqli_affected_rows($conn);

}
function buy($data){
    global $conn;

    $username = htmlspecialchars(strtolower(stripslashes($data["username"])));
    $title = htmlspecialchars(strtolower(stripcslashes($data["title"])));
    $type = htmlspecialchars(strtolower(stripslashes($data["type"])));
    $materials = htmlspecialchars(strtolower(stripslashes($data["materials"])));
    $number = htmlspecialchars(strtolower(stripslashes($data["number"])));

    mysqli_query($conn, "INSERT INTO inputorder VALUES('', '$username', '$title', '$type', '$materials', '$number')");

    return mysqli_affected_rows($conn);

}

function call($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM inputorder WHERE id = $id");

    return mysqli_affected_rows($conn);

}


?>