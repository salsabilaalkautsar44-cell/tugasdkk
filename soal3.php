<?php
$nilai = 82;

echo "Nilai Anda: $nilai <br>";
if ($nilai >= 85) {
    echo "Predikat: A";
} elseif ($nilai >= 75) {
    echo "Predikat: B";
} elseif ($nilai >= 65) {
    echo "Predikat: C";
} elseif ($nilai >= 50) {
    echo "Predikat: D";
} else {
    echo "Predikat: E (Remedial)";
}
?>