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
	// Visit https://code.google.com/apis/console to generate your
	// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.
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
		//$npm = $_GET['npm'];
		//print_r($npm);
		//echo implode("",$npm);
		$npm = isset($_GET['npm']) ? $_GET['npm'] : FALSE;
		echo $npm;
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

		//mysql_close($id_mysql);

		//submit dan update
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

				$keteranganbaru = "";
				$keteranganbaru = $_POST['keteranganbaru'];

				//untuk field id dan tgl_reg tidak diisi karena otomatis akan diisi oleh database  

				// insert data ke tabel info_mahasiswa  
				$sql = ("UPDATE info_mahasiswa SET keterangan='$keteranganbaru' WHERE npm='2010730002'");

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
			<h3>Anda mengedit catatan mahasiswa ini sebagai <?php echo $email?>.<br/>
			NPM <?php echo $npm; ?> Nama <?php echo $carinama; ?>
			</h3>
		</div>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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