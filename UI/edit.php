<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SPBRM | Edit</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<?php
		session_start();
		$npm = $_GET['npm'];
		
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
			$carinama = $row['nama'];
			$cariketerangan = $row['keterangan'];
			$caricatatan = $row['catatan'];
		}

		if(isset($_POST['submit']))
		{
			$keteranganbaru = "";
			$keteranganbaru = $_POST['keteranganbaru'];
			$catatanbaru = $_POST['catatanbaru'];

			$sql1 = "UPDATE info_mahasiswa SET keterangan='$keteranganbaru', catatan='$catatanbaru', pembaruan_terakhir=now() WHERE npm='$npm'";
			$sql2 = "INSERT INTO histori (npm, pengguna, status, tanggal_pembaruan, keterangan, catatan) VALUES ('". mysql_real_escape_string($npm)  ."', '".$_SESSION['email']."', 'mengedit', now(), '". mysql_real_escape_string($keteranganbaru)  ."', '". mysql_real_escape_string($catatanbaru)  ."')";
			
			if (mysql_query($sql1) & mysql_query($sql2) === TRUE) 
			{
				echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=list.php">';
			} 
			else
			{
				echo "Error: " . $sql1 . "<br>" . $id_mysql->error;
				echo "Error: " . $sql2 . "<br>" . $id_mysql->error;
			}
		}
		else
		{
		?>
		<div class="row">
			<h3>Anda mengedit catatan mahasiswa ini sebagai <?php echo $_SESSION['email']?>.<br/>
			NPM <?php echo $npm; ?> Nama <?php echo $carinama; ?>
			</h3>
		</div>
		<form method="post" action="edit.php?npm=<?php echo $npm?>">
			<div class="row">
				<ul class="button-group">
					<li><a href="view.php?npm=<?php echo $npm?>" class="button secondary">Kembali</a></li>
					<li><input class="button" type="submit" name="submit" value="Simpan"></li>
					<li><a href="list.php" class="button secondary">Menu Utama</a></li>
					<li><a href="index.php?logout" class="button secondary">Logout</a></li>
				</ul>
				<hr/>
			</div>
			<div class="row">
				<div class="small-12 columns">
					<h4>Deskripsi Umum</h4>
					<textarea style="height: 300px;" placeholder="<?php echo $cariketerangan; ?>" name="keteranganbaru"><?php echo $cariketerangan; ?></textarea>
					<h4>Catatan</h4>
					<textarea style="height: 300px;" placeholder="<?php echo $caricatatan; ?>" name="catatanbaru"><?php echo $caricatatan; ?></textarea>
				</div>
			</div>
		</form>
		<?php
		}
		?>
	</body>
</html>