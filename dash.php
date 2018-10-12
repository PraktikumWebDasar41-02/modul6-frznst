<?php
include('dat.php');
session_start();
$nim=$_SESSION['nim'];
$data=get($nim);
$hobi=explode("-", $data['hobi']);
// print_r($data);
echo "<table><tr><td>".$data['nama']."</td></tr>";
echo "<tr><td>".$data['nim']."</td></tr>";
echo "<tr><td>".$data['kelas']."</td></tr>";
echo "<tr><td>".$data['jk']."</td></tr>";

foreach ($hobi as $v) {
	# code...
	echo "<tr><td>".$v."</td></tr>";
}

echo "<tr><td>".$data['fakultas']."</td></tr>";
echo "<tr><td>".$data['alamat']."</td></tr>";





?>