<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    mysql_query ("DELETE FROM ekstrakulikuler WHERE id='$id'");

    header("location:ekstrakulikuler.php?");
 ?>
