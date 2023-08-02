<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kegiatan = $_POST['kegiatan'];
$tanggal = $_POST['tanggal'];
$nominal = $_POST['nominal'];

// menginput data ke database
mysqli_query($koneksi," INSERT INTO transaksi VALUES('$kegiatan','$tanggal','$nominal')");

echo "<script>alert('Data Berhasil ditambahkan')</script>";
echo "<script type='text/javascript'>document.location='transaksi.php';</script>";

?>
