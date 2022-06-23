<?php 
include'../koneksi.php';

session_start();
error_reporting(0);
$id_user = $_SESSION['id_user'];

$id_pinjamsiswa = $_GET['id_pinjamsiswa'];
$query = mysqli_query($koneksi,"SELECT*FROM peminjaman_siswa WHERE id_pinjamsiswa = '$id_pinjamsiswa'");
$row = mysqli_fetch_assoc($query);


$sql = "SELECT id_kembalisiswa as maxid FROM pengembalian_siswa order by id_kembalisiswa desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_pinjamsiswa = $data['maxid'];
$noUrut = (int) substr($id_pinjamsiswa, 8);
$noUrut++;

$char = "kembali_";
$newID = $char . $noUrut;

$id_pinjamsiswa = $row['id_pinjamsiswa'];
$id_bukusiswa = $row['id_bukusiswa'];
$no_buku = $row['no_buku'];
$judul = $row['judul'];
$nisn = $row['nisn'];
$nama = $row['nama'];
$tgl_pinjam = $row['tgl_pinjam'];
$tgl_kembali =  $row['tgl_kembali'];
$jumlah = $row['jumlah'];
$denda = $row['denda'];



  $tgl=date('Y-m-d');
  $telat = strtotime($tgl) - strtotime($tgl_kembali);
  $numberDays = $telat/86400;
  $numberDays = intval($numberDays);

// $hitung_hari = floor($cari_hari/(60*60*24));
// if($hitung_hari  > 7 ){
if ($numberDays >= 1) {
  $denda = 500 * $numberDays;
}else{  
  $denda = 0;
  $numberDays = 0;
}


$update_stok = mysqli_query($koneksi,"UPDATE data_buku SET jumlah = jumlah + '$jumlah' WHERE no_buku = '$no_buku'");  
$update_status = mysqli_query($koneksi,"UPDATE peminjaman_siswa set status = 'Telah Dikembalikan' WHERE id_pinjamsiswa = '$id_pinjamsiswa'" );


$insert = mysqli_query($koneksi,"INSERT into pengembalian_siswa Values('$newID','$id_pinjamsiswa','$id_bukusiswa','$no_buku','$judul','$nisn','$nama','$tgl_pinjam','$tgl_kembali','$jumlah','$denda','$numberDays')");

  
 if ($insert){
    echo "<script>alert('Buku Dikembalikan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukusiswa.php'>";
 } else {
        echo "<script>alert('Gagal Dikembalikan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukusiswa.php'>";
 }
?>  