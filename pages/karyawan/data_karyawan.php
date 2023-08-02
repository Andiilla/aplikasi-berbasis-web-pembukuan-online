<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA KARYAWAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA KARYAWAN</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_karyawan" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="karyawan" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>ID Karyawan</th>
                  <th>Nama</th>
				  <th>Status</th>
                  <th>Jabatan</th>
                  <th>Upah</th>
				  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
				include 'koneksi.php';
				$no = 0;
				$data = mysqli_query($koneksi,"select * from karyawan");
				while($d = mysqli_fetch_array($data))
				{
				?>

                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $d['id_karyawan'];?></td>
                  <td><?php echo $d['nama_karyawan'];?></td>
                  <td><?php echo $d['status'];?></td>
				 <td><?php echo $d['jabatan'];?></td>
				  <td><?php echo $d['upah'];?></td>
                  <td>
					<a href="tambah_aksi.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#karyawan').DataTable();
  });
</script>