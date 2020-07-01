
<?php $__env->startSection('content'); ?>

<div class="container">
	<h3>Edit Data Kategori</h3>
	<form action="<?php echo e(url('/category/' . $row->cat_id)); ?>" method="post">
	<input name="_method" type="hidden" value="patch">
	<?php echo csrf_field(); ?>

	<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="cat_name" value="<?php echo e($row->cat_name); ?>"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="cat_text" value="<?php echo e($row->cat_text); ?>"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prak-10\resources\views/category/edit.blade.php ENDPATH**/ ?>