<?php
include 'koneksi.php';
session_start();
// menangkap data yang dikirim dari form
$nisn = $_POST['nisn'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where nisn='$nisn'");
// menghitung jumlah data yang ditemukan
$data1 = mysqli_fetch_array($data);
$id_siswa = $data1['id_siswa'];
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	
	$_SESSION['id_siswa'] = $id_siswa;

		
	echo '<script>alert("Login Sukses!"); document.location="index1.php";</script>';

} else {
	
	echo '<script>alert("Login Gagal!");document.location="loginuser.php";</script>';
	
}

?>