<?php
require_once('../koneksi.php');
$insert= "DELETE FROM data_buku WHERE id_bukusiswa='$_GET[id_bukusiswa]' ";
 if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=katalog_siswa.php'>";
    } else {
        Echo "Data anda gagal dihapus. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
?>