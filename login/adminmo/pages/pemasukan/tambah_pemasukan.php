<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH PEMASUKAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH PEMASUKAN</li>
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
            <form role="form" method="post" action="pages/pemasukan/tambah_pemasukan_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Pendapatan</label>
                  <input type="text" name="pendapatan" class="form-control" placeholder="Pendapatan Hari Ini" required>
                </div>
                <div class="form-group">
                 <label>Tanggal</label>
                  <input type="text" name="tanggal" class="form-control" placeholder="Tanggal Hari Ini" required>
                </div>
	            <div class="form-group">
                 <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" required>
                </div>
   
                  </select>
                </div>
				<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>	