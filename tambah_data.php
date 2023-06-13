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
    <?php
        error_reporting(1);
        echo $_GET['pesan'];
    ?>
    <h1>FORM TAMBAH DATA</h1>
    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
                <label for="kode">Kode Barang</label>
                <input type="text" name= "kode" id="kode">
                <br>
                <label for="">Nama Barang</label>
                <input type="text" name= "nama" id="">
                <br>
                <label for="">Harga Barang</label>
                <input type="text" name= "harga" id="">
                <br>
                <label for="">Stok</label>
                <input type="text" name= "stok" id="">
                <br>
                <label for="">Gambar</label>
                <input type="file" name= "gambar" id="">
                <br>
                <input type="submit" value="simpan"> 
    </form>
</body>
</html>
