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
?>