<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SPBRM | Past</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<?php
		session_start();
		$id = $_GET["id"];
		?>
		<div class="row">
			<div class="small-11 small-centered columns">
			<ul class="button-group">
				<li><a href="javascript:history.back(1)" class="button secondary">Kembali</a></li>
				<li><a href="index.php?logout" class="button secondary">Logout</a></li>
			</ul>
			<hr/>
			<?php

				include_once "configDatabase.php";
				
				if(! $id_mysql)
				{
					die("Database tidak bisa dibuka");
				}
					
				if(! mysql_select_db("spbrm", $id_mysql))
				{
					die("Database tidak bisa dipilih");
				}
				
				$cari = mysql_query("SELECT keterangan, catatan FROM histori WHERE id_histori='$id'", $id_mysql);
				while($row = mysql_fetch_array($cari))
				{
			?>
			</div>
		</div>
		<?php
			$str = $row['catatan'];
			$arr = explode("\n", $str);
			//var_dump($arr);
		?>
<xmp style="display:none;">
<?php
echo '# Deskripsi Umum'; echo "\n";

echo $row['keterangan']; echo "\n";

echo '# Catatan'; echo "\n";

for($i=0; $i<sizeof($arr);$i++){
echo "* ".$arr[$i]; 
}echo "\n";
?>
</xmp>
			<?php
				}
			?>
		<script src="js/0.2/strapdown.js"></script>
	</body>
</html>