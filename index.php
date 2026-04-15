<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $laporan = $_POST['laporan'];

    echo "<div style='color:green;'> <b> sukses </b> Laporan dari  <b>$nama</b> telah diterima;<i>$laporan</i></div>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="judul">
        Laporan pengaduan
    </h1>

<form action="" method="post"  class="form-laporan">
    <label for="nama">Nama Anda</label><br>
    <input type="text" name="nama" placeholder="Masukkan nama Anda" id="nama"><br><br>


    <label for="laporan">Isi Laporan</label><br>
    <textarea name="laporan" id="laporan"  placeholder="Masukkan laporan Anda" ></textarea><br><br>


    <button type="submit" class="btn-primary">Kirim Laporan</button>

</form>
</body>
</html>