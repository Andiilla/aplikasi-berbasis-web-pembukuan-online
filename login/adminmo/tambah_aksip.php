<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tanggal = $_POST['tanggal'];
$nominal = $_POST['nominal'];
$kegiatan = $_POST['kegiatan'];
// menginput data ke database
mysqli_query($koneksi," INSERT INTO pemasukan VALUES ('$tanggal','$nominal','$kegiatan')");

echo "<script>alert('Data Berhasil ditambahkan')</script>";
echo "<script type='text/javascript'>document.location='data_pemasukan.php';</script>";
?>