<?php
require_once('../koneksi.php');
$insert= "DELETE FROM user WHERE id_siswa='$_GET[id_siswa]' ";
 if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=anggota.php'>";
    } else {
        Echo "Data anda gagal dihapus. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=anggota.php'>";
    }
?>