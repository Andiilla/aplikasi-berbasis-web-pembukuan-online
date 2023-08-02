<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kode = $_POST['kode_barang'];
$nama = $_POST['nama_barang'];
$beli = $_POST['harga_beli'];
$jual = $_POST['harga_jual'];
$stok = $_POST['stok_barang'];
// menginput data ke database
mysqli_query($koneksi,"insert into barang values('','$kode','$nama','$beli','$jual','$stok')");
echo "<script>alert('Data Berhasil ditambahkan')</script>";
echo "<script type='text/javascript'>document.location='data_barang.php';</script>";

// mengalihkan halaman kembali ke index.php
header("location:data_barang.php");

?>