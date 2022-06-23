<?php
require_once('../koneksi.php');
$insert= "DELETE FROM pengunjung WHERE id_pengunjung='$_GET[id_pengunjung]' ";
 if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=data_pengunjung.php'>";
    } else {
        Echo "Data anda gagal dihapus. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=data_pengunjung.php'>";
    }
?>