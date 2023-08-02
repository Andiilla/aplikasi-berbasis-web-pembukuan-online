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

// update data ke database
mysqli_query($koneksi,"UPDATE barang set kode_barang='$kode_barang', nama_barang='$nama_barang', harga_beli='$harga_beli', harga_jual='$harga_jual',keuntungan='$keuntungan', stok_barang='$stok_barang' where id='$id'");

?>