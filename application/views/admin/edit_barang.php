<div class="container-fluid"><br>
        <h2><i class="fas fa-edit"></i>Edit Item</h2>
        <hr>
        <br>

        <?php foreach ($barang as $brg) : ?>

                <form method="post" action="<?php echo base_url('index.php/admin/data_barang/update') ?>">
                        <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
                        </div>

                        <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
                        </div>

                        <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
                        </div>

                        <div class="form-group">
                                <label>Stock</label>
                                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
                        </div>

                         <div class="form-group">
                                <label>Synopsis</label>
                                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
                        </div>

                        <button type="submit" class="btn btn-primary btn-md mt-3">Save</button>
                </form>
        <?php endforeach; ?>    
</div>