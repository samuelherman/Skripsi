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
			
		$hasil = mysql_query("SELECT * FROM info_mahasiswa WHERE npm='$npm'", $id_mysql);
		
		
		if(! $hasil){
			die("Permintaan gagal");
		}


		while($row = mysql_fetch_array($hasil))
		{
			$carinpm = $row['npm'];
			$carinama = $row['nama'];
			$carilog = $row['log'];
		}

		mysql_close($id_mysql);
	?> 
		<div class="row">
			<ul class="button-group">
				<li><a href="view.php?npm=<?php echo $npm?>" class="button">Kembali</a></li>
				<li><a href="list.php" class="button">Menu Utama</a></li>
				<li><a href="" class="button">Logout</a></li>
			</ul>
		</div>
		<div class="row">
			<h5>NPM <?php echo $carinpm; ?> Nama <?php echo $carinama; ?></h5>
			<ul class="disc">
				<li>9 Okt 2014 9:13 AM pascal@unpar.ac.id melihat 2010730013</li>
				<li>9 Okt 2014 9:10 AM pascal@unpar.ac.id mengedit 2010730013</li>
				<li>9 Okt 2014 9:07 AM pascal@unpar.ac.id melihat 2010730013</li>
				<li>7 Okt 2014 8:31 PM chandra@unpar.ac.id melihat 2010730013</li>
				<li>1 Sep 2014 9:13 AM chandra@unpar.ac.id membuat entri 2010730013</li>
			</ul>
		</div>
	</body>
</html>