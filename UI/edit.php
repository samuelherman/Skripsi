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
	session_start();

	$npm = $_GET['npm'];
	
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
		//$carinpm = $row['npm'];
		$carinama = $row['nama'];
		$cariketerangan = $row['keterangan'];
	}

	//submit dan update
	if(isset($_POST['submit']))
		{
			$pemakai="admin";
			$pass="admin";
			$id_mysql = new mysqli('localhost', $pemakai, $pass, 'sirm');

			if ($id_mysql->connect_error) 
			{
				die("Connection failed: " . $id_mysql->connect_error);
			}

			$keteranganbaru = "";
			$keteranganbaru = $_POST['keteranganbaru'];

			$sql = ("UPDATE info_mahasiswa SET keterangan='$keteranganbaru', pembaruan_terakhir=now() WHERE npm='$npm'");

			if ($id_mysql->query($sql) === TRUE) 
			{
				echo "<script>alert('Update Berhasil Boss')</script>";
				echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=list.php">';
			} else {
				echo "<script>alert('Update Gagal Boss')</script>";
				echo "Error: " . $sql . "<br>" . $id_mysql->error;
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
					<li><a href="view.php?npm=<?php echo $npm?>" class="button">Kembali</a></li>
					<li><input class="button" type="submit" name="submit" value="Simpan"></li>
					<li><a href="list.php" class="button">Menu Utama</a></li>
					<li><a href="index.php?logout" class="button">Logout</a></li>
				</ul>
			</div>
			<div class="row">
				<div class="small-12 columns">
					<textarea placeholder="<?php echo $cariketerangan; ?>" name="keteranganbaru"><?php echo $cariketerangan; ?></textarea>
				</div>
			</div>
		</form>
		<?php
		}
		?>
	</body>
</html>