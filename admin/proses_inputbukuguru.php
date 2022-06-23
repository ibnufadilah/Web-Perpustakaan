<?php
include '../koneksi.php';
$sql = "SELECT id_bukuguru as maxid FROM data_bukuguru order by id_bukuguru desc";
$hasil = mysqli_query($koneksi,$sql);
$data  = mysqli_fetch_array($hasil);
$id_bukuguru = $data['maxid'];
$noUrut = (int) substr($id_bukuguru, 9);
$noUrut++;

$char = "bukuguru_";
$newID = $char . $noUrut;

$no_buku		= $_POST['no_buku'];
$tgl_penerima	= $_POST['tgl_penerima'];
$no_invetaris	= $_POST['no_invetaris'];
$judul	= $_POST['judul'];
$pengarang	= $_POST['pengarang'];
$penerbit	= $_POST['penerbit'];
$jumlah	= $_POST['jumlah'];
$jenis	= $_POST['jenis'];
$bahasa	= $_POST['bahasa'];

$cek = mysqli_query($koneksi, "SELECT * FROM data_bukuguru WHERE no_buku = '$no_buku'") or die(mysqli_error($koneksi));

if(mysqli_num_rows($cek) == 0){
    $sql = mysqli_query($koneksi, "INSERT INTO data_bukuguru VALUES('$newID','$no_buku','$tgl_penerima','$no_invetaris','$judul','$pengarang','$penerbit','$jumlah','$jenis','$bahasa')") or die(mysqli_error($koneksi));
    
    if($sql){
        echo '<script>alert("Data Baru Berhasil Ditambahkan!"); document.location="katalog_guru.php";</script>';
    }else{
        echo '<script>alert("Gagal Menambahkan!"); document.location="formdatabukuguru.php";</script>';
    }
}
?>