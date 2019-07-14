<?php 
include "connect.php";
if($_POST){

$nama=$_POST['nama'];
$plat=$_POST['plat'];
$merek=$_POST['merek'];


$q="INSERT INTO bengkel VALUES(null,'$nama','$plat','$merek')";
$sql=mysqli_query($konek,$q);



}

$tampil="SELECT no from bengkel where nama='$nama' and no_plat='$plat' and merk_motor='$merek'";
$tampil1="SELECT nama from bengkel where nama='$nama' and no_plat='$plat' and merk_motor='$merek'";
$sql2=mysqli_query($konek,$tampil);
$sql23=mysqli_query($konek,$tampil1);
 ?>


<center>
	<?php
	foreach ($sql23 as $data) {
		echo "$data[nama]";
	}
 ?>

	<p>
		No Antrian Anda <br>
	</p>

	<?php
	foreach ($sql2 as $data) {
		echo "$data[no]";
	}
style>
    body;
    background-image: url(motor.png);
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    font-family: monospace;
    background-size: cover;
}
</style>
 ?>
<a href="projekta.php" id="home">
            <p>HOME</p>
        </a>
</center>



