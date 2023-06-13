<?php
include '../pertemuan9/koneksi.php';

if(!isset($_GET['kode'])) {
    header('location:tampil_data.php');
}

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "UPDATE barang SET nama_barang='$nama', harga_barang=$harga, stok_barang='$stok' WHERE kode_barang='$kode'";
$query_insert = mysqli_query($koneksi, $sql);


if ($query_insert){
    header('location:tampil_data.php?pesan=update'); // direct ke tampil data
}else{
    echo "Data gagal diedit";
    header('location:edit.php'); 
}


