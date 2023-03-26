<?php
require 'functions.php';

$id = $_GET["id"];

if(hapus($id) > 0){
    echo "<script>
    alert('Are your administrator?');
    document.location.href = 'admin.php';
        </script>";
} else {
    echo "<script>
    alert('data not deleted');
    document.location.href = 'index.php';
        </script>";
}

?>