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
		$npm = $_GET["npm"];
	?>
	<div class="row">
			<h3>Anda melihat catatan mahasiswa ini sebagai <?php echo $email?>.</h3>
	</div>
		<div class="row">
			<ul class="button-group">
				<li><a href="edit.php?npm=<?php echo $npm?>" class="button">Edit</a></li>
				<li><a href="history.php?npm=<?php echo $npm?>" class="button">Lihat Histori</a></li>
				<li><a href="list.php" class="button">Menu Utama</a></li>
				<li><a href="index.php?logout" class="button">Logout</a></li>
			</ul>
		</div>
		<hr/>
	<div class="row">
	<?php
		$pemakai="admin";
		$pass="admin";
		$id_mysql=mysql_connect("localhost", $pemakai, $pass);
			
		if(! $id_mysql){
			die("Database tidak bisa dibuka");
		}
			
		if(! mysql_select_db("sirm", $id_mysql)){
			die("Database tidak bisa dipilih");
		}
			
		$cari = mysql_query("SELECT * FROM info_mahasiswa WHERE npm='$npm'", $id_mysql);
		while($row = mysql_fetch_array($cari))
		{
			echo "NPM : " ; echo $row['npm']; echo "<br>";
			echo "Nama : " ; echo $row['nama']; echo "<br>";
	?>
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