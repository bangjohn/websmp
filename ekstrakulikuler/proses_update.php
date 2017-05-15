<?php
	include "koneksi.php";

	if (isset($_POST['simpan'])) {

    $id =$_POST ['id'];
	  $nisn=$_POST['nisn'];
	  $nama=$_POST['nama'];
	  $kelas=$_POST['kelas'];
	  $alamat=$_POST['alamat'];
	  $ekstrakulikuler=$_POST['ekstrakulikuler'];

	  $query = mysql_query ('UPDATE ekstrakulikuler set nisn ="'.$nisn.'", nama = "'.$nama.'", kelas = "'.$kelas.'",alamat ="'.$alamat.'" ,ekstrakulikuler ="'.$ekstrakulikuler.'"where id ="'.$id.'" ');
	  if($query){
	   header('location:ekstrakulikuler.php');
	  }
	}

?>
