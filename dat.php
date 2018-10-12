<?php
$conn=mysqli_connect("localhost","root","","jurnal");
if(!$conn){
    die("Gagal Konek ".mysqli_connect_error());
}

     // $nim,$kelas,$kelamin,$hobi,$fakultas,$alamat
function insert($nim,$nama,$kelas,$kelamin,$hobi,$fakultas,$alamat)
{
    Global $conn;
    mysqli_query($conn,"INSERT INTO user VALUES( '$nama','$nim','$kelas','$kelamin','$hobi','$fakultas','$alamat')");
    echo "<script>alert('Anda Telah Terdaftar')</script>";
    // $query= mysqli_query($conn,"SELECT * FROM t_jurnal1  WHERE  nim='$nim'");
    // $data= mysqli_fetch_array($query);
    // print_r($data);
    // header("location:soal2.php");
    
}
function cek($nim,$nama)
{
    Global $conn;
   $query= mysqli_query($conn,"SELECT * FROM user  WHERE  nim='$nim' and nama='$nama'");
   	$data=mysqli_num_rows($query);
   	if ($data>0) {
   		# code...
   		return true;
   	}
   	else{
   		return false;
   	}

    
}
function get($nim)
{
    Global $conn;
    $query= mysqli_query($conn,"SELECT * FROM user  WHERE  nim='$nim'");
    $data= mysqli_fetch_array($query);
    return $data;
    // header("location:soal2.php");   
}





?>