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
    <title>Hello, world!</title>
  </head>
  <body class="bg-dark">
<div class="container">
<div class="card" style="width:60%; margin:20%; margin-top: 50px; margin-bottom: 20px;">
  <img class="card-img-top" src="images/header.jpg" alt="Card image">
  <div class="card-body">
     <div class="row">   
        <div class=" col-ms-8" style="width: 300px; height: 300px;">
          <img src="images/logo.png"  style="width: 60%; margin-top: 90px; margin-left: 70px;">
        </div>
        
        <div class="col-ms-4">
          <form action="otentikasi.php" method="post" class="was-validated bg-light" style="margin-top:10px; margin-left: 40px; padding: 20px;">
            <div class="form-group">
            <?php if (isset($error)) : ?>
          <p style="color: red; font-style: italic;">
          Username / Password Salah!
          </p>
          <?php endif; ?>

              <label for="username">NISN:</label>
              <input type="text" class="form-control" id="username" placeholder="Enter NISN" name="nisn">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>

  <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>

         <a class="" href="index.php">
            <button type="button" class="btn btn-warning">Kembali</button>
            </a>
             
        <br><br>
     

            <a class="" href="admin/loginadmin.php">
            <button type="button" class="btn btn-outline-success">Apakah anda admin ?</button>
            </a>
          </form>
        </div>

  </div>
</div>

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


