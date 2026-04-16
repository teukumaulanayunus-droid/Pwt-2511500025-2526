<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Kelas</h1>
            </div>
        </div>
    </div>
</div>

<?php
//kode otomatis
$carikode = mysqli_query($koneksi, "select max(id_kelas) from kelas") or die (mysqli_error($koneksi));
$datakode = mysqli_fetch_array($carikode);

if ($datakode && $datakode[0]) {
    $nilaikode = (int)substr($datakode[0], 2);
    $kode = $nilaikode + 1;
} else {
    $kode = 1;
}
$hasilkode = "K-" . str_pad($kode, 3, "0", STR_PAD_LEFT);
$_SESSION["KODE"] = $hasilkode;

if(isset($_POST['tambah'])){
$nm_kelas = $_POST['nm_kelas'];\n\n    $insert = mysqli_query($koneksi, "INSERT INTO kelas (nm_kelas) VALUES ('$nm_kelas')");
    
    if ($insert) {
        echo '<div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            Berhasil Disimpan
        </div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=kelas">';
    } else {
        echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            Gagal Disimpan
        </div>';
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
                            <label for="nm_kelas">Nama Kelas</label>
                            <input type="text" name="nm_kelas" id="nm_kelas" class="form-control" placeholder="Nama Kelas" required>
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
