<hr class="bg-white">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<center><div class="btn  btn-success">
				<?php 
				$grand_total = 0;
				if ($cargo = $this->cart->contents())
				{
					foreach ($cargo as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}

				echo "<h4>Total Payment: Rp ".number_format($grand_total);
				 ?>
			</div></center><br><br>

			<h3 class="text-Black">Input Shipment and Payment Address</h3>

			<form method="post" action="<?php echo base_url('index.php/dashboard/order_process') ?>  ">

				<div class="form-group text-black">
					<label>Full Name</label>
					<input type="text" name="name" placeholder="Your Full Name" class="form-control"></input>
				</div>

				<div class="form-group text-black">
					<label>Address</label>
					<input type="text" name="address" placeholder="Your Address" class="form-control"></input>
				</div>

				<div class="form-group text-black">
					<label>Phone Number</label>
					<input type="text" name="no_phone" placeholder="Your Phone Number" class="form-control"></input>
				</div>

				<div class="form-group text-black">
					<label>Shipment Services</label>
					<select class="form-control">
						<option>JNE</option>
						<option>POS</option>
						<option>TIKI</option>
						<option>SiCepat</option>
					</select>
				</div>

				<div class="form-group text-black">
					<label>Bank</label>
					<select class="form-control">
						<option>BRI - XXXXXXX</option>
						<option>Permata Bank - XXXXXXX</option>
						<option>Mandiri - XXXXXXX</option>
						<option>BCA - XXXXXXX</option>
						<option>SUMUT - XXXXXXX</option>
						<option>CIMB clicks - XXXXXXX</option>
					</select>
				</div>
				<br>

				
				<div align="left">
					<a href="<?php echo base_url('index.php/dashboard/cargo_detail') ?>"><div class="btn btn-md btn-dark " align="left"><i class="fas fa-home"></i>&nbsp;Back</div></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="submit" class="btn btn-md btn-primary"><i class="fas fa-check"></i>&nbsp;Order</button>
				</div>
				
			</form>

		<?php
		} else
		{
			echo "<h4>You Haven't Ordered Anything Yet";
		} 
		?>

		</div>
		<div class="col-md-2"></div>
	</div>
</div>