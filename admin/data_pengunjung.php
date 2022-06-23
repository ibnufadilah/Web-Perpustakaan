<?php 
include'../koneksi.php';
session_start();

$id_admin = $_SESSION ['id_admin'];

if (!isset($id_admin) || empty($id_admin)) {
  
  header('location:loginadmin.php');
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery-3.3.1.slim.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/script.js"></script>

  <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap4.css">
  <script type="text/javascript" src="../js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="../js/dataTables.bootstrap4.js"></script>
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
     <div class="dropdown">
      <a class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown">Katalog Buku</a></button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="katalog_siswa.php">Buku Siswa</a>
        <a class="dropdown-item" href="katalog_guru.php">Buku Guru</a>
      </div>
  </div>
  
      <div class="dropdown">
      <a class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown">Transaksi</a></button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="peminjamanbukusiswa.php">Peminjaman Buku Siswa</a>
        <a class="dropdown-item" href="pengembalianbukusiswa.php">Pengembalian Buku Siswa</a>
        <a class="dropdown-item" href="peminjamanbukuguru.php">Peminjaman Buku Guru</a>
        <a class="dropdown-item" href="pengembalianbukuguru.php">Pengembalian Buku Guru</a>
      </div>
  </div>
    
        <li class="nav-item active">
        <a class="nav-link text-light" href="anggota.php">Anggota <span class="sr-only">(current)</span></a>
      </li>

      <div class="dropdown">
      <a class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown">Laporan</a></button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="laporandatabukusiswa.php">Laporan Data Buku Siswa</a>
        <a class="dropdown-item" href="laporandatabukuguru.php">Laporan Data Buku Guru</a>
        <a class="dropdown-item" href="laporanpeminjamansiswa.php">Laporan Peminjaman Buku Siswa</a>
        <a class="dropdown-item" href="laporanpeminjamanguru.php">Laporan Peminjaman Buku Guru</a>
        <a class="dropdown-item" href="laporanpengembaliansiswa.php">Laporan Pengembalian Buku Siswa</a>
        <a class="dropdown-item" href="laporanpengembalianguru.php">Laporan Pengembalian Buku Guru</a>
      </div>
  </div>


       <li class="nav-item active">
        <a class="nav-link text-light" href="data_pengunjung.php">Data Pengunjung <span class="sr-only">(current)</span></a>
       </li>
      
      <?php
                       
                      
                       error_reporting(0);
                       $id_admin = $_SESSION['id_admin'];
                       if (!isset($id_admin)){

                       ?>
     
    


    <li class="nav-item dropdown">
                        
                      
                      </li>
      <?php }else{

                        $customer = mysqli_query($koneksi,"SELECT*FROM admin where id_admin = '$id_admin' ");
                          $cust = mysqli_fetch_array($customer);
                      ?>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php 
                           echo $cust['username'];
                           ?>

                        </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         
                          <a class="dropdown-item" href="logout.php">Logout</a>
                      </div>
                      </li>
                      <?php } ?>
                     
                    </ul>
                  </div>

     
     
     
  
  </div>
</nav>
<!-- close navbar -->
<!-- buka container -->
<div class="container">

<br>
<!-- content  -->
<br>
<br>
<h2> DATA PENGUNJUNG PERPUSTAKAAN </h2>
 <!--  <div class="col-md-4">
  <br>
    <form action="" method="POST">
      <input type="text" name="keyword" placeholder="Search" size="30">
      <button type="submit" name="cari"> Cari </button>
      
    </form>
  </div> -->
<br>
  
  <table id="table" class="table table-bordered">
    <thead class="thead-dark">
      <tr>
       <th>No.</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Tujuan</th>
                <th>Opsi</th>
               

            </tr>


                                  </thead>

           <?php            
        require_once('../koneksi.php');
        // $baca= "SELECT * FROM user ";
        // $tampil = mysqli_query($koneksi, $baca);
        $sql = mysqli_query($koneksi, "SELECT * FROM pengunjung") or die(mysqli_error($koneksi));
        
         if (mysqli_num_rows($sql) > 0) {
        $no=1;
  
        while($row = mysqli_fetch_assoc($sql)){
            echo '
            <tr>
              <td>'.$no.'</td>
               <td>'.$row[nisn].'</td>
                <td>'.$row[nama].'</td>
                <td>'.$row[kelas].'</td>
                <td>'.$row[jenis_kelamin].'</td>
                <td>'.$row[tujuan].'</td>
                 <td><a class="btn btn-danger" href=delete_pengunjung.php?id_pengunjung='.$row[id_pengunjung].'> Delete</a><br><br>
                 </td>
                </tr>
            
            ';
            $no++;
      }
    }
     ?>                           
            </table>


          
        

<!-- END content -->

<!-- tutup container --> 
</div>
<!-- tutup container -->
<!-- footer -->
<footer class="py-5 bg-light">
      
        <p class="m-0 text-center text-dark">Copyright &copy; Euis Widanengsih 2019 | Universitas Pakuan</p>
      
</footer>



       <script type="text/javascript">
  $(document).ready( function () {
    $('#table').DataTable();
} );

</script>
  </body>
</html> 