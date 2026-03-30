<?php
session_start();
require_once("config/koneksi.php");
if(!isset($_SESSION['Username']) || $_SESSION['level'] != 'guru'){
  echo"<meta http-equiv='refresh' content='0; url=login.PHP'>";
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kelas - Guru</title>
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light"><!-- simplified --></nav>
    <aside class="main-sidebar sidebar-dark-primary"><!-- simplified --></aside>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header"><h3>Daftar Kelas</h3></div>
                    <div class="card-body">
                        <p>Halaman kelas untuk guru <strong><?= $_SESSION['Username'] ?></strong></p>
                        <p>Feature coming soon...</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
