<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Pembukuan Kas Usaha</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- jQuery 2.2.3 -->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>O</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pembukuan</b>Online</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Kelompok 1</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Kelompok 1 - Web Developer
                  <small>Member since 2021</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Kelompok 1</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
      <li class="header">MENU</li>
      <li class="treeview">
        <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> <span>Beranda</span></a></li>
		<li><a href="data_barang.php"><i class="glyphicon glyphicon-tasks"></i> <span>Barang</span></a></li>
		<li><a href="data_karyawan.php"><i class="glyphicon glyphicon-user"></i> <span>Karyawan</span></a></li>
		<li><a href="data_pemasukan.php"><i class="glyphicon glyphicon-save"></i> <span>Pemasukan Harian</span></a></li>
		<li><a href="transaksi.php"><i class="glyphicon glyphicon-credit-card"></i> <span>Transaksi</span></a></li>
		<li><a href="jurnal.php"><i class="glyphicon glyphicon-book"></i> <span>Jurnal</span></a></li>
		<li><a href="calendar.php"><i class="glyphicon glyphicon-calendar"></i> <span>Kalendar</span></a></li>

	  </li>
      <li class="header">SETTING</li>
        <li class="treeview">
          <li><a href="#"><i class="glyphicon glyphicon-cog"></i> <span>Pengaturan</span></a></li>
          <li><a href="pages/logout_process.php"><i class="glyphicon glyphicon-lock"></i> <span>Logout</span></a></li>
        </li>
      </ul>
	  
    </section>
    <!-- /.sidebar -->
  </aside>
  
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<a href="data_barang.php">Kembali</a>
	<h3>Edit Data Barang</h3>
<?php 
include "koneksi.php";
	$edit = mysqli_query($koneksi,"SELECT * FROM barang WHERE kode_barang='$_GET[id]'");
while($d=mysqli_fetch_array($edit)){
?>
<form role="form" method="post" action="updateb.php">
          <div class="box-body">
            <div class="form-group">
              <label>Kode Barang</label>
              <input type="number" name="kode_barang" value="<?php echo $d['kode_barang'];?>" class="form-control" placeholder="Masukkan Kode Baru" required>
            </div>
            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" name="nama_barang" value="<?php echo $d['nama_barang'];?>" class="form-control" placeholder="Masukkan Barang" required>
            </div>
            <div class="form-group">
              <label>Harga Beli</label>
              <input type="number" name="harga_beli" value="<?php echo $d['harga_beli'];?>" class="form-control" placeholder="Masukkan Harga Beli" required>
            </div>
            <div class="form-group">
              <label>Harga Jual</label>
              <input type="number" name="harga_jual" value="<?php echo $d['harga_jual'];?>" class="form-control" placeholder="Masukkan Harga Jual" required>
            </div>
			<div class="form-group">
              <label>Keuntungan</label>
              <input type="number" name="keuntungan" value="<?php echo $d['keuntungan'];?>" class="form-control" placeholder="Masukkan Keuntungan" required>
            </div>
            <div class="form-group">
              <label>Stok Barang</label>
              <input type="number" name="stok_barang" value="<?php echo $d['stok_barang'];?>" class="form-control" placeholder="Stok Barang yang Tersedia" required>
            </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload"></span> Simpan</button>
          </div>
        </form>
<?php 
} 
?>
</div>

</body>
</html>