<?php

  $host="localhost";
  $user="root";
  $pass="johancllau99";
  $dbName="travel";

  $kon=mysqli_connect($host, $user, $pass);

  if(!$kon) ("Gagal koneksi...");

  $hasil=mysqli_select_db($kon, $dbName);

  if(!$hasil) {
  	$hasil=mysqli_query($kon, "CREATE DATABASE $dbName");

	if($hasil) {
		die("gagal buat database");
	}

	else {
		$hasil=mysqli_select_db($kon, $dbName);
		if(!$hasil) die("gagal konek database");
	}
  }
?>
