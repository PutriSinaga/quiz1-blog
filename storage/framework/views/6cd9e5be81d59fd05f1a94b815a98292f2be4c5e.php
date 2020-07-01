
<?php $__env->startSection('content'); ?>

<div class="container">
	<h3>Input Data Album</h3>
	<form method="post" action="<?php echo e(url('/album')); ?>">
	<?php echo csrf_field(); ?>
		<table>
			<tr>
				<td>PHOTO ID</td>
				<td><input type="text" name="album_pho_id" class="form-control"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="album_name" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="album_text" class="form-control"></td>
			</tr>
			

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-primary">SIMPAN</button></td>
			</tr>
		</table>

	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prak-10\resources\views/album/add.blade.php ENDPATH**/ ?>