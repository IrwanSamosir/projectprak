<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- CDN Font awesome  -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<title>Data Pegawai</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logopol.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  </head>
  <body>
<?php
 include("koneksi.php");
 $nip= $_GET['x'];

 $sql = "select * from tb_pegawai where nip ='$nip'";
$proses=mysqli_query($koneksi, $sql);
?>
 <div class="card">
  <div class="card-header">

  </div>
  <div class="card-body">
  <table class="table">
  <thead>
 
<?php
while ($isi = mysqli_fetch_assoc($proses)):?>
 <tr>
    <td>NIP</td>
 <td><?php echo $isi['nip']; ?></td>
 </tr>
 <tr>
    <td>Nama</td>
    <td ><?php echo $isi['nama']; ?></td>
 </tr>
 <tr><td>Alamat</td>
 <td><?php echo $isi['alamat']; ?></td></tr>
 <tr>
 <td>Jenis Kelamin</td>
 <td><?php echo $isi['jenkel']; ?></td></tr>
 <tr>
 <td>Tempat</td>   
 <td><?php echo $isi['tempat']; ?></td></tr>
 <tr>
    <td>Tanggal</td>
 <td><?php echo $isi['tanggal']; ?></td></tr>
 <tr>
    <td>Jabatan</td>
 <td><?php echo $isi['jabatan']; ?></td></tr>
 <tr>
    <td>Gaji</td>
 <td><?php echo $isi['gaji']; ?></td>
</tr>
 <tr>
    <td>Tunjangan</td>
 <td><?php echo $isi['tunjangan']; ?></td>
</tr>
<?php
endwhile;
?>
    </tr>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
    window.print();
    </script>
</html>