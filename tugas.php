<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'tgslatihan';

$link = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());

	function tampilkan(){
	global $link;
	$qmember = "SELECT * FROM matakuliah";
	$result = mysqli_query($link, $qmember) or die('gagal total');
	
	return $result;
	
	}
	$member=tampilkan();

?>

<table border="1" height="400" width="100%">
<tr>
<td bgcolor="grey">	
<table align="center" style="width:80%"; border="0">
	<tr id="judul"; style="background-color:maroon">
	<h2 align="center">MataKuliah di Fasilkom</h2>
	<th>No.</th>
	<th>KDMK</th>
	<th>NamaMK</th>
	<th>SKS</th>
	<th>Semester</th>
</tr>
<?php $i=1; 
while($row = mysqli_fetch_assoc($member)) { ?> 
	<tr style="background-color:pink">
		<td align="center"><?= $i++; ?></td>
		<td align="center"><?= $row['KDMK']; ?></td>
		<td align="center"><?= $row['NamaMK']; ?></td>
		<td align="center"><?= $row['SKS']; ?></td>
		<td align="center"><?= $row['Semester']; ?></td>
	</tr>
<?php } ?>
	</table>
</td>
</tr>
</table>