<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kgt = $_POST['kegiatan'];
$tgl = $_POST['tanggal'];
$nml = $_POST['nominal'];
$ket = $_POST['keterangan'];

// update data ke database
mysqli_query($koneksi,"update barang set kgt='$kgt', tgl='$tgl', nml='$nml',ket='$ket' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:transaksi.php");

?>