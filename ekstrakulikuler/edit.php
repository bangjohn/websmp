<!DOCTYPE html>
<?php
	include "koneksi.php";
	$id = $_GET['id'];

if(isset($_GET['id'])){
	$article = tampilkan_id($id);
	while($row = mysql_fetch_array($article)){
		$id = $row['id'];
		$nisn = $row['nisn'];
		$nama = $row['nama'];
		$kelas = $row['kelas'];
		$alamat = $row['alamat'];
		$ekstrakulikuler = $row['ekstrakulikuler'];
	}
}


if(isset($_POST['simpan'])){
	
	$nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];
	$ekstrakulikuler = $_POST['ekstrakulikuler'];
	if(trim($nisn) && trim($nama)){
		if(edit_data( $nisn, $nama,$kelas, $alamat, $ekstrakulikuler,$id)){
			header('Location: ekstrakulikuler.php');
		}else{
			echo'ada masalah saat tambah data';
		}
			
	}else{
		echo'nama harus di isi';
	}
}


function tampilkan_id($id){	
	
	$idm = "SELECT * FROM ekstrakulikuler WHERE id=$id";
   $result = mysql_query($idm) or die('gagal');
   return $result;
}


function edit_data( $nisn, $nama,$kelas, $alamat, $ekstrakulikuler,$id){
	
$query = "UPDATE ekstrakulikuler SET nisn='$nisn', nama='$nama',  kelas='$kelas',alamat='$alamat',ekstrakulikuler='$ekstrakulikuler' WHERE id=$id";
 $result = mysql_query($query) or die('gagal');
 return $result;
}
?>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>SMP Kita</title>

<!-- CSS  -->
	<link href="material-icons.css" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<title>Edit Data</title>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
    <a id="logo-container" href="index.html" class="brand-logo">SMP Kita</a>
		<ul class="right hide-on-med-and-down">
			<li><a href="index.php">Home</a></li>
			<li><a href="berita.php">Berita</a></li>
			<li class="active"><a href="ekstrakulikuler.php">Ekstrakulikuler</a></li>
			<li><a href="akademik.php">Akademik</a></li>
			<li><a href="kepegawaian.php">Kepegawaian</a></li>
		</ul>

		<ul id="nav-mobile" class="side-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="berita.php">Berita</a></li>
			<li class="active"><a href="ekstrakulikuler.php">Ekstrakulikuler</a></li>
			<li><a href="akademik.php">Akademik</a></li>
			<li><a href="kepegawaian.php">Kepegawaian<a/></li>
		</ul>
		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot"></div>
    <div class="parallax"><img src="bg1.jpg" alt="Unsplashed background img 1"></div>
</div>

 
<!-- ISI  -->
<div class="container">
	<div class="col s12 center">
	<h4>Edit data</h4><br><br>
	<form action="" method="post">
		<table align="center">
			<tr> 
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<td>NISN</td>
				<td><input type="text" name="nisn" value="<?php echo $nisn ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" value="<?php echo $kelas ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
			</tr>
			<tr>
				<td>Ekstrakulikuler</td>
				<td><input type="text" name="ekstrakulikuler" value="<?php echo $ekstrakulikuler ?>"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>
	</form>
	</div>
</div>
<!-- Akhir ISI  -->


<footer class="page-footer teal">
    <div class="container">
    <div class="row">
        <div class="col l6 s12">
        <h5 class="white-text">SMP Kita</h5>
			<p class="grey-text text-lighten-4">Jln. Simanalagi No.555 Pertamburan City Jakarta Atas</p>
        </div>
        <div class="col l3 s12">
        <h5 class="white-text">Navigasi</h5>
        <ul>
			<li><a class="white-text" href="#!">Tentang</a></li>
            <li><a class="white-text" href="#!">Kegiatan</a></li>
            <li><a class="white-text" href="#!">Laporan</a></li>
            <li><a class="white-text" href="#!">Masuk</a></li>
        </ul>
        </div>
		<div class="col l3 s12">
        <h5 class="white-text">Tautan</h5>
        <ul>
            <li><a class="white-text" href="#!">Tentang</a></li>
            <li><a class="white-text" href="#!">Kegiatan</a></li>
            <li><a class="white-text" href="#!">Laporan</a></li>
            <li><a class="white-text" href="#!">Masuk</a></li>
        </ul>
        </div>
    </div>
    </div>
    <div class="footer-copyright">
		<div class="container">
			Made by <a class="blue-text text-lighten-3">Love</a>
		</div>
    </div>
</footer>

  <!--  Scripts-->
  <script src="jquery.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>		