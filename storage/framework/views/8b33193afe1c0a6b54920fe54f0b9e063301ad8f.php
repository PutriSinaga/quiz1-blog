
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
	<h3>Edit Data Album</h3>
	<form action="<?php echo e(url('/album/' . $rows->id)); ?>" method="post">
	<input name="_method" type="hidden" value="patch">
	<?php echo csrf_field(); ?>

	<table>
		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-5">	
			<select name="album_pho_id" class="form-control bg-light">
					<?php $__currentLoopData = $pho; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($row->id); ?>"

						<?php if($row->id ==$rows->album_pho_id): ?>
						selected
						<?php endif; ?>
						><?php echo e($row->pho_tittle); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
		</div>
		</div>

		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
		<div class="col-sm-5">	
			<input type="text" name="album_name" value="<?php echo e($rows->album_name); ?>" id="inputEmail3" class="form-control bg-light">
		</div>
		</div>

		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
		<div class="col-sm-5">	
			<input type="text" name="album_text" value="<?php echo e($rows->album_text); ?>" id="inputEmail3" class="form-control bg-light">
		</div>
		</div>

	</table>
	<div class="form-group row">
			<div class="col-sm-10">
			<input type="submit" value="UPDATE" class="btn  btn-outline-primary">
		</div>
	</div>
	</form>
</div>
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz\resources\views/album/edit.blade.php ENDPATH**/ ?>