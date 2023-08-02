<?php 
// koneksi database
include 'koneksi.php';

// update data ke database
mysqli_query($koneksi,"DELETE FROM transaksi WHERE kegiatan='$_GET[id]'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('Data Berhasil dihapus')</script>";
echo "<script type='text/javascript'>document.location='transaksi.php';</script>";
?>