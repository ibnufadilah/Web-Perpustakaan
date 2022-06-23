<?php
require_once('../koneksi.php');
$insert= "DELETE FROM pengembalian_guru WHERE id_kembaliguru='$_GET[id_kembaliguru]' ";
 if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil diupdate')</script>";
        echo "<meta http-equiv='refresh' content='0; url=pengembalianbukuguru.php'>";
    } else {
        Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=pengembalianbukuguru.php'>";
    }
?>