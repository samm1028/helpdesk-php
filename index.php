<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $laporan = $_POST['laporan'];

    $query = "INSERT INTO pengaduan (nama, laporan) VALUES ('$nama', '$laporan')";

    

    if (mysqli_query($conn, $query)) {
        echo "<div style='color:green;'> <b> sukses </b> Laporan dari  Laporan telah berhasil di simpan ke database </div><hr>";
    } else {
        echo "Error: ".mysqli_error($conn);
    }

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
<div class="container-form">
<form action="" method="post"  class="form-laporan">
    <label for="nama" class="form-nama">Nama Anda</label><br>
    <input type="text" name="nama" class="form-input" placeholder="Masukkan nama Anda" id="nama"><br><br>


    <label for="laporan" class="form-laporan">Isi Laporan</label><br>
    <textarea name="laporan" id="laporan" class="form-textarea" placeholder="Masukkan laporan Anda" ></textarea><br><br>


    <center><button type="submit"  class="form-button">Kirim Laporan</button></center>

</form>

</div> 
</body>
</html>