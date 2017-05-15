<!DOCTYPE html>
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
    <div class="section no-pad-bot">
    </div>
    <div class="parallax"><img src="bg1.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <p><h2>FUTSAL</h2><img src="ft3.JPG" height="3%" width="8%" align="middle">     <img src="ft4.JPG" height="3%" width="8%" align="middle"> 
</p>
<p>
Futsal adalah permainan bola yang dimainkan oleh dua tim, yang masing-masing beranggotakan lima orang. Tujuannya adalah memasukkan bola ke gawang lawan, dengan memanipulasi bola dengan kaki. Selain lima pemain utama, setiap regu juga diizinkan memiliki pemain cadangan. Tidak seperti permainan bola dalam ruangan lainnya, lapangan futsal dibatasi garis, bukan net atau apapan.
</p>
<p><H2>RENANG</H2><img src="r3.PNG" height="3%" width="8%" align="middle"></p>
<p>
Renang adalah olahraga yang melombakan kecepatan atlet renang dalam berenang. Gaya renang yang diperlombakan adalah gaya bebas, gaya kupu-kupu, gaya punggung, dan gaya dada. Perenang yang memenangkan lomba renang adalah perenang yang menyelesaikan jarak lintasan tercepat. Pemenang babak penyisihan maju ke babak semifinal, dan pemenang semifinal maju ke babak final.

Bersama-sama dengan loncat indah, renang indah, renang perairan terbuka, dan polo air, peraturan perlombaan renang ditetapkan oleh badan dunia bernama Federasi Renang Internasional (FINA). Persatuan Renang Seluruh Indonesia (PRSI) adalah induk organisasi cabang olahraga renang di Indonesia.
</p>
<p><H2>VOLLY BALL</H2><img src="v.JPG" height="3%" width="5%" align="middle">     <img src="v1.PNG" height="3%" width="5%" align="middle"> </p>
<p>
Bola voli adalah olahraga permainan yang dimainkan oleh dua grup berlawanan. Masing-masing grup memiliki enam orang pemainMempererat persahabatan nasional dan internasional.
</p>
        </div>
      </div>

    </div>
  </div>
  
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'websmp';

$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());

	function tampilkan(){
	global $link;
	$qmember = "SELECT * FROM olahraga";
	$result = mysqli_query($link, $qmember) or die('gagal total');
	
	return $result;
	
	}
	$member=tampilkan();

?>

<table border="1" height="400" width="100%">
<tr>
<td>	
<table align="center" style="width:80%"; border="0">
	<tr id="judul"; style="background-color:maroon">
	<h3 align="center">Anggota OLAHRAGA SMP KITA</h3>
	<th>No.</th>
	<th>No.Induk</th>
	<th>Nama</th>
	<th>Alamat</th>
	<th>No Telp</th>
	<th>Cabor</th>
</tr>
<?php $i=1; 
while($row = mysqli_fetch_assoc($member)) { ?> 
	<tr style="background-color:pink">
		<td align="center"><?= $i++; ?></td>
		<td align="center"><?= $row['id']; ?></td>
		<td align="center"><?= $row['nama']; ?></td>
		<td align="center"><?= $row['alamat']; ?></td>
		<td align="center"><?= $row['notlp']; ?></td>
		<td align="center"><?= $row['cabor']; ?></td>
	</tr>
<?php } ?>
	</table>
</td>
</tr>
</table>
        </div>
      </div>
    </div>
  </div>

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
