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
		$client->setRedirectUri('http://localhost/oauth.php'); 
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
			echo "Email: $email";
		}
		
		$status="";
		function is_valid_email($email) {
			$result = 'valid email';
			if(!preg_match("^[a-zA-Z0-9_.+-]+@student.unpar.ac.id+$^", $email)) {
				$result = 'invalid email';
			}
			return $result;
			echo $result;
			
		}
		$status = is_valid_email($email);
		
		if($status == "valid email"){
				header("Location: list.php");
				exit;
			}else{
				unset($_SESSION['access_token']);
				header("Location: index.php");
				exit;
				
		}
	?>
	<?= is_valid_email($email); ?>
</body>
</html>