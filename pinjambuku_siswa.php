<!--  <?php

  session_start();
  

    require 'function.php';
    $students = kueri("SELECT * FROM siswa");

  if (isset($_POST["cari"])) {
    $students = cari($_POST["keyword"]);
  }
 ?> -->



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/perpus/css/bootstrap.min.css">
    <link rel="stylesheet" href="/perpus/css/bootstrap.min.js">
    <link rel="stylesheet" href="/perpus/css/style.css">
    <title>PERPUSTAKAAN SMANUNGGAL</title>
  </head>
  <body class="bg-light">

  <!-- header -->
    <!-- <div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div> -->
    <img class="card-img-top" src="/perpus/images/header.jpg" style="height: 100%; position: center;" alt="Card image cap">


<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
 <a class="navbar-brand text-light" href="#">SIPS SMANUNGAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
        <a class="nav-link text-light" href="indexadmin.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="katalog_admin.php">Katalog Buku <span class="sr-only">(current)</span></a>
      </li>
      <div class="dropdown">
      <a class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown">Transaksi</a></button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="pinjambuku_siswa.php">Peminjaman Buku Siswa</a>
        <a class="dropdown-item" href="pinjambuku_guru.php">Peminjaman Buku Guru</a>
        <a class="dropdown-item" href="pengembalianbuku_siswa.php">Pengembalian Buku Siswa</a>
        <a class="dropdown-item" href="pengembalianbuku_guru.php">Pengembalian Buku Guru</a>
      </div>
  </div
      <li class="nav-item active">
        <a class="nav-link text-light" href="anggota.php">Anggota <span class="sr-only">(current)</span></a>
      </li>
    <div class="dropdown">
      <a class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown">Laporan</a></button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Laporan Data Buku Perpustakaan</a>
        <a class="dropdown-item" href="#">Laporan Peminjaman Buku Siswa</a>
        <a class="dropdown-item" href="#">Laporan Peminjamna Buku Guru</a>
        <a class="dropdown-item" href="#">Laporan Pengembalian Buku Siswa</a>
         <a class="dropdown-item" href="#">Laporan Pengembalian Buku Guru</a>
      </div>
  </div>
      </ul>


       <a class="form-inline ml-auto nav-link text-light" href="logout.php">
        <button class="btn btn-primary" type="submit">Logout </button>
      </a>
     
     
  
  </div>
</nav>
<!-- close navbar -->
<!-- buka container -->
<div class="container">

<br>
<!-- content  -->
<br>
<br>
<h2> DATA PEMINJAMAN BUKU SISWA </h2>
  <div class="col-md-4">
  <br>
    <form action="" method="POST">
      <input type="text" name="keyword" placeholder="Search" size="30">
      <button type="submit" name="cari"> Cari </button>
      
    </form>
  </div>
<br>
<div class="table-responsive">
  <table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
       <th>No.</th>
                <th>No Buku</th>
                <th>Judul</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Jumlah Pinjam</th>
                <th>Keterangan</th>
                <th>Kembali</th>
                <th>Perpanjang</th>
            </tr>


                                  </thead>
        <?php            
        require_once('koneksi.php');
        
        $baca= "SELECT * FROM peminjaman_siswa ";
        $tampil = mysqli_query($koneksi, $baca);
        
         if (mysqli_num_rows($tampil)>0) {
  
        while($row=mysqli_fetch_assoc($tampil)){
            echo"<tbody>
            <tr>
              <td>
                $row[id_pinjamsiswa] 
              </td>
               <td>$row[no_buku] </td>
                <td>$row[judul]</td>
                <td>$row[nis]</td>
                <td>$row[nama]</td>
                <td>$row[kelas]</td>
                <td>$row[tg_pinjam]</td>
                <td>$row[tgl_kembali]</td>
                <td>$row[jumlah]</td>
                <td>$row[keterangan]</td>
                
                
            </tr>
            </tbody>
            ";}}
            ?>
            </table>




          </thead>
         </table> -->
      </div>
<!-- END content -->

<!-- tutup container --> 
</div>
<!-- tutup container -->
<!-- footer -->
<footer class="py-5 bg-light">
      
        <p class="m-0 text-center text-dark">Copyright &copy; Euis Widanengsih 2019 | Universitas Pakuan</p>
      
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html> 