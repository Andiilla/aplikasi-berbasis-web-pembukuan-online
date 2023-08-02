<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tgl = $_POST['tanggal'];
$ket = $_POST['keterangan'];
$dbt = $_POST['debit'];
$krd = $_POST['kredit'];

// update data ke database
mysqli_query($koneksi,"update barang set tgl='$tgl', ket='$ket', dbt='$dbt', krd='$krd' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:jurnal.php");

?>