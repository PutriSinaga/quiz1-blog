
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Category</title>

	<style type="text/css">

		h2	{
			margin-bottom: 30px;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="col-md-10">
	<h3>Input Data Category</h3>
	<form method="post" action="<?php echo e(url('/category')); ?>">
	<?php echo csrf_field(); ?>
		<table>					
					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-5">
							<input type="text" name="cat_name" class="bg-light  form-control" id="inputEmail3">
					</div>
					</div>
					

					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-5">
						<input type="text" name="cat_text" class="bg-light form-control" id="inputEmail3">
					</div>
				</table>
				<div class="form-group row">
						<div class="col-sm-10">
						<button type="submit" class="btn btn-outline-primary">SIMPAN</button></div>
					</div>
			</form>

	</div>
</div>
</body>
</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz\resources\views/category/add.blade.php ENDPATH**/ ?>