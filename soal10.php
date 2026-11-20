<?php
$namaBarang = "Buku Tulis Ekstra";
$hargaSatuan = 6000;
$jumlahBeli = 20; // 20 * 6000 = 120.000 (> 100.000)

$subtotal = $hargaSatuan * $jumlahBeli;
$diskon = 0;

if ($subtotal > 100000) {
    $diskon = 0.10 * $subtotal; // Diskon 10%
}

$totalBayar = $subtotal - $diskon;
?>

<h3>STRUK PEMBAYARAN KASIR</h3>
<pre>
Barang       : <?php echo $namaBarang; ?>
Harga Satuan : Rp <?php echo number_format($hargaSatuan, 0, ',', '.'); ?>
Jumlah Beli  : <?php echo $jumlahBeli; ?> pcs
-----------------------------------
Subtotal     : Rp <?php echo number_format($subtotal, 0, ',', '.'); ?>
Diskon (10%) : Rp <?php echo number_format($diskon, 0, ',', '.'); ?>
-----------------------------------
<b>Total Bayar  : Rp <?php echo number_format($totalBayar, 0, ',', '.'); ?></b>
</pre>