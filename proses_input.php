<?php
require_once('koneksi.php');



    echo "<pre>
        no_buku                		:  $_POST[no_buku]</br>
        tgl_penerima               	:  $_POST[tgl_penerima]</br>
        no_invetaris                :  $_POST[no_invetaris]</br>
        judul               		:  $_POST[judul]</br>
        pengarang               	:  $_POST[pengarang]</br>
        penerbit               		:  $_POST[penerbit]</br>
        jumlah               		:  $_POST[jumlah]</br>
        jenis               		:  $_POST[jenis]</br>
        bahasa               		:  $_POST[bahasa]</br>
        asal               			:  $_POST[asal]</br>
        keterangan               	:  $_POST[keterangan]</br>
   



    </pre";
    
    $insert="insert into data_buku VALUES (NULL,'$_POST[no_buku]','$_POST[tgl_penerima]','$_POST[no_invetaris]','$_POST[judul]','$_POST[pengarang]','$_POST[penerbit]','$_POST[jumlah]','$_POST[jenis]','$_POST[bahasa]','$_POST[asal]','$_POST[keterangan]')";
    if (mysqli_query($koneksi, $insert)) {
    	echo "<script>alert('Data berhasil diupdate @ $hari_ini.Terima Kasih')</script>";
        echo "<meta http-equiv='refresh' content='0; url=katalog_admin.php'>";
    } else {
        Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
        echo "<meta http-equiv='refresh' content='0; url=formdatabuku.php'>";
    }
?>
