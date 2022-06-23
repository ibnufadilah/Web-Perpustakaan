<?php 
include'../koneksi.php';

session_start();
error_reporting(0);


$id_pinjamguru = $_GET['id_pinjamguru'];
$query = mysqli_query($koneksi,"SELECT*FROM peminjaman_guru WHERE id_pinjamguru = '$id_pinjamguru'");
$row = mysqli_fetch_assoc($query);


$sql = "SELECT id_kembaliguru as maxid FROM pengembalian_guru order by id_kembaliguru desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_pinjamguru = $data['maxid'];
$noUrut = (int) substr($id_pinjamguru, 8);
$noUrut++;

$char = "kembali_";
$newID = $char . $noUrut;

$id_pinjamguru = $row['id_pinjamguru'];
$id_bukuguru= $row['id_bukuguru'];
$no_buku = $row['no_buku'];
$nama_guru = $row['nama'];
$judul = $row['judul'];
$tgl_pinjam = $row['tgl_pinjam'];
$tgl_kembali =  $row['tgl_kembali'];
$jumlah = $row['jumlah'];



$update_stok = mysqli_query($koneksi,"UPDATE data_bukuguru SET jumlah = jumlah + '$jumlah' WHERE no_buku = '$no_buku'");  
$update_status = mysqli_query($koneksi,"UPDATE peminjaman_guru set status = 'Telah Dikembalikan' WHERE id_pinjamguru = '$id_pinjamguru'" );



$insert = mysqli_query($koneksi,"INSERT into pengembalian_guru Values('$newID','$id_pinjamguru','$id_bukuguru','$no_buku','$nama_guru','$judul','$tgl_pinjam','$tgl_kembali','$jumlah')");

if ($insert){
    echo "<script>alert('Buku Dikembalikan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukuguru.php'>";
 } else {
        echo "<script>alert('Gagal Dikembalikan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukuguru.php'>";
 }

?>