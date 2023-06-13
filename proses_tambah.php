<?php 
    include '../pertemuan9/koneksi.php';


    $kode = htmlspecialchars($_POST['kode']);
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);
    $stok = htmlspecialchars($_POST['stok']);

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size']; 
    $extAllow = ['jpg', 'jpeg', 'png', 'gif'];
    $validExt = (explode(".", $namaFile));
    $extValid = strtolower(end($validExt));
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek kondisi ukuran file 
    if ($ukuranFile <= 2000000){
        if (in_array($extValid, $extAllow)){
            echo 'extension ada';
        }
    }else{
        echo "Salah";
    }
    die();



    $sql = "SELECT * FROM barang WHERE kode_barang='$kode'";
    $query = mysqli_query($koneksi, $sql);
    $baris = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);
    if ($row > 0) {
        header("Location:tambah_data.php?pesan=Kode $baris[kode_barang] sudah ada");
    }else{
        $sql_insert = "INSERT INTO barang VALUES('$kode', '$nama','$harga', '$stok')";
        $query_insert = mysqli_query($koneksi,$sql_insert);

            if ($query_insert){
                
                header('location:tampil_data.php?pesan=tambah'); // direct ke tampil data
            }else{
                echo "Data gagal disimpan";
                header('location:tambah_data.php'); 
            }
    }