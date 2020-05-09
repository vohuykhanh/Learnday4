<?php
$myfile = fopen("users.txt", "r") or die("Unable to open file!");
$json= fread($myfile,filesize("users.txt"));
fclose($myfile);
$jsondecode = json_decode($json);
echo "<table border=1 cellspacing=0 >";
echo "<tr>";
		echo "<td>STT</td>";
		echo "<td>Tài Khoản</td>";
		echo "<td>Mật Khẩu</td>";
	echo "</tr>";
foreach ($jsondecode as $key => $value) {
	echo "<tr>";
		echo "<td>".$key."</td>";
		echo "<td>".$value->userName."</td>";
		echo "<td>".$value->password."</td>";
	echo "</tr>";
}
echo "</table>"
?>

