<?php
require_once('../koneksi.php');
$insert= "DELETE FROM data_bukuguru WHERE id_bukuguru='$_GET[id_bukuguru]' ";
 if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=katalog_guru.php'>";
    } else {
        Echo "Data anda gagal dihapus. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=katalog_guru.php'>";
    }
?>