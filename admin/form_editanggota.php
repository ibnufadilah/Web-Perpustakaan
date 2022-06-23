<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.js">
    <link rel="stylesheet" href="../css/style.css">
     <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>

  <!-- header -->
    <!-- <div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div> -->
   
 


<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
  <a class="navbar-brand text-light" href="#">SIPS SMANUNGAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


       
     
</nav>
<!-- close navbar -->
<!-- buka container -->
<div class="container">

   <?php            
        require_once('../koneksi.php');
        $baca= "SELECT * FROM user where id_siswa='$_GET[id_siswa]'";
        $tampil = mysqli_query($koneksi, $baca);
        $row=mysqli_fetch_array($tampil);
        ?>
<!-- tabel -->
<div class="card bg-light" style=" padding-left: 50px; padding-right: 50px; padding-bottom: 50px; margin-top: 50px; margin-bottom: 50px;">
  <div class="card-body"><h2></div>
    <h2>Input Data Member Perpustakaan</h2>
      <p>semangat & selamat bekerja :)</p>
        <br>
            <form action="proses_editanggota.php" method="POST" class="col-ms-11">
              <div class="form-group">
                <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>" />
                
               <div class="form-group">
            <label for="exampleInputEmail1">NISN</label>
            <input type="text" class="form-control" name="nisn" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NISN" required="required" value="<?php  echo "$row[nisn]"; ?>">
          </div>
          
         
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required="required">
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap" required="required" value="<?php  echo "$row[nama]"; ?>">
          </div>

            <div class="form-group">
            <label for="kelas">Kelas :</label>
             <select id="kelas" class="form-control form-control-sm" name="kelas">
             <option selected>Pilih salah satu</option>
              <option selected>X MIPA 1</option>
              <option selected>X MIPA 2</option>
              <option selected>X MIPA 3</option>
              <option selected>X MIPA 4</option>
              <option selected>X IPS 1</option>
              <option selected>X IPS 2</option>
              <option selected>X IPS 3</option>
              <option selected>X IPS 4</option>
              <option selected>XI MIPA 1</option>
              <option selected>XI MIPA 2</option>
              <option selected>XI MIPA 3</option>
              <option selected>XI MIPA 4</option>
              <option selected>XI IPS 1</option>
              <option selected>XI IPS 2</option>
              <option selected>XI IPS 3</option>
              <option selected>XI IPS 4</option>
              <option selected>XII MIPA 1</option>
              <option selected>XII MIPA 2</option>
              <option selected>XII MIPA 3</option>
              <option selected>XII MIPA 4</option>
              <option selected>XII IPS 1</option>
              <option selected>XII IPS 2</option>
              <option selected>XII IPS 3</option>
              <option selected>XII IPS 4</option>
            </select>
          </div>

           <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin :</label>
             <select id="jenis_kelamin" class="form-control form-control-sm" name="jenis_kelamin">
             <option selected>Pilih salah satu</option>
              <option selected>Perempuan</option>
              <option selected>Laki-laki</option>
              </select>
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Tempat Tanggal Lahir</label>
            <input type="text" class="form-control" name="ttl" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tempat Tanggal Lahir" required="required" value="<?php  echo "$row[ttl]"; ?>">
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Nomor Telepon</label>
            <input type="text" class="form-control" name="no_telp" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon" required="required" value="<?php  echo "$row[no_telp]"; ?>">
          </div>
         
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat" required="required" value="<?php  echo "$row[alamat]"; ?>">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>

           <a class="" href="anggota.php">
                <button type="button" class="btn btn-warning">Kembali</button>
                </a> 
         </form>
      </div>

           
</div>
</div>
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