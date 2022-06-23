<?php 
include'../koneksi.php';

session_start();
error_reporting(0);
$id_admin = $_SESSION['id_admin'];

$sql = "SELECT id_pinjamsiswa as maxid FROM peminjaman_siswa order by id_pinjamsiswa desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_pinjamsiswa = $data['maxid'];
$noUrut = (int) substr($id_pinjamsiswa, 7);
$noUrut++;

$char = "pinjam_";
$newID = $char . $noUrut;

$id_pinjamsiswa = $_POST['id_pinjamsiswa'];
$id_bukusiswa = $_POST['id_bukusiswa'];
$no_buku = $_POST['no_buku'];
$judul = $_POST['judul'];
$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$jumlah = $_POST['jumlah'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali =  $_POST['tgl_kembali'];

$update_stok = mysqli_query($koneksi,"UPDATE data_buku SET jumlah = jumlah - '$jumlah' WHERE no_buku = '$no_buku'");  


$insert = mysqli_query($koneksi,"INSERT into peminjaman_siswa Values('$newID','$id_bukusiswa','$no_buku','$judul','$nisn','$nama_siswa','$tgl_pinjam','$tgl_kembali','$jumlah','Pinjam')");

if($insert){
	echo '<script>alert("Buku Berhasil Dipinjam!"); document.location="katalog_siswa.php";</script>';
}else{
	echo '<script>alert("Gagal Meminjam!"); document.location="katalog_siswa.php";</script>';
}
?>