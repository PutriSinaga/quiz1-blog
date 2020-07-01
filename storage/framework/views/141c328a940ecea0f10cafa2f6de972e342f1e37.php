
<?php $__env->startSection('content'); ?>

<div class="container">
	<h3>Edit Data </h3>
	<form action="<?php echo e(url('/album/' . $row->id)); ?>" method="post">
	<input name="_method" type="hidden" value="patch">
	<?php echo csrf_field(); ?>

	<table>
		<tr>
			<td>PHOTO ID</td>
			<td><input type="text" name="album_pho_id" value="<?php echo e($row->album_pho_id); ?>"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="album_name" value="<?php echo e($row->album_name); ?>"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="album_text" value="<?php echo e($row->album_text); ?>"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prak-10\resources\views/album/edit.blade.php ENDPATH**/ ?>