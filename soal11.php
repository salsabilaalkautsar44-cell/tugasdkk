<?php
$hasil = "";
if (isset($_POST['hitung'])) {
    $luas = $_POST['luas'];

    // Rumus: r = sqrt(Luas / pi)
    $r = sqrt($luas / M_PI);
    $hasil = "Luas = $luas <br> Jari-jari = " . round($r, 2);
}
?>

<h2>Hitung Jari-jari Lingkaran</h2>
<form method="POST">
    Masukkan Luas Lingkaran : 
    <input type="number" step="any" name="luas" required>
    <br><br>
    <input type="submit" name="hitung" value="HITUNG">
</form>

<hr>
<?php echo $hasil; ?>
