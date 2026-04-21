<?php
session_start();
require_once("config/koneksi.php");
if(!isset($_SESSION['Username'])){
  echo"<meta http-equiv='refresh' content='0; url=login.PHP'>";
  exit();
}
$level = $_SESSION['level'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jadwal - <?= ucfirst($level) ?></title>
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
                    <div class="card-header"><h3>Jadwal <?= ucfirst($level) ?></h3></div>
                    <div class="card-body">
                        <p>Jadwal untuk <strong><?= $_SESSION['Username'] ?></strong> (<?= strtoupper($level) ?>)</p>
                        
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
