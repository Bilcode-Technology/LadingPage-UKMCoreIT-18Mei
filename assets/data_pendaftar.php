<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Data Pendaftar CORE IT</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background: linear-gradient(135deg,#2563eb,#7c3aed);
    min-height:100vh;
    font-family:'Segoe UI',sans-serif;
    padding:40px 0;
}

.card-custom{
    background:white;
    border:none;
    border-radius:20px;
    box-shadow:0 20px 50px rgba(0,0,0,.2);
    overflow:hidden;
}

.header-custom{
    background:linear-gradient(135deg,#2563eb,#7c3aed);
    color:white;
    padding:20px;
}

.header-custom h2{
    margin:0;
    font-weight:bold;
}

.table thead{
    background:#2563eb;
    color:white;
}

.table tbody tr:hover{
    background:#f5f7ff;
}

.btn-home{
    background:linear-gradient(135deg,#2563eb,#7c3aed);
    border:none;
    color:white;
    padding:10px 20px;
    border-radius:12px;
    font-weight:600;
    text-decoration:none;
}

.btn-home:hover{
    color:white;
    opacity:.9;
}

.badge-core{
    background:#2563eb;
    color:white;
    padding:5px 10px;
    border-radius:20px;
}

</style>

</head>

<body>

<div class="container">

<div class="card-custom">

<div class="header-custom">
    <h2>📋 Data Pendaftar CORE IT</h2>
</div>

<div class="p-4">

<div class="table-responsive">

<table class="table table-bordered align-middle">

<thead>
<tr>
<th width="60">No</th>
<th>NIM</th>
<th>Nama</th>
<th>No Telepon</th>
<th>Jenis Kelamin</th>
<th>Bidang</th>
<th>Tanggal Daftar</th>
</tr>
</thead>

<tbody>

<?php

$no = 1;

$data = mysqli_query($koneksi,"SELECT * FROM pendaftar ORDER BY id DESC");

while($d = mysqli_fetch_assoc($data))
{
?>

<tr>

<td class="text-center"><?= $no++; ?></td>
<td><?= $d['nim']; ?></td>
<td><?= $d['nama']; ?></td>
<td><?= $d['no_telp']; ?></td>
<td><?= $d['jenis_kelamin']; ?></td>

<td>
    <span class="badge-core">
        <?= $d['bidang']; ?>
    </span>
</td>

<td><?= $d['tanggal_daftar']; ?></td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<div class="mt-3">
    <a href="../index.html" class="btn-home">
        ← Kembali ke Beranda
    </a>
</div>

</div>

</div>

</div>

</body>
</html>
