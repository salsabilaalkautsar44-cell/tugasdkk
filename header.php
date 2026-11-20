<?php require_once __DIR__ . '/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Mahasiswa - PHP, MySQL, Bootstrap</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-primary shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">CRUD Mahasiswa</a>
        <span class="navbar-text text-white-50">PHP + MySQL + Bootstrap 5</span>
    </div>
</nav>
<div class="container">
<?php if (isset($_SESSION['pesan'])): ?>
    <div class="alert alert-<?= e($_SESSION['pesan']['tipe']) ?> alert-dismissible fade show"
         role="alert">
        <?= e($_SESSION['pesan']['teks']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php unset($_SESSION['pesan']); ?>
<?php endif; ?>