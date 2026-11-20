<h2>Konversi Suhu</h2>

<form method="post">
  Masukkan Suhu Celcius :
  <input type="number" name="celcius" required>
  <button type="submit">Konversi</button>
</form>
<br>

<?php
if (isset($_POST['celcius'])) {
  $celcius = $_POST['celcius'];

  $reamur = 4/5 * $celcius;
  $fahrenheit = 9/5 * $celcius + 32;
  $kelvin = $celcius + 273;

  echo "Suhu Celcius : $celcius C <br>";
  echo "Suhu Reamur : $reamur R <br>";
  echo "Suhu Fahrenheit : $fahrenheit F <br>";
  echo "Suhu Kelvin : $kelvin K <br>";
}
?>