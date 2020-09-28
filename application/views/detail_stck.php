<hr class="bg-black">
<div class="container-fluid">
    
       <div class="card card border-warning">
        <div class="card-header border-warning">
            <h2 class="fas fa-search-plus">&nbsp; &nbsp;Item Detail</h2>
        </div>
        <div class="card-body">

            <?php foreach($barang as $brg): ?>

            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table border-warning">
                        <tr>
                            <td>Title</td>
                            <td><strong><?php echo $brg->nama_brg ?></strong></td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td><strong><?php echo $brg->kategori ?></strong></td>
                        </tr>
                        <tr>
                               <?php if ($brg->stok >= 10)
         {
            echo '<td>Stok</td>
            <td><strong><span class="badge badge-primary">'.$brg->stok.'</span></strong></td>';
         } elseif ($brg->stok < 10 && $brg->stok > 0) {
            echo '<td>Stok</td>
            <td><strong><span class="badge badge-warning">'.$brg->stok.'</span></strong></td>';
         } else {
            echo '<td>Stok</td>
            <td><span class="badge badge-danger">Stock Habis</span></strong></td>';
         }
         ?>
                        </tr>
                        <tr>
                            <td>Synopsis</td>
                            <td><strong><?php echo $brg->keterangan ?></strong></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td><strong><span>Rp. <?php echo number_format($brg->harga,0,',','.') ?></span></strong></td>
                        </tr>
    					
    				</table>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <center>
    				<?php echo anchor('Welcome', '<div class="btn btn-md btn-dark"><i class="fa fa-home"></i>&nbsp;Back</div>') ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    				<?php echo anchor('dashboard/add_to_cargo/' .$brg->id_brg, '<div class="btn btn-md btn-success"><i class="fa fa-shopping-cart"></i>&nbsp;Add to Cart</div>') ?>
                </center>

    			</div>
    		</div>

    	<?php endforeach; ?>

  		</div>
	</div>	

</div>