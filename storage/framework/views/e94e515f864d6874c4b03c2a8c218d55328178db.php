
<?php $__env->startSection('content'); ?>

<div class="container">
	<h3>Input Data Kategori</h3>
	<form method="post" action="<?php echo e(url('/category')); ?>">
	<?php echo csrf_field(); ?>
		<table>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="cat_name" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="cat_text" class="form-control"></td>
			</tr>
			

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-primary">SIMPAN</button></td>
			</tr>
		</table>

	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prak-10\resources\views/category/add.blade.php ENDPATH**/ ?>