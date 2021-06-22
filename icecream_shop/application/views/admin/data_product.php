<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#add_product"><i class="fas fa-plus fa-sm"></i> Add Product</button>
	<table class="table table-bordered">
		<tr align="center">
			<th> NO </th>
			<th> NAME </th>
			<th> TYPE </th>
			<th> INFORMATION </th>
			<th> PRICE </th>
			<th> STOCK </th>
			<th colspan="2"> AKSI </th>
		</tr>

		<?php $no=1;
		foreach($product as $prd): ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $prd->name ?></td>
			<td><?php echo $prd->type ?></td>
			<td><?php echo $prd->information ?></td>
			<td><?php echo $prd->price ?></td>
			<td><?php echo $prd->stock ?></td>
			<td><?php echo anchor('admin/data_product/edit/' .$prd->id_product, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
			<td><?php echo anchor('admin/data_product/delete/' .$prd->id_product, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
		</tr>
		<?php endforeach;  ?>
	</table>

</div>

<!-- Modal -->
<div class="modal fade" id="add_product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_product/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
        		<label> Id Product </label>
        		<input type="text" name="id_product" class="form-control">
        	</div>

        	<div class="form-group">
        		<label> Product Name </label>
        		<input type="text" name="name" class="form-control">
        	</div>

        	<div class="form-group">
        		<label> Type </label>
        		<input type="text" name="type" class="form-control">
        	</div>

            <div class="form-group">
        		<label> Information </label>
        		<input type="text" name="information" class="form-control">
        	</div>

        	<div class="form-group">
        		<label> Price </label>
        		<input type="text" name="price" class="form-control">
        	</div>

        	<div class="form-group">
        		<label> Stock </label>
        		<input type="text" name="stock" class="form-control">
        	</div>

        	<div class="form-group">
        		<label> Picture </label>
        		<input type="file" name="picture" class="form-control">
        	</div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>
    </div>
  </div>
</div>