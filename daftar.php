<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap
.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous">
<title>Form Register</title>
</head>
<body>
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<div class="card-header text-center">
<b>FORM REGISTER</b>
</div>
<form action="prosesdaftar.php" method="POST">
<div class="card-body">
<div class="mb-3">
<input type="text" class="form-control"
id="exampleInputEmail1" name="username" aria-describedby="emailHelp"
placeholder="Masukkan Username">
</div>
<div class="mb-3">
<input type="password" class="form-control"
id="exampleInputEmail1" name="password" aria-describedby="emailHelp"
placeholder="Masukkan Password">
</div>
<button type="submit" class="btn btn-primary"
name="btnDaftar">REGISTER</button>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.b
undle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script 
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/poppe
r.min.js" integrity="sha384-
IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
crossorigin="anonymous"></script>
<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.m
in.js" integrity="sha384-
cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
crossorigin="anonymous"></script>
-->
</body>
</html>
