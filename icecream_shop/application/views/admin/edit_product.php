<div class="container-fluid">
	<h3> Product Data Edit </h3>

	<?php foreach ($product as $prd) :?>
		<form method="post" action="<?php echo base_url() .'admin/data_product/update' ?>">
			<div class="for-group">
				<label> Product Name </label>
				<input type="text" name="name" class="form-control" value="<?php echo $prd->name ?>">
			</div>

			<div class="for-group">
				<label> Type </label>
				<input type="hidden" name="id_product" class="form-control" value="<?php echo $prd->id_product ?>">
				<input type="text" name="type" class="form-control" value="<?php echo $prd->type ?>">
			</div>

			<div class="for-group">
				<label> Information </label>
				<input type="text" name="information" class="form-control" value="<?php echo $prd->information ?>">
			</div>

			<div class="for-group">
				<label> Price </label>
				<input type="text" name="price" class="form-control" value="<?php echo $prd->price ?>">
			</div>

			<div class="for-group">
				<label> Stock </label>
				<input type="text" name="stock" class="form-control" value="<?php echo $prd->stock ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3"> Save</button>

		</form>

	<?php endforeach ?>
</div>