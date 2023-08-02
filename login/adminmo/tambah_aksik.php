<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$status = $_POST['status'];
$jabatan = $_POST['jabatan'];
$upah = $_POST['upah'];

// menginput data ke database
mysqli_query($koneksi," INSERT INTO karyawan VALUES ('$id_karyawan','$nama_karyawan','$status','$jabatan','$upah')");
echo "<script>alert('Data Berhasil ditambahkan')</script>";
echo "<script type='text/javascript'>document.location='data_karyawan.php';</script>";

?>