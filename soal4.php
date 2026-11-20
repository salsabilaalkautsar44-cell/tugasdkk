<?php
for ($i = 1; $i <= 20; $i++) {
    $keterangan = ($i % 2 == 0) ? "Genap" : "Ganjil";
    echo "Angka $i adalah $keterangan<br>";
}
?>