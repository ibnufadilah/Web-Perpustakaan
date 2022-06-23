<?php
require_once('../koneksi.php');


$id_bukusiswa = $_POST['id'];


       $no_buku       = $_POST['no_buku'];
        $tgl_penerima          = $_POST['tgl_penerima'];
        $no_invetaris             = $_POST['no_invetaris'];
        $judul              =  $_POST['judul'];
        $pengarang              =  $_POST['pengarang'];
        $penerbit              =  $_POST['penerbit'];
        $jumlah              =  $_POST['jumlah'];
        $jenis              =  $_POST['jenis'];
        $bahasa              =  $_POST['bahasa'];
        
        $keterangan              =  $_POST['keterangan'];
       

  
    
    $update=mysqli_query($koneksi,"UPDATE data_buku SET
       no_buku       = '$no_buku',
        tgl_penerima          = '$tgl_penerima',
        no_invetaris             = '$no_invetaris',
        judul              =  '$judul',
        pengarang              =  '$pengarang',
        penerbit              =  '$penerbit',
        jumlah              =  '$jumlah',
        jenis              =  '$jenis',
        bahasa              =  '$bahasa',
    
        keterangan              =  '$keterangan'
       
        WHERE id_bukusiswa='$id_bukusiswa'");
     
    if ($update){
    echo "<script>alert('Data berhasil diupdate')</script>";
        echo "<meta http-equiv='refresh' content='0; url=katalog_siswa.php'>";
    } else {
        echo "<script>alert('Data Gagal diupdate')</script>";
        echo "<meta http-equiv='refresh' content='0; url=katalog_siswa.php'>";
    }
?>
