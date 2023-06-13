<?php
include '../pertemuan9/koneksi.php';

if(!isset($_GET['kode'])) {
    header('location:tampil_data.php');
}
    
$kode = $_GET['kode'];

$sql = "SELECT * FROM barang WHERE kode_barang = '$kode'";
$query = mysqli_query($koneksi, $sql);
$baris = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>FORM EDIT DATA</h1>
    <form action="update.php" method="post">
                <label for="kode">Kode Barang</label>
                <input type="text" name= "kode" id="kode" value="<?= $baris['kode_barang']?>">
                <br>
                <label for="">Nama Barang</label>
                <input type="text" name= "nama" id="" value="<?= $baris['nama_barang']?>">
                <br>
                <label for="">Harga Barang</label>
                <input type="text" name= "harga" id="" value="<?= $baris['harga_barang']?>">
                <br>
                <label for="">Stok</label>
                <input type="text" name= "stok" id="" value="<?= $baris['stok_barang']?>">
                <br>
                <input type="submit" value="edit"> 
    </form>
</body>
</html>
