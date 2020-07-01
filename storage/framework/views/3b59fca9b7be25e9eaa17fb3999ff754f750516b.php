
<?php $__env->startSection('content'); ?>

<div class="container">
	<h3>Input Data Photo</h3>
	<form method="post" action="<?php echo e(url('/photo')); ?>">
	<?php echo csrf_field(); ?>
		<table>
			<tr>
				<td>POST ID</td>
				<td><input type="text" name="pho_post_id" class="form-control"></td>
			</tr>
			<tr>
				<td>TANGGAL</td>
				<td><input type="date" name="pho_date" class="form-control"></td>
			</tr>
			<tr>
				<td>JUDUL</td>
				<td><input type="text" name="pho_tittle" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="pho_text" class="form-control"></td>
			</tr>

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-primary">SIMPAN</button></td>
			</tr>
		</table>

	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prak-10\resources\views/photo/add.blade.php ENDPATH**/ ?>