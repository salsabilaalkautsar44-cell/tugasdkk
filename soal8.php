<form method="POST" action="">
    Nama Lengkap: <input type="text" name="nama">
    <input type="submit" name="submit" value="Kirim">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    if (empty($nama)) {
        echo "<p style='color:red;'>Salsabila Alkautsar</p>";
    } else {
        echo "<p style='color:green;'>Halo, " . htmlspecialchars($nama) . ". Pendaftaran berhasil!</p>";
    }
}
?>