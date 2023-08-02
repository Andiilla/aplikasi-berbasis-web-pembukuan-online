	<a href="data_barang.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data Barang</h3>
<?php 
include "koneksi.php";
	$data = mysqli_query($koneksi,"SELECT * FROM barang WHERE kode_barang='$_GET[id]'");
while($d=mysqli_fetch_array($data)){
?>
<form role="form" method="post" action="updateb.php">
          <div class="box-body">
            <div class="form-group">
              <label>Kode Barang</label>
              <input type="number" name="kode_barang" value="<?php echo $d['kode_barang'];?>" class="form-control" placeholder="Masukkan Kode Baru" required>
            </div>
            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" name="nama_baranga" value="<?php echo $d['nama_barang'];?>" class="form-control" placeholder="Masukkan Barang" required>
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