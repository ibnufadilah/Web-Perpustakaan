<?php
require_once('../koneksi.php');
$insert= "DELETE FROM peminjaman_siswa WHERE id_pinjamsiswa='$_GET[id_pinjamsiswa]' ";
 if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukusiswa.php'>";
    } else {
        Echo "Data anda gagal dihapus. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=peminjamanbukusiswa.php'>";
    }
?>