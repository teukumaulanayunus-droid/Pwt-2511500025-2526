<?php
require_once("config/koneksi.php");

$nm_kelas = "Test Kelas " . rand(1,100);
echo "Testing INSERT nm_kelas='$nm_kelas'\n";
$sql = "INSERT INTO kelas (nm_kelas) VALUES ('$nm_kelas')";
if (mysqli_query($koneksi, $sql)) {
    $insert_id = mysqli_insert_id($koneksi);
    echo "Success: Inserted with id_kelas = $insert_id\n";
} else {
    echo "Error: " . mysqli_error($koneksi) . "\n";
}
?>
