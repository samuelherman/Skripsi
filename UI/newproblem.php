<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SPBRM | New Problem</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<?php
		session_start();
		$npm = $_GET['npm'];
		
		include_once "configDatabase.php";

		if(! $id_mysql)
		{
			die("Database tidak bisa dibuka");
		}
			
		if(! mysql_select_db("spbrm", $id_mysql))
		{
			die("Database tidak bisa dipilih");
		}
			
		$hasil = mysql_query("SELECT * FROM info_mahasiswa WHERE npm='$npm'", $id_mysql);
		
		if(! $hasil)
		{
			die("Permintaan gagal");
		}
		
		while($row = mysql_fetch_array($hasil))
		{
			$carinama = $row['nama'];
		}

		if(isset($_POST['submit']))
		{
			$masalahdengan = $_POST['masalahdengan'];
			$masalahbaru = $_POST['masalahbaru'];

			$sql1 = "INSERT INTO masalah (npm, masalah_dengan, masalah) VALUES ('$npm', '$masalahdengan', '$masalahbaru')";
			$sql2 = "INSERT INTO histori (npm, pengguna, status, tanggal_pembaruan, keterangan, catatan) VALUES ('$npm', '".$_SESSION['email']."', 'menambah catatan masalah', now(), '', '')";
			
			if (mysql_query($sql1) & mysql_query($sql2) == TRUE) 
			{
				echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=list.php">';
			} 
			else
			{
				echo "Error: " . $sql1 . "<br>" . $id_mysql->error;
				echo "Error: " . $sql2 . "<br>" . $id_mysql->error;
			}
		}
		else
		{
		?>
		<div class="row">
			<h3>Anda menambah catatan masalah mahasiswa ini sebagai <?php echo $_SESSION['email']?>.<br/>
			NPM <?php echo $npm; ?> Nama <?php echo $carinama; ?>
			</h3>
		</div>
		<form method="post" action="newproblem.php?npm=<?php echo $npm?>">
			<div class="row">
				<ul class="button-group">
					<li><a href="view.php?npm=<?php echo $npm?>" class="button secondary">Kembali</a></li>
					<li><input class="button" type="submit" name="submit" value="Simpan"></li>
					<li><a href="list.php" class="button secondary">Menu Utama</a></li>
					<li><a href="index.php?logout" class="button secondary">Logout</a></li>
				</ul>
				<hr/>
			</div>
			<div class="row">
				<div class="small-12 columns">
					<h4>Masalah dengan siapa / mata kuliah apa</h4>
					<textarea  placeholder="Nama dosen atau nama mata kuliah yang bersangkutan" name="masalahdengan"></textarea>
					<h4>Masalah</h4>
					<textarea style="height: 200px;" placeholder="Isilah dengan masalah yang dimiliki mahasiswa ini" name="masalahbaru"></textarea>
				</div>
			</div>
			<!--<div class="row">
				<p>Format penulisan menggunakan Markdown, untuk sintaks Markdown dapat dilihat <a href='https://help.github.com/articles/github-flavored-markdown/' target="_blank">disini</a>.</p>
			</div>-->
		</form>
		<?php
		}
		?>
	</body>
</html>