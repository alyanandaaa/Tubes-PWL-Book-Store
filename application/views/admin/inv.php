<br>
<div class="container-fluid">
	<h1 class="text-black">Invoices</h1>
	<hr>

	<table class="table table-bordered table-hover table-striped text-black">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Address</th>
			<th>Purchase Date</th>
			<th>Payment Due</th>
			<th></th>
		</tr>

		<?php foreach ($inv as $in): ?>

		<tr>
			<td><?php echo $in->id ?></td>
			<td><?php echo $in->name ?></td>
			<td><?php echo $in->address ?></td>
			<td><?php echo $in->order_date ?></td>
			<td><?php echo $in->payment_due ?></td>
			<td align="center"><?php echo anchor('admin/inv/detail/'.$in->id, '<div class="btn btn-sm btn-primary" >Detail</div>') ?></td>
		</tr>

	<?php endforeach; ?>
		
	</table>
</div>