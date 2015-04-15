<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SIRM | Welcome</title>
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
		<h3>Masukan NPM yang ingin dicari / tambah baru.</h3>
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
						<a href="new.php" class="button postfix">Add</a>
					</div>
					<div class="small-2 columns">
						<a href="index.php?logout" class="button postfix">Logout</a>
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
		//echo "<td><input class='button1' type='submit' name='submit' value=". $row['npm'] ."></td>";
		echo "<td><a href='view.php?npm=". $row['npm'] ."'>" . $row['npm'] . "</a></td>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $row['pembaruan_terakhir'] . "</td>";
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