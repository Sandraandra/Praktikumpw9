<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    <div class="info-box">
        <h1>About Me</h1>
        <?php
            $nama = "Sandra";
            $nim = "0110123300";
            $program_studi = "Sistem Informasi";
            $tahun_angkatan = 2023;
        ?>
        <p>Nama: <?php echo $nama; ?></p>
        <p>NIM: <?php echo $nim; ?></p>
        <p>Program Studi: <?php echo $program_studi; ?></p>
        <p>Tahun Angkatan: <?php echo $tahun_angkatan; ?></p>
    </div>
</body>
</html>