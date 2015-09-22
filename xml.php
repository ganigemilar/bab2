<?php
header("Content-type:text/xml");
$koneksi=mysql_connect("127.0.0.1","root","");
mysql_select_db("hr",$koneksi);
$result=mysql_query("SELECT LastName,FirstName FROM Employees ORDER BY LastName,FirstName",$koneksi);

$i=0;
echo'<data_mahasiswa>';
while($i<mysql_num_rows($result)){
	$fields=mysql_fetch_row($result);
	echo "<nama>$fields[1]$fields[0]</nama>\r\n";
	$i++;
}
echo "</data_mahasiswa>";
mysql_close();
?>