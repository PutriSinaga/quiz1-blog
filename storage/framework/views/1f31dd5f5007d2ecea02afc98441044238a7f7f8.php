
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">

		h2	{
			margin-bottom: 30px;
		}

	</style>
</body>
<div class="container">
	<div class="col-md-10">
	<h3>Input Data Post</h3>
	<form method="post" action="<?php echo e(url('/post')); ?>">
	<?php echo csrf_field(); ?>
		<table>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Category ID</label>
			<div class="col-sm-5">
				<select name="post_cat_id" class="form-control bg-light">
					<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($row->cat_id); ?>"><?php echo e($row->cat_name); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>	
			</div>
			</div>
			
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
			<div class="col-sm-5">
				<input type="date" name="post_date" class="form-control bg-light" id="inputEmail3">
			</div>
			</div>

			
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Slug</label>
			<div class="col-sm-5">
				<input type="text" name="post_slug" class="bg-light form-control" id="inputEmail3">
			</div>
			</div>

			
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">
				<input type="text" name="post_tittle" class="bg-light form-control" id="inputEmail3">
			</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
			<div class="col-sm-5">
				<input type="text" name="post_text" class="bg-light form-control" id="inputEmail3">
			</div>
			</div>

		</table>
			<div class="form-group row">
				<button type="submit" class="btn  btn-outline-primary">SIMPAN</button>

	</form>
</div>
</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz\resources\views/post/add.blade.php ENDPATH**/ ?>