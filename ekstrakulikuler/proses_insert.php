<?php
  include 'koneksi.php';

  if (isset($_POST['submit'])) {
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];
	$ekstrakulikuler=$_POST['ekstrakulikuler'];

  $query=mysql_query("INSERT INTO  `websmp`.`ekstrakulikuler` (`nisn` ,`nama`,`kelas`,`alamat`,`ekstrakulikuler`)VALUES ('$nisn',  '$nama',  '$kelas', '$alamat', '$ekstrakulikuler')");
  if($query){
    header("location:ekstrakulikuler.php");
  }

  }
?>
