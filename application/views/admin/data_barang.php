<br>
<div  class="container-fluid">
  <h1 class="mb-3 text-black">Inventory</h1>
  <hr>
  <br>

  <div class="row">

    <button class="btn btn-sm btn-primary mb-3 ml-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Add</button>
    <div class="col-md">
      <form method="post" action="<?php echo base_url('index.php/admin/data_barang') ?>">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." autofocus autocomplete="off" name="keyword">
        <div class="input-group-append">
          <input class="btn btn-primary" type="submit" name="submit">
        </div>
      </div>
      </form>
    </div>

  </div>
<p align="right" class="text-black">Result(s): <?= $total_rows; ?></p>
	<table class="table table-hover table-striped table-bordered">
		<tr class="text-black">
			<th>No.</th>
			<th>Title</th>
			<th>Category</th>
			<th>Price</th>
			<th>Stock</th>
      <th>Sinopsis</th>
			<th colspan="3">Action</th>
		</tr>

    <?php if (empty($barang)) : ?>
      <tr>
        <td colspan="7"> 
          <div class="alert alert-danger" role="alert">
            <center>Data not found!</center>
          </div>
        </td>
      </tr>
    <?php endif; ?>

    <?php 
    foreach ($barang as $brg) : ?>  

			<tr class="text-black">
				<td><?= ++$start; ?></td>
				<td><?php echo $brg->nama_brg ?></td>
				<td><?php echo $brg->kategori ?></td>
				<td>Rp <?php echo number_format($brg->harga)  ?></td>
				<td><?php echo $brg->stok ?></td>
        <td><?php echo $brg->keterangan ?></td>
				<td align="center"><?php echo anchor('admin/data_barang/detail/' .$brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
				<td align="center"><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td align="center"><?php echo anchor('admin/data_barang/delete/' .$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>

		<?php endforeach; ?>	

	</table>

  <?php echo $this->pagination->create_links(); ?>

</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'index.php/admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Title</label>
        		<input type="text" name="nama_brg" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Category</label>
        		  <select class="form-control" name="kategori">
                <option>Biografi</option>  
                <option>Fiksi</option>  
                <option>Non Fiksi</option>
                <option>Romance</option>  
                <option>Horror</option>  
                <option>Thriller</option>  
              </select>
        	</div>

        	<div class="form-group">
        		<label>Price</label>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Stock</label>
        		<input type="text" name="stok" class="form-control">
        	</div>

          <div class="form-group">
            <label>Sinopsis</label>
            <input type="text" name="keterangan" class="form-control">
          </div>

        	<div class="form-group">
        		<label>Picture</label><br>
        		<input type="file" name="gambar" class="form-control">
        	</div>
        	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

       </form>

    </div>
  </div>
</div>