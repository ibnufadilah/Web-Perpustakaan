<?php
require_once('../koneksi.php');
$insert= "DELETE FROM peminjaman_guru WHERE id_pinjamguru='$_GET[id_pinjamguru]' ";
 if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukuguru.php'>";
    } else {
        Echo "Data anda gagal dihapus. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukuguru.php'>";
    }
?>