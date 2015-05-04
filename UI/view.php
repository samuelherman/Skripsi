<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SIRM | View</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
	<?php
	session_start();
	$npm = $_GET["npm"];
	
	//include_once "cofigDatabase.php";
	
	
	?>
	<div class="row">
		<div class="small-11 small-centered columns">
			<h3>Anda melihat catatan mahasiswa ini sebagai <?php echo $_SESSION['email']?>.</h3>
			<ul class="button-group">
				<li><a href="edit.php?npm=<?php echo $npm?>" class="button">Edit</a></li>
				<li><a href="history.php?npm=<?php echo $npm?>" class="button">Lihat Histori</a></li>
				<li><a href="list.php" class="button">Menu Utama</a></li>
				<li><a href="index.php?logout" class="button">Logout</a></li>
			</ul>
		<hr/>
	<?php
		include_once "configDatabase.php";
		
		$lihat = "INSERT INTO histori (npm, pengguna, status, tanggal_pembaruan, keterangan) VALUES ('". mysql_real_escape_string($npm)  ."', '".$_SESSION['email']."', 'melihat', now(), '')";
		if (mysql_query($lihat) === TRUE) 
		{
			/* echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=view.php?<?php echo $npm?>">'; */
		} else {
			echo "Error: " . $lihat . "<br>" . $id_mysql->error;
		}
		
		$cari = mysql_query("SELECT * FROM info_mahasiswa WHERE npm='$npm'", $id_mysql);
		while($row = mysql_fetch_array($cari))
		{
			echo "NPM : " ; echo $row['npm']; echo "<br>";
			echo "Nama : " ; echo $row['nama']; echo "<br>";
	?>
		</div>
	</div>
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