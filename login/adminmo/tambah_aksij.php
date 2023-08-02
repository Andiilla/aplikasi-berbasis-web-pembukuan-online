<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];
$debit = $_POST['debit'];
$kredit = $_POST['kredit'];
// menginput data ke database

mysqli_query($koneksi," INSERT INTO jurnal VALUES('$tanggal','$keterangan','$debit','$kredit')");
echo "<script>alert('Data Berhasil ditambahkan')</script>";
echo "<script type='text/javascript'>document.location='jurnal.php';</script>";
?>