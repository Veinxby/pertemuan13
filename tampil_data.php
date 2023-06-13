<?php
        include '../pertemuan9/koneksi.php';

        session_start();
        if($_SESSION['status'] != 'login'){
            header("Location:tampil_data.php");
        }

        if (isset($_POST['cari'])) {
            $keyword = $_POST['keyword'];
            $sql = "SELECT * FROM barang WHERE kode_barang = '$keyword' OR nama_barang like '%$keyword%'";
        }else {
            $sql = "SELECT * FROM barang";
        }
        $query = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_all($query, MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabel Data Barang</h1>
    <?php 
        if (isset($_GET['pesan'])) {
            $pesan = $_GET['pesan'];
            if ($pesan == 'tambah') {
                echo "Data berhasil ditambah";
            }elseif ($pesan == 'update') {
                echo "Data berhasil diupdate";
            }elseif ($pesan == 'hapus') {
                echo "Data berhasil dihapus";
            }elseif ($pesan == 'Login berhasil'){
                echo "Login berhasil";
            }else {
                echo "Data gagal";
            }
        }
    ?>

    <form action="" method="post">
        <label for="cari">Cari</label>
        <input type="text" name="keyword" id="cari" autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
<a href="tambah_data.php">::Tambah Data::</a>
    <table border="1">
        <tr>
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Harga</td>
            <td>Stok</td>
            <td>Aksi</td>
        </tr>
        <?php
        foreach ($row as $baris) { ?>
        <tr>
            <td><?= $baris ['kode_barang'] ?></td>
            <td><?= $baris ['nama_barang'] ?></td>
            <td><?= $baris ['harga_barang'] ?></td>
            <td><?= $baris ['stok_barang'] ?></td>
            <td>
                <a href="edit.php?kode=<?= $baris['kode_barang'] ?>">Edit</a>
                <a href="hapus.php?kode=<?= $baris['kode_barang'] ?>" onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <a href="logout.php">logout</a>
</body>
</html>