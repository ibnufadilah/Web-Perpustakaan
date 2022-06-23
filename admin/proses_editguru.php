<?php
require_once('../koneksi.php');
session_start();



$id_bukuguru = $_POST['id'];


       $no_buku       = $_POST['no_buku'];
        $tgl_penerima          = $_POST['tgl_penerima'];
        $no_invetaris             = $_POST['no_invetaris'];
        $judul              =  $_POST['judul'];
        $pengarang              =  $_POST['pengarang'];
        $penerbit              =  $_POST['penerbit'];
        $jumlah              =  $_POST['jumlah'];
        $jenis              =  $_POST['jenis'];
        $bahasa              =  $_POST['bahasa'];
  
    
    $update=mysqli_query($koneksi,"UPDATE data_bukuguru SET
        no_buku       = '$no_buku', 
        tgl_penerima          = '$tgl_penerima',
        no_invetaris             = '$no_invetaris',
        judul              =  '$judul',
        pengarang              =  '$pengarang',
        penerbit              =  '$penerbit',
        jumlah              =  '$jumlah',
        jenis              =  '$jenis',
        bahasa              =  '$bahasa'
       
        WHERE id_bukuguru='$id_bukuguru'");
     
    if ($update){
    echo "<script>alert('Data berhasil diupdate')</script>";
        echo "<meta http-equiv='refresh' content='0; url=katalog_guru.php'>";
    } else {
        echo "<script>alert('Data Gagal diupdate')</script>";
        echo "<meta http-equiv='refresh' content='0; url=katalog_guru.php'>";
    }
?>

