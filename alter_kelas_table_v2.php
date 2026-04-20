<?php
require_once("config/koneksi.php");

echo "Running ALTER TABLE to add AUTO_INCREMENT...\n";
$sql = "ALTER TABLE kelas MODIFY COLUMN id_kelas int NOT NULL AUTO_INCREMENT";
if (mysqli_query($koneksi, $sql)) {
    echo "Success: AUTO_INCREMENT added to id_kelas.\n";
} else {
    echo "Error: " . mysqli_error($koneksi) . "\n";
}
?>
