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
		
		include_once "configDatabase.php";
			
		$hasil = mysql_query("SELECT * FROM info_mahasiswa WHERE npm='$npm'", $id_mysql);
		
		if(! $hasil){
			die("Permintaan gagal");
		}

		while($row = mysql_fetch_array($hasil))
		{
			$carinpm = $row['npm'];
			$carinama = $row['nama'];
		}

		//mysql_close($id_mysql);
	?> 
		<div class="row">
			<ul class="button-group">
				<li><a href="view.php?npm=<?php echo $npm?>" class="button">Kembali</a></li>
				<li><a href="list.php" class="button">Menu Utama</a></li>
				<li><a href="index.php?logout" class="button">Logout</a></li>
			</ul>
			
		</div>
		<div class="row">
			<h3>NPM <?php echo $carinpm; ?> Nama <?php echo $carinama; ?>
			<hr/>
			<ul class="disc">
				<?php
				$hasil = mysql_query("SELECT * FROM histori WHERE npm='$npm' ORDER BY id_histori DESC", $id_mysql);
		
				if(! $hasil){
					die("Permintaan gagal");
				}
				
				while($row = mysql_fetch_array($hasil))
				{
					echo "<li>" . $row['tanggal_pembaruan'] . " " . $row['pengguna'] . " " . $row['status'] . " " . $row['npm'] . " " . ($row['keterangan'] != "" ? '<a href="past.php?id= '. $row['id_histori'] .'">[lihat versi ini]</a>' : "") . "</li>";
					/* $caripengguna = $row['nama'];
					$caristatus = $row['pembaruan_terakhir'];
					$carinpm = $row['nama'];
					$cariketerangan = $row['pembaruan_terakhir']; */
				}
				?>
			</ul>
			</h3>
		</div>
	</body>
</html>