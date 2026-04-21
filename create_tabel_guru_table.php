<?php
require_once("config/koneksi.php");

$sql = "CREATE TABLE IF NOT EXISTS tabel_guru (
  kd_guru VARCHAR(10) NOT NULL PRIMARY KEY,
  nm_guru VARCHAR(100) NOT NULL,
  jenkel VARCHAR(20),
  pend_terakhir VARCHAR(50),
  hp VARCHAR(20),
  alamat TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if (mysqli_query($koneksi, $sql)) {
    echo "Table 'tabel_guru' created or already exists successfully.\n";
} else {
    echo "Error: " . mysqli_error($koneksi) . "\n";
}

echo "Run: php create_tabel_guru_table.php in Laragon terminal.";
?>

