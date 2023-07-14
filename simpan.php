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
$sql = "insert into perpustakaan values ('$kode', '$nama', '$namap', '$nim', '$jenkel', '$tanggal', '$hp')";

$proses = mysqli_query ($koneksi,$sql);
if ( $proses ) {
    header("Location:buku.php");
}

?>