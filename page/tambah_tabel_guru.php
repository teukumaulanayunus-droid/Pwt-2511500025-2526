<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Guru</h1>
            </div>
        </div>
    </div>
</div>

<?php
$carikode = mysqli_query($koneksi, "select max(kd_guru) from tabel_guru") or die (mysqli_error($koneksi));
$datakode = mysqli_fetch_array($carikode);

if ($datakode && $datakode[0]) {
    $nilaikode = (int)substr($datakode[0], 1);  // G-001 -> 001
    $kode = $nilaikode + 1;
} else {
    $kode = 1;
}
$hasilkode = "G-" . str_pad($kode, 3, "0", STR_PAD_LEFT);
$_SESSION["KODE"] = $hasilkode;

if(isset($_POST['tambah'])){
    $kd_guru = $_POST['kd_guru'];
    $nm_guru = $_POST['nm_guru'];
    $jenkel = $_POST['jenkel'];
    $pend_terakhir = $_POST['pend_terakhir'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];

    $insert = mysqli_query($koneksi, "INSERT INTO tabel_guru (kd_guru, nm_guru, jenkel, pend_terakhir, hp, alamat) VALUES ('$kd_guru', '$nm_guru', '$jenkel', '$pend_terakhir', '$hp', '$alamat')");
    
    if ($insert) {
        echo '<div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Berhasil Disimpan</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=tabel_guru">';
    } else {
        echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Gagal Disimpan " . mysqli_error($koneksi) . "</h4></div>';
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
                            <label for="kd_guru">Kode Guru</label>
                            <input type="text" name="kd_guru" value="<?= $hasilkode; ?>" class="form-control" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="nm_guru">Nama Guru</label>
                            <input type="text" name="nm_guru" id="nm_guru" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="jenkel">Jenis Kelamin</label>
                            <input type="text" name="jenkel" id="jenkel" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="pend_terakhir">Pendidikan Terakhir</label>
                            <input type="text" name="pend_terakhir" id="pend_terakhir" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="hp">No HP</label>
                            <input type="text" name="hp" id="hp" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
                            <a href="index.php?page=tabel_guru" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
