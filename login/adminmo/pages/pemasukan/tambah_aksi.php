<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tgl = $_POST['tanggal'];
$nml = $_POST['nominal'];
$ket = $_POST['keterangan'];
// menginput data ke database
mysqli_query($koneksi,"insert into karyawan values('','$tgl','$nml','$ket')");
echo "<script>alert('Data Berhasil ditambahkan')</script>";
echo "<script type='text/javascript'>document.location='data_pemasukan.php';</script>";

// mengalihkan halaman kembali ke index.php
header("location:data_pemasukan.php");

?>