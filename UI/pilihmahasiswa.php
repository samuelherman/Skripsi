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
	<div class="row">
		<h5>Masukan NPM yang ingin dicari / tambah baru.</h5>
	</div>
	<form>
		<div class="row">
			<div class="large-12 columns">
				<div class="row collapse">
					<div class="small-8 columns">
						<input type="text" placeholder="NPM">
					</div>
					<div class="small-2 columns">
						<a href="#" class="button postfix">Search</a>
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
		echo "<td>" . $row['npm'] . "</td>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $row['log'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";

		mysql_close($id_mysql);
	?> 
	</div>
	</body>
</html>