<hr class="bg-white">
<div class="container-fluid">
	<h4 class="text-white">Order Detail <div class="btn btn-sm btn-down text-white">Invoice No. <?php echo $inv->id ?></div></h4>
	<table class="table table-bordered table-hover table-striped text-black">
		<tr>
			<th>ID</th>
			<th>Item Name</th>
			<th>Items</th>
			<th>Price</th>
			<th>Total</th>
		</tr>

		<?php 
		$total = 0;
		foreach($order as $ord) :
			$subtotal = $ord->jumlah * $ord->price;
			$total += $subtotal;
		 ?>

		 <tr>
		 	<td><?php echo $ord->id_stck ?></td>
		 	<td><?php echo $ord->name_stck ?></td>
		 	<td><?php echo $ord->jumlah ?></td>
		 	<td>Rp <?php echo number_format($ord->price) ?></td>
		 	<td align="right">Rp <?php echo number_format($subtotal) ?></td>

		 </tr>

		<?php endforeach; ?>

		<tr>
			<td colspan="4" align="left">Grand Total</td>
			<td align="right">Rp <?php echo number_format($total) ?></td>

		</tr>
		
	</table>

	<div align="left">
		<a href="<?php echo base_url('index.php/admin/inv/index') ?>"><div class="btn btn-sm btn-warning " align="left">Back</div></a>
	</div>

</div>