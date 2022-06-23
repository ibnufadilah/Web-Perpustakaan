<?php
require_once('../koneksi.php');
$insert= "DELETE FROM pengembalian_siswa WHERE id_kembalisiswa='$_GET[id_kembalisiswa]' ";
 if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=pengembalianbukusiswa.php'>";
    } else {
        Echo "Data anda gagal dihapus. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=pengembalianbukusiswa.php'>";
    }
?>