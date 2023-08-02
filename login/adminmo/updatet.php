<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kegiatan = $_POST['kegiatan'];
$tanggal = $_POST['tanggal'];
$nominal = $_POST['nominal'];

// update data ke database
mysqli_query($koneksi,"update transaksi set tanggal='$tanggal', nominal='$nominal' where kegiatan='$kegiatan'");

echo"<script>alert('Data Berhasil Diedit')</script>";
echo"<script type='text/javascript'> document.location ='transaksi.php';</script>";
?>