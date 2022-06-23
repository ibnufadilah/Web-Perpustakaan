<?php 
include'koneksi.php' ?>
<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.js">
    <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
        <a class="nav-link text-light" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item active">
        <a class="nav-link text-light" href="formpengunjung.php">Buku Tamu<span class="sr-only">(current)</span></a>
      </li>
                    <?php
                       
                       session_start();
                       error_reporting(0);
                       $id_siswa = $_SESSION['id_siswa'];
                       if (!isset($id_siswa)){

                       ?>
     
    


    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          REGISTER & LOGIN
                        </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="loginuser.php">LOGIN</a>
                          <a class="dropdown-item" href="register.php">REGISTER</a>
                      </div>
                      </li>
      <?php }else{

                        $customer = mysqli_query($koneksi,"SELECT*FROM user where id_siswa = '$id_siswa' ");
                          $cust = mysqli_fetch_array($customer);
                      ?>
                       <li class="nav-item active">
        <a class="nav-link text-light" href="katalog.php">Katalog Buku<span class="sr-only">(current)</span></a>
      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php 
                           echo $cust['nama'];
                           ?>

                        </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <!-- <a class="dropdown-item" href="data_peminjaman.php">Profile</a> -->
                           <a class="dropdown-item" href="riwayat_peminjaman.php">Riwayat Peminjaman</a>
                          <a class="dropdown-item" href="logout.php">Logout</a>
                      </div>
                      </li>
                      <?php } ?>
                     
                    </ul>
                  </div>
                          </nav>
<!-- close navbar -->

<div class="container">

  <br>
  <!-- content  -->
  <div class="container">

    <br>
    <br>
    <div class="row">
      <div class="col-sm-12">
        <center><h1>SELAMAT DATANG!</h1></center>
        <br><br> <center><h3>Di Sistem Informasi Perpustakaan Sekolah</h3></center>
        <center><h4>SMA Negeri 1 Klapanunggal</h4></center>
      </div>  
    </div>
  </div>


  <br>

  <table id="table" class="table table-bordered">
    <thead class="thead-dark">
      <tr>
       <th>No.</th>
       <th>No Buku</th>
       <th>Judul Buku</th>
       <th>NISN</th>
       <th>Nama</th>
       <th>Tanggal Peminjaman</th>
       <th>Tanggal Kembali</th>
       <th>Jumlah</th>
       <th>Keterangan</th>
       <th>Opsi</th>

     </tr>


   </thead>
   <?php            
   require_once('koneksi.php');
   $no = 1;
   $nisn = $cust['nisn']; 
   $baca= "SELECT * FROM peminjaman_siswa where status = 'Pinjam' && nisn = '$nisn'  order by id_pinjamsiswa DESC";
   $tampil = mysqli_query($koneksi, $baca);

   if (mysqli_num_rows($tampil)>0) {

    while($row=mysqli_fetch_assoc($tampil)){

      echo"<tbody>
      <tr>
      <td>
      $no      </td>
      <td>$row[no_buku] </td>
      <td>$row[judul]</td>
      <td>$row[nisn]</td>
      <td>$row[nama]</td>
      <td>$row[tgl_pinjam]</td>
      <td>$row[tgl_kembali]</td>
      <td>$row[jumlah]</td>
      <td>
      <a href='kembali_buku.php?id_kembalisiswa=$row[id_kembalisiswa]' class='btn btn-primary'> Kembalikan Buku </a> <br><br>
          
      </td>


      </tr>
      </tbody>
      
      ";
      ?>
      <?php
         $no++; ?>
      <?php 
      }}
      ?>

</table>

<!-- footer -->
<footer class="py-5 bg-light">
      
        <p class="m-0 text-center text-dark">Copyright &copy; Euis Widanengsih 2019 | Universitas Pakuan</p>
      
</footer>







  </body>
</html> 