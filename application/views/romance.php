<div class="containerflud border-warning">
      
</div>

<br>

  <div class="row mt-2">
    
<?php foreach ($romance as $brg) : ?>

<div class="card mb-5 border-warning" style="width: 21rem; margin-left: auto; margin-right: auto; ">
  <img class="card-img-top" src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="Card image cap">
  <div class="card-body">
    
    <center><h5 class="card-title text-black" ><?php echo $brg->nama_brg ?></h5></center><hr>
    <span class="card-title text-black" > <?php if ($brg->stok >= 10)
         {
            echo 'Stock:
            <strong><span class="badge badge-primary">'.$brg->stok.'</span></strong>';
         } elseif ($brg->stok < 10 && $brg->stok > 0) {
            echo 'Stock:
            <strong><span class="badge badge-warning">'.$brg->stok.'</span></strong>';
         } else {
            echo 'Stock:
            <span class="badge badge-danger">Stok Habis</span></strong>';
         }
         ?></span><br><br>
   <center> <h4 style="margin-right: 8%;" ><strong>Rp <?php echo number_format($brg->harga) ?></strong></h4></center>
    <hr>
    <center>
    <?php echo anchor('dashboard/detail/' .$brg->id_brg, '<div class="btn btn-sm btn-primary"><i class="fas fa-search-plus"></i>&nbsp;Detail</div>') ?> &nbsp; &nbsp;
    <?php echo anchor('dashboard/add_to_cargo/' .$brg->id_brg, '<div class="btn btn-sm btn-success"><i class="fas fa-shopping-cart"></i>&nbsp;Add to Cart</div>') ?> </center>
  </div>
</div>
<?php endforeach; ?>
  </div>
</div>

