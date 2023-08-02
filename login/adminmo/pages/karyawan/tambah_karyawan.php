<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH KARYAWAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH KARYAWAN</li>
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
            <form role="form" method="post" action="pages/karyawan/tambah_karyawan_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>ID Karyawan</label>
                  <input type="text" name="ID_Karyawan" class="form-control" placeholder="ID" required>
                </div>
                <div class="form-group">
                 <label>Nama Karyawan</label>
                  <input type="text" name="nama_karyawan" class="form-control" placeholder="Nama" required>
                </div>
				<div class="form-group">
                 <label>Status</label>
                  <input type="text" name="status" class="form-control" placeholder="status" required>
                </div>
				<div class="form-group">
                 <label>Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" placeholder="jabatan" required>
                </div>
				<div class="form-group">
                 <label>Upah</label>
                  <input type="text" name="upah" class="form-control" placeholder="upah" required>
                </div>
				<div class="form-group">
                  </select>
                </div>

                  </select>
                </div>
				<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>	