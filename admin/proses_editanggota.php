<?php
require_once('../koneksi.php');
session_start();



$id_siswa = $_POST['id_siswa'];


       $nisn       = $_POST['nisn'];
        $password          = $_POST['password'];
        $nama                = $_POST['nama'];
        $kelas              =  $_POST['kelas'];
        $jenis_kelamin              =  $_POST['jenis_kelamin'];
        $ttl              =  $_POST['ttl'];
        $no_telp              =  $_POST['no_telp'];
        $alamat              =  $_POST['alamat'];
        
  
    
    $update=mysqli_query($koneksi,"UPDATE user SET
       nisn       = '$nisn',
        password          = '$password',
        nama             = '$nama',
        kelas              =  '$kelas',
        jenis_kelamin              =  '$jenis_kelamin',
        ttl              =  '$ttl',
        no_telp              =  '$no_telp',
        alamat              =  '$alamat'
        
    
        WHERE id_siswa='$id_siswa'");
     
    if ($update){
    echo "<script>alert('Data berhasil diupdate')</script>";
        echo "<meta http-equiv='refresh' content='0; url=anggota.php'>";
    } else {
        echo "<script>alert('Data Gagal diupdate')</script>";
        echo "<meta http-equiv='refresh' content='0; url=anggota.php'>";
    }
?>
