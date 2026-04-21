<?php
require_once("config/koneksi.php");

$sql = "CREATE TABLE IF NOT EXISTS siswa (
  kd_siswa VARCHAR(10) NOT NULL PRIMARY KEY,
  nm_siswa VARCHAR(100) NOT NULL,
  id_kelas INT,
  FOREIGN KEY (id_kelas) REFERENCES kelas(id_kelas)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if (mysqli_query($koneksi, $sql)) {
    echo "Table 'siswa' created successfully.\n";
} else {
    echo "Error: " . mysqli_error($koneksi) . "\n";
}
?>

