<?php
include('dat.php');
session_start();
$nim=$_SESSION['nim'];
$data=get($nim);
$hobi=explode("-", $data['hobi']);
// print_r($data);
echo "<table><tr><td>Nama :</td><td>".$data['nama']."</td></tr>";
echo "<tr><td>NIM :</td><td>".$data['nim']."</td></tr>";
echo "<tr><td>Kelas</td> :<td>".$data['kelas']."</td></tr>";
echo "<tr><td>Jenis Kelamin :</td><td>".$data['jk']."</td></tr>";
echo "<tr><td>Hobi :</td></tr>";
foreach ($hobi as $v) {
	# code...
	echo "<td>".$v.",</td>";
}
echo "<tr><td>Fakultas:</td><td>".$data['fakultas']."</td></tr>";
echo "<tr><td>Alamat:</td><td>".$data['alamat']."</td></tr></table>";


?>
