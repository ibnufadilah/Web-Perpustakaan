<?php 
include'../koneksi.php';

session_start();
error_reporting(0);
$id_admin = $_SESSION['id_admin'];

$sql = "SELECT id_pinjamguru as maxid FROM peminjaman_guru order by id_pinjamguru desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_pinjamguru = $data['maxid'];
$noUrut = (int) substr($id_pinjamguru, 7);
$noUrut++;

$char = "pinjam_";
$newID = $char . $noUrut;

$id_pinjamguru = $_POST['id_pinjamguru'];
$id_bukuguru = $_POST['id_bukuguru'];
$no_buku = $_POST['no_buku'];
$nama = $_POST['nama'];
$judul = $_POST['judul'];
$jumlah = $_POST['jumlah'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali =  $_POST['tgl_kembali'];

$update_stok = mysqli_query($koneksi,"UPDATE data_bukuguru SET jumlah = jumlah - '$jumlah' WHERE no_buku = '$no_buku'");  


$insert = mysqli_query($koneksi,"INSERT into peminjaman_guru Values('$newID','$id_bukuguru','$no_buku','$nama','$judul','$tgl_pinjam','$tgl_kembali','$jumlah','Pinjam')");

if($insert){
	echo '<script>alert("Buku Berhasil Dipinjam!"); document.location="katalog_guru.php";</script>';
}else{
	echo '<script>alert("Gagal Meminjam!"); document.location="katalog_guru.php";</script>';
}
?>