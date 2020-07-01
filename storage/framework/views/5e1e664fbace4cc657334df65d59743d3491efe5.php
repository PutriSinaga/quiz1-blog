
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		h2	{
			margin-bottom: 30px;
		}

	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
	<h3>Edit Data Post</h3>
	<form action="<?php echo e(url('/post/' . $rows->id)); ?>" method="post">
	<input name="_method" type="hidden" value="patch">
	<?php echo csrf_field(); ?>
	<?php echo method_field('PATCH'); ?>
	<table>
		
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
			<div class="col-sm-5">
				<select name="post_cat_id" class="form-control bg-light">
					<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($row->cat_id); ?>"

						<?php if($row->cat_id ==$rows->post_cat_id): ?>
						selected
						<?php endif; ?>
						><?php echo e($row->cat_name); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
			<div class="col-sm-5">
				<input type="date" name="post_date" value="<?php echo e($rows->post_date); ?>" id="inputEmail3" class="form-control bg-light">
			</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Slug</label>
			<div class="col-sm-5">
				<input type="text" name="post_slug" value="<?php echo e($rows->post_slug); ?>" id="inputEmail3" class="form-control bg-light">
			</div>
			</div>
		

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">
				<input type="text" name="post_tittle" value="<?php echo e($rows->post_tittle); ?>" id="inputEmail3" class="form-control bg-light">
			</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
			<div class="col-sm-5">
				<input type="text" name="post_text" value="<?php echo e($rows->post_text); ?>" id="inputEmail3" class="form-control bg-light">
			</div>
			</div>

	</table>
	<div class="form-group row">
		<div class="col-sm-10">
		<input type="submit" value="UPDATE" class="btn btn-outline-primary">
	</div></div>
	</form>
</div>
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz\resources\views/post/edit.blade.php ENDPATH**/ ?>