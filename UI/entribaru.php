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
		if(isset($_POST['submit']))
		{
			$pemakai="admin";
			$pass="admin";
			$id_mysql = new mysqli('localhost', $pemakai, $pass, 'sirm');
			// Check connection
			if ($id_mysql->connect_error) 
			{
				die("Connection failed: " . $id_mysql->connect_error);
			}
			
			$npm = $nama = $keterangan = "";
			
			$npm = $_POST['npm'];
			$nama = $_POST['nama'];
			$keterangan = $_POST['keterangan']; 
			
			$sql = "INSERT INTO info_mahasiswa (npm, nama, keterangan) VALUES ('". mysql_real_escape_string($npm)  ."', '". mysql_real_escape_string($nama)  ."', '". mysql_real_escape_string($keterangan)  ."')";
			
			if ($id_mysql->query($sql) === TRUE) 
			{
				echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=pilihmahasiswa.php">';
			} else {
					echo "Error: " . $sql . "<br>" . $id_mysql->error;
			}

		}
		else
		{
	?>
		<div class="row">
			<h5>Anda mengedit catatan mahasiswa ini sebagai test@unpar.ac.id.</h5>
		</div>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="row">
				<ul class="button-group">
					<li><a href="pilihmahasiswa.php" class="button">Kembali</a></li>
					<li><input class="button" type="submit" name="submit" value="Submit"></li>
				</ul>
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
					<textarea name="keterangan" placeholder="Masukan info"></textarea>
				</div>
			</div>
		</form>
		<?php
		}
		?>
	</body>
</html>