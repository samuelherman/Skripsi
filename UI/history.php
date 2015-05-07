<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SIRM | History</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<?php
			$npm = $_GET["npm"];
			
			include_once "configDatabase.php";
				
			if(! $id_mysql)
			{
				die("Database tidak bisa dibuka");
			}
				
			if(! mysql_select_db("sirm", $id_mysql))
			{
				die("Database tidak bisa dipilih");
			}
			
			$hasil = mysql_query("SELECT * FROM info_mahasiswa WHERE npm='$npm'", $id_mysql);
			
			if(! $hasil)
			{
				die("Permintaan gagal");
			}

			while($row = mysql_fetch_array($hasil))
			{
				$carinpm = $row['npm'];
				$carinama = $row['nama'];
			}

		?> 
		<div class="row">
			<ul class="button-group">
				<li><a href="view.php?npm=<?php echo $npm?>" class="button secondary">Kembali</a></li>
				<li><a href="list.php" class="button secondary">Menu Utama</a></li>
				<li><a href="index.php?logout" class="button secondary">Logout</a></li>
			</ul>
			
		</div>
		<div class="row">
			<h3>NPM <?php echo $carinpm; ?> Nama <?php echo $carinama; ?>
			<hr/>
			<ul class="disc">
				<?php
					$hasil = mysql_query("SELECT * FROM histori WHERE npm='$npm' ORDER BY id_histori DESC", $id_mysql);
			
					if(! $hasil)
					{
						die("Permintaan gagal");
					}
					
					while($row = mysql_fetch_array($hasil))
					{
						echo "<li>" . $row['tanggal_pembaruan'] . " " . $row['pengguna'] . " " . $row['status'] . " " . $row['npm'] . " " . ($row['keterangan'] != "" ? '<a href="past.php?id= '. $row['id_histori'] .'">[lihat versi ini]</a>' : "") . "</li>";
					}
				?>
			</ul>
			</h3>
		</div>
	</body>
</html>