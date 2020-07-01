
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

	<h3>Edit Data Category</h3>
	<form action="<?php echo e(url('/category/' . $row->cat_id)); ?>" method="post">
	<input name="_method" type="hidden" value="patch">
	<?php echo csrf_field(); ?>

	<table>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
		<div class="col-sm-5">
			<input type="text" name="cat_name" value="<?php echo e($row->cat_name); ?>" class="bg-light form-control" id="inputEmail3">
		</div>
		</div>

		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
		<div class="col-sm-5">
			<input type="text" name="cat_text" value="<?php echo e($row->cat_text); ?>" class="bg-light form-control" id="inputEmail3">
		</div>
		</div>
	</table>
			<div class="form-group row">
			<div class="col-sm-10">
				<input type="submit" value="UPDATE" class="btn btn-outline-primary">
			<div>
			</div>
	</form>
</div>
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz\resources\views/category/edit.blade.php ENDPATH**/ ?>