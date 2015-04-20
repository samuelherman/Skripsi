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
	$id = $_GET["id"];
	?>
	<div class="row">
	</div>
		<div class="row">
			<ul class="button-group">
				<li><a href="javascript:history.back(1)" class="button">Kembali</a></li>
				<li><a href="index.php?logout" class="button">Logout</a></li>
			</ul>
		</div>
		<hr/>
	<div class="row">
	<?php
		include_once "configDatabase.php";
		
		$cari = mysql_query("SELECT keterangan FROM histori WHERE id_histori='$id'", $id_mysql);
		while($row = mysql_fetch_array($cari))
		{
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