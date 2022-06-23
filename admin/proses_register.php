<?php
include '../koneksi.php';
$sql = "SELECT id_siswa as maxid FROM user order by id_siswa desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_user = $data['maxid'];
$noUrut = (int) substr($id_user, 6);
$noUrut++;

$char = "siswa_";
$newID = $char . $noUrut;

$nisn		= $_POST['nisn'];
$password	= $_POST['password'];
$nama	= $_POST['nama'];
$kelas	= $_POST['kelas'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$ttl	= $_POST['ttl'];
$no_telp	= $_POST['no_telp'];
$alamat	= $_POST['alamat'];


$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE nisn = '$nisn'") or die(mysqli_error($koneksi));

if(mysqli_num_rows($cek) == 0){
    $sql = mysqli_query($koneksi, "INSERT INTO user VALUES('$newID','$nisn','$password','$nama','$kelas','$jenis_kelamin','$ttl','$no_telp','$alamat')") or die(mysqli_error($koneksi));
    
    if($sql){
        echo '<script>alert("Berhasil Register!"); document.location="anggota.php";</script>';
    }else{
        echo '<script>alert("Gagal Register!"); document.location="register.php";</script>';
    }
}else{
    echo '<script>alert("Telah Terregister!"); document.location="register.php";</script>';
}
?>