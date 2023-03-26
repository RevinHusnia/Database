<?php
require "functions.php";
$calling = call("SELECT * FROM inputorder ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tabel Order Live</title>
</head>
<body>
<!-- 
<form action="" method></form>
    <h1>Tabel Order</h1>

    <table border="1" callpading="10" callspacing="0">
        <tr>
            <td>Username</td>
            <td>Title Order</td>
            <td>Type Order</td>
            <td>Materials</td>
            <td>Number</td>
        </tr>
        
        <?php $i = 1 ?>
        <?php foreach($calling as $row) : ?>
        <tr>
            <td><?= $row["username"] ?></td>
            <td><?= $row["titleorder"]?></td>
            <td><?= $row["type"]?></td>
            <td><?= $row["materials"]?></td>
            <td><?= $row["number"]?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table> -->

    <table class="table">
  <thead class="thead-dark">
    <h6>Want Order? <a href="/inputALL/index.php">Click Here!!</a></h6>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username</th>
      <th scope="col">Title Order</th>
      <th scope="col">Type Order</th>
      <th scope="col">Materials</th>
      <th scope="col">Number</th>
      <th scope="col">Controls</th>
    </tr>
  </thead>
  <tbody>


  <?php $i = 1 ?>
  <?php foreach($calling as $row) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $row["username"]?></td>
      <td><?= $row["titleorder"] ?></td>
      <td><?= $row["type"]?></td>
      <td><?= $row["materials"]?></td>
      <td><?= $row["number"]?></td>
      <td>
        <a href="">Edit</a> |
        <a href="hapus.php?id=<?= $row["Id"]; ?>" onclick="return confirm('Are You Admin? ');" >Delete</a>
      </td>
    </tr>
    <?php $i++;?>
  <?php endforeach;?>
  </tbody>
</table>

</table>

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>