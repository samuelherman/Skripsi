<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SPBRM | Problem</title>
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
				
			if(! mysql_select_db("spbrm", $id_mysql))
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
		<h3>Daftar masalah yang dimiliki NPM <?php echo $carinpm; ?> Nama <?php echo $carinama; ?>
			<ul class="button-group">
				<li><a href="view.php?npm=<?php echo $npm?>" class="button secondary">Kembali</a></li>
				<li><a href="list.php" class="button secondary">Menu Utama</a></li>
				<li><a href="index.php?logout" class="button secondary">Logout</a></li>
			</ul>
			
		</div>
		<div class="row">
			
			<hr/>
			<ul class="disc">
				<?php
					$hasil = mysql_query("SELECT * FROM masalah WHERE npm='$npm' ORDER BY id_masalah DESC", $id_mysql);
			
					if(! $hasil)
					{
						die("Permintaan gagal");
					}
					
					if(mysql_num_rows($hasil) > 0)
					{
					   while($row = mysql_fetch_array($hasil))
					    {
							echo "<li>" . $row['tanggal'] . " Memiliki masalah dengan/pada kelas " . $row['masalah_dengan'] . ", masalahnya adalah " . $row['masalah'] . ". (Catatan masalah ini dibuat oleh " . $row['pengguna'] . ")</li>";
						}
					}
					else
					{
					  echo "Mahasiswa ini tidak memiliki masalah.";
					}
				?>
			</ul>
			</h3>
		</div>
	</body>
</html>