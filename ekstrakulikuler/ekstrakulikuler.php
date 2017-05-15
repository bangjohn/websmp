<!DOCTYPE html>
<?php
	include "koneksi.php";
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
  
  
  
  
<!--   ISI KONTEN   -->
<div class="container">
<br><br>
<h1 class="header center teal-text text-accent-3">SMP Kita</h1>
    <div class="row center">
    <h5 class="header col s12 black-text dark">EKSTRAKULIKULER SMP KITA</h5>
    </div>
    <br><br>
		<div class="section">
		<!--   Icon Section   --> 
		<div class="row">
			<div class="col s12 m4">
			<div class="icon-block">
				<h4 class="center"><img src="P1.JPG" height="5%" width="10%"> </h4>
				<h5 class="center"><a href="pramuka.php">PRAMUKA</h5></a>
				<p class="light">"PRAMUKA" merupakan singkatan dari Praja Muda Karana,yang memiliki arti Rakya Muda yang Suka Berkarya.</p>
			</div>
			</div>
			<div class="col s12 m4">
			<div class="icon-block">
				<h4 class="center"><img src="g4.JPG" height="10%" width="20%"> </h4>
				<h5 class="center"><a href="pmr.php">PALANG MERAH REMAJA</h5></a>
				<p class="light">Wadah pembinaan yang dilaksanakan oleh Palang Merah Indonesia yang berpusat di sekolah-sekolah ataupun kelompok-kelompok masyarakat.</p>
			</div>
			</div>
			<div class="col s12 m4">
			<div class="icon-block">
				<h4 class="center"><img src="g1.PNG" height="10%" width="20%"> </h4>
				<h5 class="center"><a href="olahraga.php">OLAHRAGA</h5></a>
				<p class="light">Dengan berolahraga metabolisme tubuh menjadi lancar sehingga distribusi dan penyerapan nutrisi dalam tubuh menjadi lebih efektif.</p>
			</div>
			</div>
		</div>
		</div>
</div>
<!--   Table DB   -->
<div class="container">
    <div class="section">
    <div class="row">
		<div class="col s12 center">   
		<h3 align="center">Data Ekstrakulikuler SMP Kita</h3>	
		<table align="center" style="width:80%"; border="1">
			<tr>
				<td><a href="insert.php"><input type='submit' value='Tambah Data'></a></td>
			</tr>
			<tr align="center">
				<td bgcolor="#20b2aa" width="5%"><b>No</b></td>
				<td bgcolor="#20b2aa" width="5%"><b>NISN</b></td>
				<td bgcolor="#20b2aa" width="20%"><b>Nama</b></td>
				<td bgcolor="#20b2aa" width="30%"><b>Kelas</b></td>
				<td bgcolor="#20b2aa" width="10%"><b>Alamat</b></td>
				<td bgcolor="#20b2aa" width="30%"><b>Ekstrakulikuler</b></td>
				<td bgcolor="#20b2aa" width="30%" colspan='2'><b>Aksi</b></td>
			</tr>
<?php
$i=0;
$query = mysql_query("SELECT * FROM ekstrakulikuler");
while ($data= mysql_fetch_array ($query)) {
	$i++;
	?>
		<tr align="center">
		<td bgcolor="linen"><?php echo $i; ?></td>
		<td bgcolor="linen"><?php echo $data['nisn']; ?></td>
		<td bgcolor="linen"><?php echo $data['nama']; ?></td>
		<td bgcolor="linen"><?php echo $data['kelas']; ?></td>
		<td bgcolor="linen"><?php echo $data['alamat']; ?></td>
		<td bgcolor="linen"><?php echo $data['ekstrakulikuler']; ?></td>
		<td width="10%" bgcolor="linen"><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
		<td width="10%" bgcolor="linen"><a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
		</tr>
	<?php 
}
?>
		</table>
		</div>
    </div>
    </div>
</div>
<!--   Akhir Table DB   -->
<!--   AKHIR KONTEN   -->

  
  
  
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