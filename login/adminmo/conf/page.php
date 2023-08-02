<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'data_barang':
    include 'pages/barang/data_barang.php';
    break;
		case 'tambah_barang':
			include 'pages/barang/tambah_barang.php';
			break;
		case 'tambah_aksi':
			include 'pages/barang/tambah_aksi.php';
			break;
  case 'data_karyawan':
	include 'pages/karyawan/data_karyawan.php';
	break;
		case 'tambah_karyawan':
			include 'pages/karyawan/tambah_karyawan.php';
			break;
  case 'data_pemasukan':
	include 'pages/pemasukan/data_pemasukan.php';
	break;
		case 'tambah_pemasukan':
			include 'pages/pemasukan/tambah_pemasukan.php';
			break;
  case 'transaksi':
	include 'pages/transaksi/transaksi.php';
	break;
		case 'tambah_transaksi':
			include 'pages/transaksi/tambah_transaksi.php';
			break;
  case 'jurnal':
	include 'pages/jurnal/jurnal.php';
	break;
		case 'tambah_jurnal':
		include 'pages/jurnal/tambah_jurnal.php';
		break;
  case 'Kalendar':
	include 'pages/calendar.html';
	break;
  }
}else{
    include "pages/beranda.php";
  }
?>