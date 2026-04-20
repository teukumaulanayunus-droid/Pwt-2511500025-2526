<?php
require_once("config/koneksi.php");

echo "Running ALTER TABLE...\n";
$sql = "ALTER TABLE kelas MODIFY COLUMN id_kelas int NOT NULL AUTO_INCREMENT PRIMARY KEY";
if (mysqli_query($koneksi, $sql)) {
    echo "Success: Table altered. id_kelas now AUTO_INCREMENT.\n";
} else {
    echo "Error: " . mysqli_error($koneksi) . "\n";
}
?>
