<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAHKAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH</li>
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
            <form role="form" method="post" action="pages/jurnal/tambah_jurnal_proses.php">
              <div class="box-body">
                <div class="form-group">
                 <label>Tanggal</label>
                  <input type="text" name="tanggal" class="form-control" placeholder="Tanggal Hari Ini" required>
                </div>
				<div class="form-group">
                 <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" required>
                </div>
                <div class="form-group">
                  <label>Debit</label>
                  <input type="text" name="debit" class="form-control" placeholder="Debit" required>
                </div>
				<div class="form-group">
                  <label>Kredit</label>
                  <input type="text" name="kredit" class="form-control" placeholder="Kredit" required>
                </div>
                  </select>
                </div>
				<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>	