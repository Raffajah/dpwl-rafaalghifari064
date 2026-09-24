<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Daftar Mahasiswa </h2>
    <?php
    $i = 1;

    foreach($data as $mhs) {
        echo $i++ . '. ' . $mhs['nama'] . ' ' . $mhs['nim'] . '</br>';
    }
    ?>
</body>
</html>