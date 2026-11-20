<?php
function hitungLingkaran($r) {
    $luas = 3.14 * $r * $r;
    $keliling = 2 * 3.14 * $r;
    echo "Jari-jari (r) = $r <br>";
    echo "Luas = $luas <br>";
    echo "Keliling = $keliling <br><hr>";
}

hitungLingkaran(7);
hitungLingkaran(14);
?>