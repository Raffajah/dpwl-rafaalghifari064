
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 20px;
            font-family: "Times New Roman", Times, serif;
            color: white;
            min-height: 100vh;
            background: #06101f;
        }

        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(3, 15, 35, 0.55);
            z-index: -1;
        }

        h2 {
            margin: 0 0 15px 0;
            font-size: 22px;
            color: #66b3ff;
            text-shadow: 0 0 8px #0066ff;
        }

        table {
            border-collapse: collapse;
            font-size: 14px;
            background: rgba(5, 20, 40, 0.85);
            box-shadow: 0 0 15px rgba(0, 110, 255, 0.35);
        }

        th,
        td {
            border: 1px solid #2563a6;
            padding: 6px 10px;
        }

        th {
            font-weight: bold;
            text-align: left;
            background: #0b2a50;
            color: #8ecbff;
        }

        tr:hover {
            background: rgba(30, 100, 180, 0.35);
        }
    </style>
</head>

<body>

    <video class="video-bg" autoplay muted loop playsinline>
        <source src="dark.mp4" type="video/mp4">
    </video>

    <div class="overlay"></div>

    <h2>Daftar Mahasiswa</h2>

    <table>
        <tr>
            <th>NO.</th>
            <th>NIM</th>
            <th>NAMA MAHASISWA</th>
            <th>ALAMAT</th>
            <th>NO.TELP</th>
        </tr>

        <?php
        $i = 1;

        foreach ($datamhs as $mhs) {
        ?>
            <tr>
                <td><?= $i++; ?>.</td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['alamat']; ?></td>
                <td><?= $mhs['no_hp']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>