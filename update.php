<?php 
    include('koneksi.php');
    
    $kode = $_POST['kode'];
$nama = $_POST['nama'];
$namap = $_POST['namap'];
$nim = $_POST['nim'];
$jenkel = $_POST['jenkel'];
$tanggal = $_POST['tan'];
$hp = $_POST['hp'];

    // proses simpan database
    $sql = "update perpustakaan set        
            nama_buku = '$nama',        
            nama_peminjam = '$namap',        
            nim = '$nim',        
            jenkel = '$jenkel',        
            tgl_pinjam = '$tanggal',
            no_hp = '$hp'
            where kode_buku = '$kode'        
    ";

    $proses = mysqli_query ($koneksi,$sql);
    if ( $proses ) {
        header("Location:table.php");
    }
?>