<?php
include("koneksi.php");
if(isset($_POST['btnDaftar'])){
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$query = mysqli_query($koneksi, "INSERT INTO user 
VALUES('$username', '$password')");
if($query){
echo "
<script>
alert('Register Akun Anda Sukses!');
window.location.href = 'login.php';
</script>
";
}
}
?>