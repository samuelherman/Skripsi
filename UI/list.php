<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SIRM | List</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	<style>
	.button1 {
		background-color: Transparent;
		background-repeat:no-repeat;
		border: none;
		cursor:pointer;
		overflow: hidden;
		outline:none;
	}
	</style>
	</head>
	<body>
	<?php
	session_start();
	?>
	<div class="row">
		<h3>Pilih NPM yang ingin dicari / tambah baru.</h3>
		<ul class="button-group">
			<li><a href="new.php" class="button">Add</a></li>
			<li><a href="index.php?logout" class="button">Logout</a></li>
		</ul>
		<hr/>
	</div>

	<div class="row">
	<?php
		include_once "configDatabase.php";

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
		//echo "<td><input class='button1' type='submit' name='submit' value=". $row['npm'] ."></td>";
		echo "<td><a href='view.php?npm=". $row['npm'] ."'>" . $row['npm'] . "</a></td>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $row['pembaruan_terakhir'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";

		mysql_close($id_mysql);
	?> 
	</div>
	</body>
</html>