<?php
include 'koneksi.php';
$sql = "SELECT id_pengunjung as maxid FROM pengunjung order by id_pengunjung desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_pengunjung = $data['maxid'];
$noUrut = (int) substr($id_pengunjung, 11);
$noUrut++;

$char = "pengunjung_";
$newID = $char . $noUrut;

$nisn		= $_POST['nisn'];
$nama		= $_POST['nama'];
$kelas		= $_POST['kelas'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$tujuan 		= $_POST['tujuan'];


$cek = mysqli_query($koneksi, "SELECT * FROM pengunjung where id_pengunjung='id_pengunjung' ") or die(mysqli_error($koneksi));

if(mysqli_num_rows($cek) == 0){
    $sql = mysqli_query($koneksi, "INSERT INTO pengunjung VALUES('$newID','$nisn','$nama','$kelas','$jenis_kelamin','$tujuan')") or die(mysqli_error($koneksi));
    
    if($sql){
        echo '<script>alert("Berhasil Register!"); document.location="formpengunjung.php";</script>';
    }else{
        echo '<script>alert("Gagal Register!"); document.location="formpengunjung.php";</script>';
    }
}
?>