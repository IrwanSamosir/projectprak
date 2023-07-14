<?php 
    include('koneksi.php');
    $kode = $_GET['x'];

    // proses hapus data
    $sql = "delete from perpustakaan where kode_buku = '$kode'";
    $proses = mysqli_query ($koneksi,$sql);
    
    if ( $proses ) {
        header("Location:table.php");
    }
?>