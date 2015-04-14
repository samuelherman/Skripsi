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
	include_once "google-api-php-client-master/src/Google/Client.php";
	include_once "google-api-php-client-master/src/Google/Service/Oauth2.php";

	session_start();

	$client = new Google_Client();
	$client->setClientId('568951368854-ufmbistn0pcaq0khubafo1a133orfgve.apps.googleusercontent.com');
	$client->setClientSecret('-cSZ-AUmeQ9PaWWry_IpiBBi');
	$client->setRedirectUri('http://localhost/list.php'); 
	$client->setDeveloperKey('AIzaSyDRoDJAzUR_TsNUNRUeTYsBb7dFBQKZy7M');
	$client->setScopes(array('https://www.googleapis.com/auth/plus.login','email'));
	$plus = new Google_Service_Oauth2($client);

	if (isset($_GET['code'])) {
	  $client->authenticate($_GET['code']);
	  $_SESSION['access_token'] = $client->getAccessToken();
	  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
	}

	if (isset($_SESSION['access_token'])) {
	  $client->setAccessToken($_SESSION['access_token']);
	}

	if ($client->getAccessToken()) 
	{
		$info = $plus->userinfo;
		$userinfo = $info->get();
		$email = ($userinfo['email']);
	}
	?>
	<?php
		if(isset($_POST['submit']))
		{
			$pemakai="admin";
			$pass="admin";
			$id_mysql = new mysqli('localhost', $pemakai, $pass, 'sirm');

			if ($id_mysql->connect_error) 
			{
				die("Connection failed: " . $id_mysql->connect_error);
			}
			
			$npm = $nama = $keterangan = "";
			
			$npm = $_POST['npm'];
			$nama = $_POST['nama'];
			$keterangan = $_POST['keterangan']; 
			//baru
			//$histori = "INSERT INTO histori (npm, pengguna, status, tanggal_pembaruan, keterangan) VALUES ('". mysql_real_escape_string($npm)  ."', '$email', 'membuat entri', 'now()', '". mysql_real_escape_string($keterangan)  ."')";
			//$id_mysql->query($histori);
			//$hasil = mysql_query($histori, $id_mysql);
			
			$sql = "INSERT INTO info_mahasiswa (npm, nama, keterangan) VALUES ('". mysql_real_escape_string($npm)  ."', '". mysql_real_escape_string($nama)  ."', '". mysql_real_escape_string($keterangan)  ."')";
			//$sql2 = "INSERT INTO histori (npm, pengguna, status, keterangan) VALUES ('". mysql_real_escape_string($npm)  ."', '$email', 'membuat entri', '". mysql_real_escape_string($keterangan)  ."')";
			//$sql = $sql1.$sql2;
			if ($id_mysql->query($sql) === TRUE) 
			{
				echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=list.php">';
			} else {
					echo "Error: " . $sql . "<br>" . $id_mysql->error;
			}

		}
		else
		{
	?>
		<div class="row">
			<h3>Anda mengedit catatan mahasiswa ini sebagai <?php echo $email?>.</h3>
		</div>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="row">
				<ul class="button-group">
					<li><a href="list.php" class="button">Kembali</a></li>
					<li><input class="button" type="submit" name="submit" value="Simpan"></li>
					<li><a href="list.php" class="button">Menu Utama</a></li>
					<li><a href="index.php?logout" class="button">Logout</a></li>
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
					<textarea name="keterangan">
# Umum

Isilah deskripsi umum mahasiswa disini.

# Catatan

* 9 Oktober 2014, pertama kali dibuat
</textarea>
				</div>
			</div>
		</form>
		<?php
		}
		?>
	</body>
</html>