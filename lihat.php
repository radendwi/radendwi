<?php
	echo "<head><title>formulir</title></head>";
	$fp = fopen("antrian.txt","r");
	echo "<table border=0>";
	while ($isi = fgets($fp,80))
	{

	$pisah = explode(".",$isi);


	echo "<tr><td>nama </td><td>: $pisah[0]</td></tr>";
	echo "<tr><td>plat </td><td>: $pisah[1]</td></tr>";
	echo "<tr><td>merek </td><td>: $pisah[2]</td></tr>
	
	<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
	}
	echo "</form>";
	echo "<a href=form.php> Klik Disini </a> untuk mendaftar<br>";
	echo "<a href=projekta.php> Home </a><br>";
?>
