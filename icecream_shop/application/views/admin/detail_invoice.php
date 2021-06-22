<div class="container-fluid">
	<h4> Order Detail <div class="btn btn-sm btn-success"> No.Invoice: <?php echo $invoice->id ?> </div> </h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>ID PRODUK</th>
			<th>NAMA PRODUK</th>
			<th>JUMLAH</th>
			<th>HARGA</th>
			<th>SUB TOTAL</th>
		</tr>

		<?php 
		$total = 0;
		foreach ($order as $odr) :
			$subtotal = $odr->jumlah * $odr->price;
			$total += $subtotal;
		?>

		<tr>
			<td><?php echo $odr->id_product ?></td>
			<td><?php echo $odr->name ?></td>
			<td><?php echo $odr->jumlah ?></td>
			<td><?php echo number_format($odr->price,0,',','.') ?></td>
			<td><?php echo number_format($subtotal,0,',','.') ?></td>
		</tr>

	<?php endforeach; ?>
	<tr>
		<td colspan="4" align="right">Grand Total</td>
		<td align="right"> Rp. <?php echo number_format($total,0,',','.') ?></td>
	</tr>
	</table>

	<a href=" <?php echo base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-primary"> Back </div></a>
</div>