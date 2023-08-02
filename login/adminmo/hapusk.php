<?php 
// koneksi database
include 'koneksi.php';

// update data ke database
mysqli_query($koneksi,"DELETE FROM karyawan WHERE id_karyawan='$_GET[id]'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('Data Berhasil dihapus')</script>";
echo "<script type='text/javascript'>document.location='data_karyawan.php';</script>";
?>