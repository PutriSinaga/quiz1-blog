
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
	<h2>Input Data Album</h2>
	<form method="post" action="<?php echo e(url('/album')); ?>">
	<?php echo csrf_field(); ?>
		<table>
			
			<div class="form-group row">			
				<label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
			<div class="col-sm-5">	
				<select name="album_pho_id" class="form-control bg-light">
					<?php $__currentLoopData = $pho; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($row->id); ?>"><?php echo e($row->pho_tittle); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			</div>

			<div class="form-group row">			
				<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
			<div class="col-sm-5">	
				<input type="text" name="album_name" class="form-control bg-light" id="inputEmail3">
			</div>
			</div>

			<div class="form-group row">			
				<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
			<div class="col-sm-5">		
				<input type="text" name="album_text" class="form-control bg-light" id="inputEmail3">
			</div>
			</div>
		
		</table>
		<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" class="btn  btn-outline-primary">SIMPAN</button>
			</div>
		</div>
	</form>
</div>
</body>
</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz\resources\views/album/add.blade.php ENDPATH**/ ?>