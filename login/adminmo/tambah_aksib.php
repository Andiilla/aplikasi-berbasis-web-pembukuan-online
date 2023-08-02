<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$keuntungan = $_POST['keuntungan'];
$stok_barang = $_POST['stok_barang'];
// menginput data ke database
mysqli_query($koneksi," INSERT INTO barang VALUES ('$kode_barang','$nama_barang','$harga_beli','$harga_jual','$keuntungan','$stok_barang')");
echo "<script>alert('Data Berhasil ditambahkan')</script>";
echo "<script type='text/javascript'>document.location='data_barang.php';</script>";

// mengalihkan halaman kembali ke index.php

?>