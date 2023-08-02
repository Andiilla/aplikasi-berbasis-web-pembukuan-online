<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH BARANG
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH BARANG</li>
		<form method="post" action="tambah_aksi.php">
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="tambah_aksi.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Kode Barang</label>
                  <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" required>
                </div>
                <div class="form-group">
                 <label>Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control" placeholder="Nama Produk" required>
                </div>
				<div class="form-group">
                 <label>Harga Beli</label>
                  <input type="text" name="harga_beli" class="form-control" placeholder="Harga Beli" required>
                </div>
				<label>Harga Jual</label>
                  <input type="text" name="harga_jual" class="form-control" placeholder="Harga Jual" required>
                </div>
				<label>Stok Barang</label>
                  <input type="text" name="stok_barang" class="form-control" placeholder="Stok Tersisa" required>
                </div>
				</div>
                  </select>
                </div>
				
				<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>	