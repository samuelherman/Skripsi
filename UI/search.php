<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SPBRM | Search</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<?php
			session_start();
		?>
		<div class="row">
			<h3>Masukkan dan pilih NPM yang ingin dicari / tambah baru.</h3>
			<form action='search.php' method='GET'>
				<ul class="button-group">
					<div class='large-12 columns'>
					<li><input type='text' name='search' placeholder='Masukkan NPM yang ingin dicari'></li>
					</div>
					<li><input class="button secondary" type='submit' name='submit' value='Cari NPM'></li>
					<li><a href="new.php" class="button secondary">Add</a></li>
					<li><a href="list.php" class="button secondary">Menu Utama</a></li>
					<li><a href="index.php?logout" class="button secondary">Logout</a></li>
				</ul>
			</form>
			<hr/>
		</div>

		<div class="row">
			<?php
				$button = $_GET ['submit'];
				$search = $_GET ['search']; 
				
				if (strlen($search) <= 10){
					$new_search = $search."%";
				}else{
					$new_search = $search;
				}
		
				include_once "configDatabase.php";

				if(! $id_mysql)
				{
					die("Database tidak bisa dibuka");
				}
					
				if(! mysql_select_db("spbrm", $id_mysql))
				{
					die("Database tidak bisa dipilih");
				}
			
				$hasil = mysql_query("SELECT * FROM info_mahasiswa WHERE npm LIKE '$new_search'", $id_mysql);
				
				if(! $hasil)
				{
					echo "NPM tidak ditemukan.";
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
				echo "<td><a href='view.php?npm=". $row['npm'] ."'>" . $row['npm'] . "</a></td>";
				echo "<td>" . $row['nama'] . "</td>";
				echo "<td>" . $row['pembaruan_terakhir'] . "</td>";
				echo "</tr>";
				}
				echo "</table>";
			?> 
		</div>
	</body>
</html>