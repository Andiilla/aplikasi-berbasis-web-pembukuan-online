<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$idk = $_POST['id_karyawan'];
$nmk = $_POST['nama_karyawan'];
$stt = $_POST['status'];
$jbt = $_POST['jabatan'];
$uph = $_POST['upah'];

// update data ke database
mysqli_query($koneksi,"update barang set idk='$idk', nmk='$nmk', stt='$stt', jbt='$jbt', uph='$uph' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:data_karyawan.php");

?>