<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tanggal = $_POST['tanggal'];
$nominal = $_POST['nominal'];
$kegiatan = $_POST['kegiatan'];

// update data ke database
mysqli_query($koneksi,"UPDATE pemasukan SET nominal='$nominal', kegiatan='$kegiatan' where tanggal='$tanggal'");

echo"<script>alert('Data Berhasil Diedit')</script>";
echo"<script type='text/javascript'> document.location ='data_pemasukan.php';</script>";
?>