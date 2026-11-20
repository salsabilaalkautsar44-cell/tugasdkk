<?php
$dataSiswa = [
    ["nama" => "Bila", "nilai" => 85],
    ["nama" => "Revan", "nilai" => 90],
    ["nama" => "Zeyna", "nilai" => 78],
    ["nama" => "Aley", "nilai" => 92],
    ["nama" => "Ayra", "nilai" => 88]
];

$totalNilai = 0;
$tertinggi = $dataSiswa[0]['nilai'];
$terendah = $dataSiswa[0]['nilai'];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>No</th><th>Nama Siswa</th><th>Nilai</th></tr>";

$no = 1;
foreach ($dataSiswa as $siswa) {
    echo "<tr><td>$no</td><td>{$siswa['nama']}</td><td>{$siswa['nilai']}</td></tr>";
    
    $totalNilai += $siswa['nilai'];
    if ($siswa['nilai'] > $tertinggi) { $tertinggi = $siswa['nilai']; }
    if ($siswa['nilai'] < $terendah) { $terendah = $siswa['nilai']; }
    
    $no++;
}
echo "</table>";

$rataRata = $totalNilai / count($dataSiswa);
echo "<br><b>Rata-rata Nilai:</b> $rataRata";
echo "<br><b>Nilai Tertinggi:</b> $tertinggi";
echo "<br><b>Nilai Terendah:</b> $terendah";
?>