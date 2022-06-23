<!DOCTYPE html>

<html>
<head>
    
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.2.1.js"></script>

    <title>CETAK LAPORAN</title>
</head>
<body style="padding: 0px 100px 100px 100px;">


    <div class="container-fluid">
   <h1 class="mt-4" style="text-align: center;">Laporan Data Buku Siswa</h1>
    <hr>
    <br>
    <div class="row">
        <div class="col-md-8">

             <table id="table" class="table table-bordered">
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
          
               
              

            </tr>


                                  </thead>
        <?php            
        require_once('../koneksi.php');

        if(isset($_POST['submit'])){
            $tgl = $_POST['tgl_penerima'];
            $baca= "SELECT * FROM data_buku WHERE tgl_penerima = '$tgl'";
            if($tgl == null){
             $baca= "SELECT * FROM data_buku ";        
            }

        }
       
        $tampil = mysqli_query($koneksi, $baca);
        
         if (mysqli_num_rows($tampil)>0) {
  
        while($row=mysqli_fetch_assoc($tampil)){
            echo"<tbody>
            <tr>
              <td>
                $row[id_bukusiswa] 
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
                
                
                
            </tr>
            </tbody>
            ";}}
            ?>

            </table>

        </div>

    </div>
    <hr>

   
      

    </div>

</body>
</html>
    <script>
        window.print();
    </script>