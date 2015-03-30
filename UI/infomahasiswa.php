<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SIRM | Welcome</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
	<div class="row">
			<h5>Anda melihat catatan mahasiswa ini sebagai test@unpar.ac.id.</h5>
		</div>
		<div class="row">
			<ul class="button-group">
				<li><a href="editmahasiswa.php" class="button">Edit</a></li>
				<li><a href="lihathistori.php" class="button">Lihat Histori</a></li>
			</ul>
		</div>
		<hr/>
	<?php
		$npm = $_GET["npm"];
		
		$pemakai="admin";
		$pass="admin";
		$id_mysql=mysql_connect("localhost", $pemakai, $pass);
			
		if(! $id_mysql){
			die("Database tidak bisa dibuka");
		}
			
		if(! mysql_select_db("sirm", $id_mysql)){
			die("Database tidak bisa dipilih");
		}
			
		$cari = mysql_query("SELECT * FROM info_mahasiswa WHERE npm='$npm'", $id_mysql);
		while($row = mysql_fetch_array($cari))
		{
			echo "NPM : " ; echo $row['npm']; echo "<br>";
			echo "Nama : " ; echo $row['nama']; echo "<br>";
	?>
<xmp style="display:none;">
<?php
echo $row['keterangan'];
?>
</xmp>
	<?php
		}
	?>
		<script src="js/0.2/strapdown.js"></script>
	</body>
</html>