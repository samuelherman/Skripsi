<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SPBRM | New</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
	<?php
		session_start();

		if(isset($_POST['submit']))
		{
			include_once "configDatabase.php";
				
			if(! $id_mysql)
			{
				die("Database tidak bisa dibuka");
			}
				
			if(! mysql_select_db("spbrm", $id_mysql))
			{
				die("Database tidak bisa dipilih");
			}
			
			$npm = $nama = $keterangan = $catatan = "";
			
			$npm = $_POST['npm'];
			$nama = $_POST['nama'];
			$keterangan = $_POST['keterangan'];
			$catatan = $_POST['catatan']; 


			$cek = "SELECT npm from info_mahasiswa where npm='". mysql_real_escape_string($npm)  ."'";
			$found = mysql_query($cek) or die(mysql_error());
			if(mysql_num_rows($found)>0)
			{
				echo "<script>alert('Data telah terdaftar. Silahkan diulangi dengan data yang lain.');window.location.href='new.php';</script>";
			}
			else
			{
				$sql1 = "INSERT INTO info_mahasiswa (npm, nama, keterangan, catatan) VALUES ('$npm', '$nama', '$keterangan', '$catatan')";
				$sql2 = "INSERT INTO histori (npm, pengguna, status, tanggal_pembaruan, keterangan, catatan) VALUES ('". mysql_real_escape_string($npm)  ."', '".$_SESSION['email']."', 'membuat entri', now(), '". mysql_real_escape_string($keterangan)  ."', '". mysql_real_escape_string($catatan)  ."')";
				
				if (mysql_query($sql1)& mysql_query($sql2)== TRUE) 
				{
					echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=list.php">';
				}
				else
				{
					echo "Error: " .$sql1. "<br>" .$id_mysql->error;
					echo "Error: " . $sql2 . "<br>" . $id_mysql->error;
				}
			}
		}
		else
		{
		?>
			<div class="row">
				<h3>Anda membuat catatan mahasiswa ini sebagai <?php echo $_SESSION['email']?>.</h3>
			</div>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="row">
					<ul class="button-group">
						<li><a href="list.php" class="button secondary">Kembali</a></li>
						<li><input class="button" type="submit" name="submit" value="Simpan"></li>
						<li><a href="list.php" class="button secondary">Menu Utama</a></li>
						<li><a href="index.php?logout" class="button secondary">Logout</a></li>
					</ul>
					<hr/>
				</div>
				<div class="small-8 columns">
					<div class="row">
						<div class="small-3 columns">
							<label for="right-label" class="right inline">NPM</label>
						</div>
						<div class="small-9 columns">
							<input type="text" name="npm" id="right-label" placeholder="Masukan NPM">
						</div>
					</div>
					<div class="row">
						<div class="small-3 columns">
							<label for="right-label" class="right inline">Nama</label>
						</div>
						<div class="small-9 columns">
							<input type="text" name="nama" id="right-label" placeholder="Masukan nama">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
<h4>Deskripsi Umum</h4>
<textarea style="height: 300px;" name="keterangan" placeholder="Isilah dengan deskripsi umum">
</textarea>
<h4>Catatan</h4>
<textarea style="height: 300px;" name="catatan" placeholder="Isilah dengan catatan mahasiswa">
</textarea>
					</div>
				</div>
			</form>
		<?php
		}
		?>
	</body>
</html>