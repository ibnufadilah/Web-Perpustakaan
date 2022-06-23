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
        $baca= "SELECT * FROM data_buku where id_bukusiswa='$_GET[id_bukusiswa]'";
        $tampil = mysqli_query($koneksi, $baca);
        $row=mysqli_fetch_array($tampil);
        ?>
<!-- tabel -->
<div class="card bg-light" style=" padding-left: 50px; padding-right: 50px; padding-bottom: 50px; margin-top: 50px; margin-bottom: 50px;">
  <div class="card-body"><h2></div>
    <h2>Input Data Buku Perpustakaan</h2>
      <p>semangat & selamat bekerja :)</p>
        <br>
            <form action="proses_edit.php" method="POST" class="col-ms-11">
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $row['id_bukusiswa'] ?>" />
                <h3 hidden class="box-title"> &ensp; || &ensp; <?php  echo "ID : $row[id_bukusiswa]"; ?> </h3>  

                <label for="no_buku">No Buku:</label>
                <input type="text" class="form-control" id="no_buku" name="no_buku" value="<?php  echo "$row[no_buku]"; ?>">
              </div>
              <div class="form-group">
                <label for="tgl_penerima">Tanggal Penerima :</label>
                <input type="date" class="form-control" id="tgl_penerima" name="tgl_penerima" value="<?php  echo "$row[tgl_penerima]"; ?>">
              </div>
              <div class="form-group">
                <label for="no_invetaris">No Inventaris :</label>
                <input type="text" class="form-control" id="no_invetaris" name="no_invetaris" value="<?php  echo "$row[no_invetaris]"; ?>">
              </div>
              <div class="form-group">
                <label for="judul">Judul :</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php  echo "$row[judul]"; ?>">
              </div>
              <div class="form-group">
                <label for="pengarang">Pengarang :</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php  echo "$row[pengarang]"; ?>">
              </div>
              <div class="form-group">
                <label for="penerbit">Penerbit :</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php  echo "$row[penerbit]"; ?>">
              </div>
              <div class="form-group">
                <label for="jumlah">Jumlah :</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php  echo "$row[jumlah]"; ?>">
              </div>
               <div class="form-group">
                <label for="jenis">Jenis :</label>
                <select id="jenis" class="form-control form-control-sm" name="jenis" value="<?php  echo "$row[jenis]"; ?>">
                  <option selected>Pilih salah satu</option>
                  <option selected>Non Fiksi</option>
                  <option selected>Fiksi</option>
                  <option selected>Referensi</option>
                </select>
                </div>
                <div class="form-group">
                <label for="bahasa">Bahasa :</label>
                <select id="bahasa" class="form-control form-control-sm" name="bahasa" value="<?php  echo "$row[bahasa]"; ?>">
                  <option selected>Pilih salah satu</option>
                  <option selected>Indonesia</option>
                  <option selected>Inggris</option>
                  <option selected>Dan Lain-lain</option>
                </select>
                </div>
                <div class="form-group">
                <label for="asal">Asal :</label>
                <input type="text" class="form-control" id="asal" name="asal" value="<?php  echo "$row[asal]"; ?>">
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan :</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php  echo "$row[keterangan]"; ?>">
              </div>

          
              
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary" name="buku">Submit</button>

                 <a class="" href="katalog_siswa.php">
                <button type="button" class="btn btn-warning">Kembali</button>
                </a> 
              </form>

           
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