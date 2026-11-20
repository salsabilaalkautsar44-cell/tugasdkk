<h2>Form LOGIN</h2>
<form method="POST" action="">
    Username / Email : <br>
    <input type="text" name="username" required><br><br>

    Password : <br>
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="LOGIN">
    <input type="reset" value="BATAL">
</form>

<?php
if (isset($_POST['login'])) {
    echo "<hr>";
    echo "Login sebagai : " . $_POST['username'];
}
?>