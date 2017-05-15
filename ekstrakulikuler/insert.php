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


<!-- ISI  -->
<div class="container">
	<div class="col s12 center">
	<h4>Input New Data</h4>
    <form  action="proses_insert.php" method="post">
    <table align="center">
        <tr>
			<td>NISN</td>
			<td><input type="text" name="nisn" placeholder="5 digit NISN"></td>
        </tr>
        <tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Nama Anda"></td>
        </tr>
		<tr>
			<td>Kelas</td>
			<td><input type="text" name="kelas" placeholder="Kelas Anda"></td>
        </tr>
        <tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" placeholder="Alamat Anda"></td>
        </tr>
		<tr>
			<td>Ekstrakulikuler</td>
			<td><input type="text" name="ekstrakulikuler"></td>
        </tr>
        <tr>
			<td></td>
			<td><input type="submit" name="submit" value="Simpan"></td>
        </tr>
		<tr>
			<td></td>
		</tr>
    </table>
    </form>
	</div>
</div>
<!-- AKhir ISI  -->


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