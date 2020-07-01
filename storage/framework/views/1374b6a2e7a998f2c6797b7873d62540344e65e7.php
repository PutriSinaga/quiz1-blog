
<?php $__env->startSection('content'); ?>

<div class="container">
	<h3>Edit Data Photo</h3>
	<form action="<?php echo e(url('/photo/' . $row->id)); ?>" method="post">
	<input name="_method" type="hidden" value="patch">
	<?php echo csrf_field(); ?>

	<table>
		<tr>
			<td>POST ID</td>
			<td><input type="text" name="pho_post_id" value="<?php echo e($row->pho_post_id); ?>"></td>
		</tr>

		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="pho_date" value="<?php echo e($row->pho_date); ?>"></td>
		</tr>

		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="pho_tittle" value="<?php echo e($row->pho_tittle); ?>"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="pho_text" value="<?php echo e($row->pho_text); ?>"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prak-10\resources\views/photo/edit.blade.php ENDPATH**/ ?>