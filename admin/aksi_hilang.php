<?php 
include'../koneksi.php';

session_start();
error_reporting(0);


$id_pinjamsiswa = $_POST['id'];
$status = $_POST['status'];

 $update=mysqli_query($koneksi,"UPDATE peminjaman_siswa SET 
 	status = '$status' WHERE id_pinjamsiswa = '$id_pinjamsiswa' ");

    if ($update){
    echo "<script>alert('Data Berhasil Diubah!')</script>";
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukusiswa.php'>";
    } else {
        echo "<script>alert('Gagal Perpanjang!')</script>";
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukusiswa.php'>";
    }
?>