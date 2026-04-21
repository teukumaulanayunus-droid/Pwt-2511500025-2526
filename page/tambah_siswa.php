<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Siswa</h1>
            </div>
        </div>
    </div>
</div>

<?php
//kode otomatis
$carikode = mysqli_query($koneksi, "select max(kd_siswa) from siswa") or die (mysqli_error($koneksi));
$datakode = mysqli_fetch_array($carikode);

if ($datakode && $datakode[0]) {
    $nilaikode = (int)substr($datakode[0], 2);
    $kode = $nilaikode + 1;
} else {
    $kode = 1;
}
$hasilkode = "S-" . str_pad($kode, 3, "0", STR_PAD_LEFT);

if(isset($_POST['tambah'])){
    $kd_siswa = $_POST['kd_siswa'];
    $nm_siswa = $_POST['nm_siswa'];
    $id_kelas = $_POST['id_kelas'];

    $insert = mysqli_query($koneksi, "INSERT INTO siswa (kd_siswa, nm_siswa, id_kelas) VALUES ('$kd_siswa', '$nm_siswa', '$id_kelas')");
    
    if ($insert) {
        echo '<div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Berhasil Disimpan</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=siswa">';
    } else {
        echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Gagal Disimpan</h4></div>';
    }
}
?>
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-body p-2">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="kd_siswa">Kode Siswa</label>
                            <input type="text" name="kd_siswa" value="<?= $hasilkode; ?>" class="form-control" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="nm_siswa">Nama Siswa</label>
                            <input type="text" name="nm_siswa" id="nm_siswa" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="id_kelas">Kelas</label>
                            <select name="id_kelas" class="form-control" required>
                                <option value="">Pilih Kelas</option>
                                <?php
                                $kelas_query = mysqli_query($koneksi, "SELECT * FROM kelas");
                                while ($k = mysqli_fetch_array($kelas_query)) {
                                    echo '<option value="' . $k['id_kelas'] . '">' . $k['nm_kelas'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
                            <a href="index.php?page=siswa" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
