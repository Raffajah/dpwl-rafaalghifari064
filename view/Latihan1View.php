<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
<style>
    body {
        font-family: "Times New Roman", Times, serif;
        margin: 30px;
    }
    h2 {
        margin-bottom: 20px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        border: 2px solid #777;
        font-size: 22px;
    }
    th, td {
        border: 2px solid #999;
        padding: 5px 7px;
        height: 32px;
    }
    th {
        font-weight: bold;
        text-align: left;
        white-space: nowrap;
    }
    td:first-child {
        width: 55px;
        text-align: left;
    }
    td:nth-child(2) {
        width: 125px;
    }
    td:nth-child(3) {
        width: 330px;
    }
    td:nth-child(4) {
        width: 390px;
    }
    td:nth-child(5) {
        width: 180px;
    }
</style>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
<?php
$i = 1;
?>
<table>
    <tr>
        <th>NO.</th>
        <th>NIM</th>
        <th>NAMA MAHASISWA</th>
        <th>ALAMAT</th>
        <th>NO.TELP</th>
    </tr>
    <?php foreach($data as $mhs) { ?>
    <tr>
        <td><?= $i++; ?>.</td>
        <td><?= $mhs['nim']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['alamat']; ?></td>
        <td><?= $mhs['no_hp']; ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
