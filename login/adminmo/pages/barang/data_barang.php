<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA BARANG
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA BARANG</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_barang" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="barang" class="table table-bordered table-hover">
                <thead>
                <tr>
                 <th>NO</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
					<th>Keuntungan</th>
					<th>Stok Barang</th>
					<th>Action</th>
                </tr>
                </thead>
                <tbody>


				<?php 
				include 'koneksi.php';
				$no = 0;
				$data = mysqli_query($koneksi,"select * from barang");
				while($d = mysqli_fetch_array($data))
				{
				?>

                <tr>
				  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $d['kode_barang'];?></td>
                  <td><?php echo $d['nama_barang'];?></td>
				  <td><?php echo $d['harga_beli'];?></td>
				  <td><?php echo $d['harga_jual'];?></td>
				  <td><?php echo $d['keuntungan'];?></td>
				  <td><?php echo $d['stok_barang'];?></td>
                  <td>
					<a class="btn btn-block btn-primary" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
					<a class="btn btn-block btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
				  </td>
                </tr>
                <?php 
				} 
				?>

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
    $('#barang').DataTable();
  });
</script>
