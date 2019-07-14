<?php
	echo "<head><title>formulir</head></title>";

	$fp = fopen("antrian.txt","a+");

	$nama1 = $_POST['nama'];
	$plat1 = $_POST['plat'];
	$merek1 = $_POST['merek'];

	fputs($fp,"$nama1.$plat1.$merek1\n");
	fclose($fp);
	echo "Selamat anda sudah terdaftar untuk booking service di perusahaan kami<br>";
	echo "<a href=form.php> formulir pendaftaran </a><br>";
	echo "<a href=lihat.php> Lihat antrian </a><br>";
	echo "<a href=projekta.php> Home </a><br>";
?>