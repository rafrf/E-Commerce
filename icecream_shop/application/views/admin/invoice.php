<div class="container-fluid">
	<h4> Product Order Invoice </h4>

	<table class="table table-bordered table-hover table-striped">
		<tr align="center">
			<th>Id Invoice</th>
			<th>Customer Name</th>
			<th>Address</th>
			<th>Order Date</th>
			<th>Pay Limit</th>
			<th colspan="2">Action</th>
		</tr>
		<?php foreach ($invoice as $inv) : ?>
		<tr>
			<td><?php echo $inv->id ?></td>
			<td><?php echo $inv->name ?></td>
			<td><?php echo $inv->address ?></td>
			<td><?php echo $inv->order_date ?></td>
			<td><?php echo $inv->pay_limit ?></td>
			<td><?php echo anchor('admin/invoice/detail/' .$inv->id, '<div class="btn btn-sm btn-primary"> Detail </div>') ?></td>
			<td><?php echo anchor('admin/invoice/delete/' .$inv->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

</div>