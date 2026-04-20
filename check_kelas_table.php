<?php
require_once("config/koneksi.php");

echo "DESCRIBE kelas;\n";
$result = mysqli_query($koneksi, "DESCRIBE kelas");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo sprintf("%-15s %-10s %-5s %-10s %-10s %s\n", 
            $row['Field'], 
            $row['Type'], 
            $row['Null'], 
            $row['Key'], 
            $row['Default'], 
            $row['Extra']
        );
    }
} else {
    echo "Error: " . mysqli_error($koneksi) . "\n";
}
?>
