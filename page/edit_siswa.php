<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Siswa</h1>
            </div>
        </div>
    </div>
</div>

<?php
$kd = $_GET['kd'] ?? '';
if (empty($kd)) {
    echo '<div class="alert alert-danger">Kode Siswa tidak ditemukan.</div>';
    echo '<meta http-equiv="refresh" content="1;url=index.php?page=siswa">';
    exit;
}
$edit = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM siswa WHERE kd_siswa='$kd' "));

if (!$edit) {
    echo '<div class="alert alert-danger">Data Siswa tidak ditemukan.</div>';
    echo '<meta http-equiv="refresh" content="1;url=index.php?page=siswa">';
    exit;
}

if(isset($_POST['tambah'])){
    $kd_siswa = $_POST['kd_siswa'];
    $nm_siswa = $_POST['nm_siswa'];
    $id_kelas = $_POST['id_kelas'];

    $update = mysqli_query($koneksi, "UPDATE siswa SET nm_siswa='$nm_siswa', id_kelas='$id_kelas' WHERE kd_siswa='$kd_siswa'");
    
    if ($update) {
        echo '<div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Berhasil Diupdate</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=siswa">';
    } else {
        echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Gagal Diupdate</h4></div>';
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
                            <label for="kd_siswa">Kode Siswa</label>
                            <input type="text" name="kd_siswa" value="<?= $edit['kd_siswa']; ?>" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="nm_siswa">Nama Siswa</label>
                            <input type="text" name="nm_siswa" value="<?= $edit['nm_siswa']; ?>" id="nm_siswa" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="id_kelas">Kelas</label>
                            <select name="id_kelas" class="form-control" required>
                                <option value="">Pilih Kelas</option>
                                <?php
                                $kelas_query = mysqli_query($koneksi, "SELECT * FROM kelas");
                                while ($k = mysqli_fetch_array($kelas_query)) {
                                    $selected = ($k['id_kelas'] == $edit['id_kelas']) ? 'selected' : '';
                                    echo '<option value="' . $k['id_kelas'] . '" ' . $selected . '>' . $k['nm_kelas'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="tambah" value="Update">
                            <a href="index.php?page=siswa" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
