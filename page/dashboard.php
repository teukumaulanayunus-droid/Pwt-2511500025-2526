<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?php 
                $query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM kelas");
                $result = mysqli_fetch_assoc($query);
                echo $result['total'];
                ?></h3>
                <p>Total Kelas</p>
            </div>
            <div class="icon">
                <i class="fas fa-school"></i>
            </div>
            <a href="index.php?page=kelas" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?php 
                $query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM mapel");
                $result = mysqli_fetch_assoc($query);
                echo $result['total'];
                ?></h3>
                <p>Total Mapel</p>
            </div>
            <div class="icon">
                <i class="fas fa-book"></i>
            </div>
            <a href="index.php?page=mapel" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?php 
                $query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tabel_guru");
                $result = mysqli_fetch_assoc($query);
                echo $result['total'];
                ?></h3>
                <p>Total Guru</p>
            </div>
            <div class="icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <a href="index.php?page=tabel_guru" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>0</h3>
                <p>Total Siswa</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Recent Activity</h3>
            </div>
            <div class="card-body">
                <div class="callout callout-info">
                    <h5>Selamat Datang di Sistem Manajemen Sekolah!</h5>
                    <p>Dashboard menampilkan statistik Kelas, Mapel, Guru. CRUD lengkap untuk semua modul.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="plugins/chart.js/Chart.min.css">
<script src="plugins/chart.js/Chart.min.js"></script>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Jumlah Kelas per Status</h3>
            </div>
            <div class="card-body">
                <canvas id="kelasChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
$(function () {
  'use strict'
  var kelasCtx = $('#kelasChart')[0].getContext('2d');
