<hr class="bg-white">
<div class="container-fluid mt-3">
	<h2 class="text-black"><i class="fas fa-shopping-cart"></i>&nbsp;Your Cart</h2>
	<hr>
	<br>

	<table class="table table-hover table-striped table-bordered">
		<tr>
			<th>No</th>
			<th>Item Name</th>
			<th>Items</th>
			<th>Price</th>
			<th>Total</th>
		</tr>

		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $items['name'] ?></td>
				<td><?php echo $items['qty'] ?></td>
				<td>Rp <?php echo number_format($items['price'])  ?></td>
				<td align="right">Rp <?php echo number_format($items['subtotal']) ?></td>
			</tr>			

		<?php endforeach; ?>

			<tr>
				<td colspan="4">Grand Total</td>
				<td align="right">Rp <?php echo number_format($this->cart->total() ); ?></td>
			</tr>
		
	</table>

	<div align="right">		
		<a href="<?php echo base_url('index.php/dashboard/delete_cargo') ?>"><div class="btn btn-md btn-danger "><i class="fas fa-trash"></i>&nbsp;Clear Cart</div></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
		<a href="<?php echo base_url('index.php/dashboard/payment') ?>"><div class="btn btn-md btn-success "><i class="fas fa-file-invoice-dollar"></i>&nbsp;Payment</div></a>
	</div>
	<br>

	<div align="left">
		<a href="<?php echo base_url('index.php/Welcome') ?>"><div class="btn btn-md btn-dark " align="left"><i class="fas fa-home"></i>&nbsp;Back</div></a>
	</div>	

</div>