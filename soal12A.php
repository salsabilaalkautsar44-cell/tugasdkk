<h2>Form REGISTRASI</h2>
<form method="POST" action="">
    Nama : <br>
    <input type="text" name="nama" required><br><br>

    Username / Email : <br>
    <input type="text" name="username" required><br><br>

    Password : <br>
    <input type="password" name="password" required><br><br>

    Konfirmasi Password : <br>
    <input type="password" name="konfirmasi" required><br><br>

    <input type="submit" name="daftar" value="DAFTAR">
    <input type="reset" value="BATAL">
</form>

<?php
if (isset($_POST['daftar'])) {
    echo "<hr>";
    echo "Nama : " . $_POST['nama'] . "<br>";
    echo "Username/Email : " . $_POST['username'] . "<br>";
    echo "Berhasil Daftar!";
}
?>