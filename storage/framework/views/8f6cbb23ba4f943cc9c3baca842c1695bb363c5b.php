
<?php $__env->startSection('content'); ?>

<div class="container">
	<h3>Edit Data Post</h3>
	<form action="<?php echo e(url('/post/' . $row->id)); ?>" method="post">
	<input name="_method" type="hidden" value="patch">
	<?php echo csrf_field(); ?>

	<table>
		<tr>
			<td>KATEGORI ID</td>
			<td><input type="text" name="post_cat_id" value="<?php echo e($row->post_cat_id); ?>"></td>
		</tr>

		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="post_date" value="<?php echo e($row->post_date); ?>"></td>
		</tr>

		<tr>
			<td>SLUG</td>
			<td><input type="text" name="post_slug" value="<?php echo e($row->post_slug); ?>"></td>
		</tr>

		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="post_tittle" value="<?php echo e($row->post_tittle); ?>"></td>
		</tr>


		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="post_text" value="<?php echo e($row->post_text); ?>"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prak-10\resources\views/post/edit.blade.php ENDPATH**/ ?>