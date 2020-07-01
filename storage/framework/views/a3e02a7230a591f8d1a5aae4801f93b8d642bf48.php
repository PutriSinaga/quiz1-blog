
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

</body>
</html>

<div class="container">
	<div class="col-md-10">
	<h2>Edit Data Photo</h2>
	<form action="<?php echo e(url('/photo/' . $rows->id)); ?>" method="post" enctype="multipart/form-data">
	<input name="_method" type="hidden" value="patch">
	<?php echo csrf_field(); ?>

	<table>
		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Post</label>
		<div class="col-sm-5">	
			<select name="pho_post_id" class="form-control bg-light">
				<?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($row->id); ?>"
					<?php if($row->id ==$rows->pho_post_id): ?>
					selected
					<?php endif; ?>
					><?php echo e($row->post_tittle); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
		</div>

		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">File Foto</label>
		<div class="col-sm-5">	
			<input type="file" name="gambar"  id="inputEmail3">
		</div>
		</div>

		
		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
		<div class="col-sm-5">	
			<input type="date" name="pho_date" value="<?php echo e($rows->pho_date); ?>" id="inputEmail3" class="form-control bg-light">
		</div>
		</div>

		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
		<div class="col-sm-5">	
			<input type="text" name="pho_tittle" value="<?php echo e($rows->pho_tittle); ?>" id="inputEmail3" class="form-control bg-light">
		</div>
		</div>

		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>	
		<div class="col-sm-5">	
			<input type="text" name="pho_text" value="<?php echo e($rows->pho_text); ?>" id="inputEmail3" class="form-control bg-light">
		</div>
		</div>

	</table>
	<div class="form-group row">
		<div class="col-sm-10">
			<input type="submit" value="UPDATE" class="btn btn-outline-primary"> 
		</div>
		</div>

	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz\resources\views/photo/edit.blade.php ENDPATH**/ ?>