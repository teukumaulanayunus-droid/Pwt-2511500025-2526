<?php
session_start();
require_once("config/koneksi.php");
if(!isset($_SESSION['Username'])){
  echo"<meta http-equiv='refresh' content='0; url=login.PHP'>";
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil - <?= ucfirst($_SESSION['level']) ?></title>
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar & Sidebar same as index.php -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
    </nav>
    
    <aside class="main-sidebar sidebar-dark-primary">
        <a href="index.php" class="brand-link"><span class="brand-text font-weight-light">Jadwal Guru</span></a>
    </aside>
    
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Profil <?= ucfirst($_SESSION['level']) ?></h3>
                            </div>
                            <div class="card-body">
                                <p>Halaman profil untuk <strong><?= $_SESSION['Username'] ?></strong> (<?= strtoupper($_SESSION['level']) ?>)</p>
                                <p>Feature coming soon...</p>
                            </div>
                        </div>
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
