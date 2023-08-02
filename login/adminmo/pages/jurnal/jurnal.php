<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      JURNAL 
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">Jurnal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_jurnal" class="btn btn-primary" role="button" title="Tambah"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="jurnal" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
				  <th>Debit</th>
				  <th>Kredit</th>
				  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
				include 'koneksi.php';
				$data = mysqli_query($koneksi,"select * from jurnal");
				while($d = mysqli_fetch_array($data))
				{
				?>

                <tr>
                  <td><?php echo $d['tanggal'];?></td>
				  <td><?php echo $d['keterangan'];?></td>
				  <td><?php echo $d['debit'];?></td>
				  <td><?php echo $d['kredit'];?></td>
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
    $('#jurnal').DataTable();
  });
</script>