<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Guru</h1>
            </div>
        </div>
    </div>
</div>

<?php
$kd = $_GET['kd'] ?? '';
if (empty($kd)) {
    echo '<div class="alert alert-danger">Kode Guru tidak ditemukan.</div>';
    echo '<meta http-equiv="refresh" content="1;url=index.php?page=tabel_guru">';
    exit;
}
$edit = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM table_guru WHERE kd_guru='$kd' "));

if (!$edit) {
    echo '<div class="alert alert-danger">Data Guru tidak ditemukan.</div>';
    echo '<meta http-equiv="refresh" content="1;url=index.php?page=tabel_guru">';
    exit;
}

if(isset($_POST['tambah'])){
    $kd_guru = $_POST['kd_guru'];
    $nm_guru = $_POST['nm_guru'];
    $jenkel = $_POST['jenkel'];
    $pend_terakhir = $_POST['pend_terakhir'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];

    $update = mysqli_query($koneksi, "UPDATE table_guru SET nm_guru='$nm_guru', jenkel='$jenkel', pend_terakhir='$pend_terakhir', hp='$hp', alamat='$alamat' WHERE kd_guru='$kd_guru'");
    
    if ($update) {
        echo '<div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Berhasil Diupdate</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=tabel_guru">';
    } else {
        echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Gagal Diupdate: ' . mysqli_error($koneksi) . '</h4></div>';
    }
}
?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-body p-2">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="kd_guru">Kode Guru</label>
                            <input type="text" name="kd_guru" value="<?= $edit['kd_guru']; ?>" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="nm_guru">Nama Guru</label>
                            <input type="text" name="nm_guru" value="<?= $edit['nm_guru']; ?>" id="nm_guru" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="jenkel">Jenis Kelamin</label>
                            <input type="text" name="jenkel" value="<?= $edit['jenkel'] ?? ''; ?>" id="jenkel" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="pend_terakhir">Pendidikan Terakhir</label>
                            <input type="text" name="pend_terakhir" value="<?= $edit['pend_terakhir'] ?? ''; ?>" id="pend_terakhir" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="hp">No HP</label>
                            <input type="text" name="hp" value="<?= $edit['hp'] ?? ''; ?>" id="hp" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" rows="3"><?= $edit['alamat'] ?? ''; ?></textarea>
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="tambah" value="Update">
                            <a href="index.php?page=tabel_guru" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
