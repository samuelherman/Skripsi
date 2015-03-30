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
	$client->setRedirectUri('http://localhost/pilihmahasiswa.php'); 
	$client->setDeveloperKey('AIzaSyDRoDJAzUR_TsNUNRUeTYsBb7dFBQKZy7M');
	$client->setScopes(array('https://www.googleapis.com/auth/userinfo.email','https://www.googleapis.com/auth/userinfo.profile'));
	$plus = new Google_Service_Oauth2($client);

	if (isset($_REQUEST['logout'])) {
	  unset($_SESSION['access_token']);
	}

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
		$userinfo = $plus->userinfo;
		print_r($userinfo->get());

	} else 
	{
		$authUrl = $client->createAuthUrl();
	}
	?>
	

	
	<?php 
	if (isset($authUrl)) {
	  echo "<a class='login' href='" . $authUrl . "'>Login with Google</a>";
	} else {
	  echo
		/*<form id="url" method="GET" action="{$_SERVER['PHP_SELF']}">
		  <input name="url" class="url" type="text">
		  <input type="submit" value="Shorten">
		</form>*/
		"<a class='logout' href='?logout'>Logout</a>";
	}
	
	?>
	
	<div class="row">
		<h5>Masukan NPM yang ingin dicari / tambah baru.</h5>
	</div>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="row">
			<div class="large-12 columns">
				<div class="row collapse">
					<div class="small-8 columns">
						<input type="text" name="carinpm" placeholder="NPM">
					</div>
					<div class="small-2 columns">
						<input class="button postfix" type="cari" name="cari" value="Search">
					</div>
					<div class="small-2 columns">
						<a href="entribaru.php" class="button postfix">Add</a>
					</div>
				</div>
			</div>
		</div>
	</form>
	
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
			
		$hasil = mysql_query("SELECT * FROM info_mahasiswa", $id_mysql);
		
		
		if(! $hasil){
			die("Permintaan gagal");
		}

		echo "<table>
		<thead>
		<tr>
		<th width='250'>NPM</th>
		<th width='500'>Nama</th>
		<th width='250'>Last Update</th>
		</tr>
		</thead>";

		while($row = mysql_fetch_array($hasil))
		{
		echo "<tr>";
		echo "<td><a href='infomahasiswa.php?npm=". $row['npm'] ."'>" . $row['npm'] . "</a></td>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $row['log'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";

		mysql_close($id_mysql);
	?> 
		
	<!--ini php search-->
	<?php
	/*	$carinpm="";
		$carinpm=$_POST['carinpm'];
		$cari = mysql_query("SELECT * FROM info_mahasiswa WHERE npm LIKE $carinpm", $id_mysql);
		if(isset($_POST['cari']))
		{
			echo "<table>
			<thead>
			<tr>
			<th width='250'>NPM</th>
			<th width='500'>Nama</th>
			<th width='250'>Last Update</th>
			</tr>
			</thead>";

			while($row = mysql_fetch_array($cari))
			{
			echo "<tr>";
			echo "<td><a href='infomahasiswa.php'>" . $row['npm'] . "</a></td>";
			echo "<td>" . $row['nama'] . "</td>";
			echo "<td>" . $row['log'] . "</td>";
			echo "</tr>";
			}
			echo "</table>";

			mysql_close($id_mysql);

		}*/
	?>
	</div>
	</body>
</html>