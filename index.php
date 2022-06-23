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
        <a class="nav-link text-light" href="index.php">Beranda<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link text-light" href="katalog_user.php">Katalog Buku<span class="sr-only">(current)</span></a>
      </li>


                    <?php
                       
                       session_start();
                       error_reporting(0);
                       $id_siswa = $_SESSION['id_siswa'];
                       if (!isset($id_siswa)){

                       ?>

                       <li class="nav-item active">
        <a class="nav-link text-light" href="loginuser.php">Login<span class="sr-only">(current)</span></a>
      </li>

      <?php }else{

                        $customer = mysqli_query($koneksi,"SELECT*FROM user where id_siswa = '$id_siswa' ");
                          $cust = mysqli_fetch_array($customer);
                      ?>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php 
                           echo $cust['nama'];
                           ?>

                        </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <!--  <a class="dropdown-item" href="data_peminjaman.php">Profile</a> -->
                           <a class="dropdown-item" href="riwayat_peminjaman.php">Riwayat Peminjaman</a>
                          <a class="dropdown-item" href="logout.php">Logout</a>
                      </div>
                      </li>
                      <?php } ?>
                     
                    </ul>
                  </div>

                          </nav>
<!-- close navbar -->
<!-- buka container -->
<div class="container">

<br>
<br>
<img class="card-img-top" src="images/img.jpg" style="height:520px;  width:1100px; margin-left: 10px;" alt="Card image cap">
<br>
<br>
<br>
<br>
</div>

<!-- END content -->

<!-- tutup container --> 


<div class="py-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h5 class="text-white">Jalan Terusan Bojong, Desa Klapanunggal, Kecamatan Klapanunggal, Kabupaten Bogor 16820, Provinsi Jawa Barat, Indonesia. </h5>
          <img class="card-img-top" src="images/telp.jpg" style="height: 100px;  width:300px; margin-left: 30px;" alt="Card image cap">
        </div>
     </div>
     </div>
     </div>
<!-- footer -->

<footer class="py-5 bg-light">
      
        <p class="m-0 text-center text-dark">Copyright &copy; Euis Widanengsih 2019 | Universitas Pakuan</p>
      
</footer>





  </body>
</html> 