<?php 
include'koneksi.php' ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/script.js"></script>

  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.css">
  <script type="text/javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/dataTables.bootstrap4.js"></script>
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
      <a class="nav-link text-light" href="index1.php">Beranda<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link text-light" href="katalog.php">Katalog Buku<span class="sr-only">(current)</span></a>
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
<div class="container-fluid">

<br>
<br>
<h2> DATA BUKU SISWA </h2>


  <!-- content  -->
 
<br>

  <table id="table" class="table table-bordered ">
    <thead class="thead-dark">
      <tr>
       <th>No.</th>
       <th>No Buku</th>
       <th>Tanggal Penerima</th>
       <th>No Inventaris</th>
       <th>Judul</th>
       <th>Pengarang</th>
       <th>Penerbit</th>
       <th>Jumlah</th>
       <th>Jenis</th>
       <th>Bahasa</th>
       <th>Asal</th>
       <th>Keterangan</th>
       <th>Opsi</th>



     </tr>


   </thead>
   <tbody>
   <?php            
   require_once('koneksi.php');
   $no=1;
   $baca= "SELECT * FROM data_buku ";
   $tampil = mysqli_query($koneksi, $baca);

   if (mysqli_num_rows($tampil)>0) {

    while($row=mysqli_fetch_assoc($tampil)){
      echo"
      <tr>
      <td>
      $no
      </td>
      <td>$row[no_buku] </td>
      <td>$row[tgl_penerima]</td>
      <td>$row[no_invetaris]</td>
      <td>$row[judul]</td>
      <td>$row[pengarang]</td>
      <td>$row[penerbit]</td>
      <td>$row[jumlah]</td>
      <td>$row[jenis]</td>
      <td>$row[bahasa]</td>
      <td>$row[asal]</td>
      <td>$row[keterangan]</td>
      <td>
      <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#pinjam-$row[id_bukusiswa]'>
      Pinjam </button>
                
      </td>


      </tr>
      
      ";
    $no++; ?>
      <div class="modal fade" id="pinjam-<?php echo $row['id_bukusiswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Pinjam Buku</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="aksi_pinjam.php" method="post">
               <div class="form-group">
                <label for="email">No Buku :</label>
                <input type="text" readonly class="form-control-plaintext" id="email" name="no_buku" value="<?php echo $row['no_buku']; ?>">
              </div>

              <div class="form-group">
                <label for="email">Judul Buku :</label>
                <input type="text" readonly class="form-control-plaintext" id="email" name="judul" value="<?php echo $row['judul']; ?>">
              </div>

               <div class="form-group">
                <label for="email">Id Buku Siswa :</label>
                <input type="text" readonly class="form-control-plaintext" id="email" name="id_bukusiswa" value="<?php echo $row['id_bukusiswa']; ?>">
              </div>
             
              <div class="form-group">
                <label for="email">NISN :</label>
                <input type="text" readonly class="form-control-plaintext" id="email" name="nisn" value="<?php echo $cust['nisn']; ?>">
              </div>
               <div class="form-group">
                <label for="email">Nama Siswa :</label>
                <input type="text" readonly class="form-control-plaintext" id="email" name="nama_siswa" value="<?php echo $cust['nama']; ?>">
              </div>
              
              <div class="form-group">
                <label for="email">jumlah Buku :</label>
                <input type="number" max="<?php echo $row['jumlah'] ?>" class="form-control" id="email" name="jumlah" placeholder="Masukkan Jumlah Buku">
              </div>

              <div class="form-group">
                <label for="email">Tanggal Pinjam :</label>
                <input type="date" class="form-control" id="email" name="tgl_pinjam">
              </div>

              <div class="form-group">
                <label for="email">Tanggal Kembali :</label>
                <input type="date" class="form-control" id="email" name="tgl_kembali">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Pinjam Buku</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
  }}
  ?>
</tbody>
</table>


<!-- END content -->

<!-- tutup container --> 
</div>
<!-- tutup container -->
<!-- footer -->
<footer class="py-5 bg-light">
      
        <p class="m-0 text-center text-dark">Copyright &copy; Euis Widanengsih 2019 | Universitas Pakuan</p>
      
</footer>



</div>

<script type="text/javascript">
  $(document).ready( function () {
    $('#table').DataTable();
  } );

</script>
</body>
</html> 