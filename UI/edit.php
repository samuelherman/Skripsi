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
			$cariketerangan = $row['keterangan'];
		}

		mysql_close($id_mysql);
	?> 

		<div class="row">
			<h5>Anda mengedit catatan mahasiswa ini sebagai test@unpar.ac.id.<br/>
			NPM <?php echo $carinpm; ?> Nama <?php echo $carinama; ?>
			</h5>
		</div>
		<div class="row">
			<ul class="button-group">
				<li><a href="infomahasiswa.php?npm=<?php echo $npm?>" class="button">Kembali</a></li>
				<li><input class="button" type="submit" name="submit" value="Simpan"></li>
			</ul>
		</div>
		<form>
			<div class="row">
				<div class="small-12 columns">
					<textarea placeholder="<?php echo $cariketerangan; ?>"><?php echo $cariketerangan; ?></textarea>
				</div>
			</div>
		</form>
	</body>
</html>