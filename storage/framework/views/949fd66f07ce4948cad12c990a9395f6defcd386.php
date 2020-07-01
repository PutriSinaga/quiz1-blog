
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
	<h3>Data Photo</h3>

	<table class="table table-hover ">
		<thead class="thead-dark">
		<tr class="table-primary">
			<th scope="col">ID</th>
			<th scope="col">GAMBAR</th>
			<th scope="col">POST</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr class="table-primary">
			<td><?php echo e($row->id); ?></td>
			<td><img width="150px" class="img-thumbnail" src="<?php echo e(url('public/uploads/images/'. $row->gambar)); ?>"></td>
			<td><?php echo e($row->post->post_tittle); ?></td>
			<td><?php echo e($row->pho_date); ?></td>
			<td><?php echo e($row->pho_tittle); ?></td>
			<td><?php echo e($row->pho_text); ?></td>
			<td>
				<a href="<?php echo e(url('photo/' . $row->id . '/edit')); ?>" class="btn btn-outline-primary">EDIT</a>
				
				<form action="<?php echo e(url('photo/' . $row->id)); ?>" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					<?php echo csrf_field(); ?>
					<button class="btn btn-outline-danger">DELETE</button>
				</form>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<a href="<?php echo e(url('photo/create')); ?>" class="btn btn-outline-primary">Tambah Data</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz\resources\views/photo/index.blade.php ENDPATH**/ ?>