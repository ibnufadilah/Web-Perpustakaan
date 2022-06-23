<?php 
include'../koneksi.php';

session_start();
error_reporting(0);


$id_pinjamsiswa = $_POST['id'];
$tgl_kembali = $_POST['tgl_kembali'];

 $update=mysqli_query($koneksi,"UPDATE peminjaman_siswa SET 
 	tgl_kembali = '$tgl_kembali' WHERE id_pinjamsiswa = '$id_pinjamsiswa' ");

    if ($update){
    echo "<script>alert('Perpanjang Berhasil!')</script>";
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukusiswa.php'>";
    } else {
        echo "<script>alert('Gagal Perpanjang!')</script>";
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukusiswa.php'>";
    }
?>