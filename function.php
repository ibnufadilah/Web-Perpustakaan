<?php
    // koneksi
    $conn = mysqli_connect("localhost", "root", "", "perpus");

    if(!$conn)
        echo "Database Belum Terkoneksi";
    else
        echo "Koneksi Database Berhasil";

  function buku ($data) {

  global $conn;
  $no_buku  = mysqli_real_escape_string($conn, $data["no_buku"]);
  $tgl_penerima = mysqli_real_escape_string($conn, $data["tgl_penerima"]);
  $no_invetaris = mysqli_real_escape_string($conn, $data["no_invetaris"]);
  $judul       = mysqli_real_escape_string($conn, $data["judul"]);
  $pengarang   = mysqli_real_escape_string($conn, $data["pengarang"]);
  $penerbit    = mysqli_real_escape_string($conn, $data["penerbit"]);
  $jumlah      = mysqli_real_escape_string($conn, $data["jumlah"]);
  $jenis       = mysqli_real_escape_string($conn, $data["jenis"]);
  $bahasa      = mysqli_real_escape_string($conn, $data["bahasa"]);
  $asal        = mysqli_real_escape_string($conn, $data["asal"]);
  $keterangan  = mysqli_real_escape_string($conn, $data["keterangan"]);

  $query = "INSERT INTO data_buku VALUES ('','$no_buku', '$tgl_penerima', '$no_invetaris', '$judul', '$pengarang', '$penerbit', '$jumlah', '$jenis', '$bahasa', '$asal', '$keterangan')";
  mysqli_query($conn, $query);


  return mysqli_affected_rows($conn);
 }    


  function buku_guru ($data) {

  global $conn;
  $no_buku  = mysqli_real_escape_string($conn, $data["no_buku"]);
  $tgl_penerima = mysqli_real_escape_string($conn, $data["tgl_penerima"]);
  $no_invetaris = mysqli_real_escape_string($conn, $data["no_invetaris"]);
  $judul       = mysqli_real_escape_string($conn, $data["judul"]);
  $pengarang   = mysqli_real_escape_string($conn, $data["pengarang"]);
  $penerbit    = mysqli_real_escape_string($conn, $data["penerbit"]);
  $jumlah      = mysqli_real_escape_string($conn, $data["jumlah"]);
  $jenis       = mysqli_real_escape_string($conn, $data["jenis"]);
  $bahasa      = mysqli_real_escape_string($conn, $data["bahasa"]);
  $keterangan  = mysqli_real_escape_string($conn, $data["keterangan"]);

   $query = "INSERT INTO data_bukuguru VALUES ('','$no_buku', '$tgl_penerima', '$no_invetaris', '$judul', '$pengarang', '$penerbit', '$jumlah', '$jenis', '$bahasa', '$keterangan')";
  mysqli_query($conn, $query);


  return mysqli_affected_rows($conn);
 }    


 function pengunjung ($data) {

  global $conn;
  $nisn = mysqli_real_escape_string($conn, $data["nisn"]);
  $nama = strtolower(stripslashes($data["nama"]));
  $jenis_kelamin = mysqli_real_escape_string($conn, $data["jenis_kelamin"]);
  $jenis_anggota = strtolower(stripslashes($data["jenis_anggota"]));
  $tujuan = strtolower(stripslashes($data["tujuan"]));


  $query = "INSERT INTO pengunjung VALUES ('$nisn', '$nama', '$jenis_kelamin','$jenis_anggota', '$tujuan')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
 }


 function kueri($query) {
       global $conn;
       $result = mysqli_query($conn, $query);
       $rows = [];
       while ( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
       }
       return $rows;
  }


    function hapus($id) {
       global $conn;
       $query = "DELETE FROM siswa WHERE id = $id";

       mysqli_query($conn, $query);
       return mysqli_affected_rows($conn);
    }



    function cari($keyword) {
       $query = "SELECT * FROM siswa WHERE
                  namalengkap LIKE '%keyword%' OR
                  nisn LIKE '%keyword%' OR
                  jeniskelamin LIKE '%keyword%' OR
                  agama LIKE '%keyword%' OR
                  alamatlengkap LIKE '%keyword%' OR
                  tanggallahir LIKE '%keyword%' OR
                  nohp LIKE '%keyword%' OR
                  email LIKE '%keyword%' OR
                  asalsekolah LIKE '%keyword%' OR
                  tahunlulus LIKE '%keyword%' OR
                  jurusan LIKE '%keyword%' OR
                  namaot LIKE '%keyword%' OR
                  alamatot LIKE '%keyword%' OR
                  pekerjaanot LIKE '%keyword%' OR 
                  penghasilanot LIKE '%keyword%' OR
                  telpot LIKE '%keyword%'";
                  return kueri($query);
    }

    function ubah($data) {
       global $conn; 

       $id = $data["id"];
       $namalengkap = $data["namalengkap"];
       $nisn = $data["nisn"];
       $jeniskelamin = $data["jeniskelamin"];
       $agama = $data["agama"];
       $alamatlengkap = $data["alamatlengkap"];
       $tanggallahir = $data["tanggallahir"];
       $nohp = $data["nohp"];
       $email = $data["email"];
       $asalsekolah = $data["asalsekolah"];
       $tahunlulus = $data["tahunlulus"];
       $jurusan = $data["jurusan"];
       $namaot = $data["namaot"];
       $alamatot = $data["alamatot"];
       $pekerjaanot = $data["pekerjaanot"];
       $penghasilanot = $data["penghasilanot"];
       $telpot = $data["telpot"];

       $query = "UPDATE siswa SET namalengkap = '$namalengkap', nisn = '$nisn', 
                       jeniskelamin = '$jeniskelamin', agama = '$agama', alamatlengkap = '$alamatlengkap',  tanggallahir = '$tanggallahir',  nohp = '$nohp',  email = '$email',  asalsekolah = '$asalsekolah',  tahunlulus = '$tahunlulus',  jurusan = '$jurusan',  namaot = '$namaot',  alamatot = '$alamatot',  pekerjaanot = '$pekerjaanot',  penghasilanot = '$penghasilanot', telpot = '$telpot'  WHERE id = $id";

       mysqli_query($conn, $query);

       return mysqli_affected_rows($conn);
    }
  ?>