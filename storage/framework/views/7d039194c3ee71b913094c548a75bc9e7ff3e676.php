
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h2	{
			margin-bottom: 30px;
		}

		table {
			background-color: #FFFFE0;
		}

	</style>
</head>
<body>

</body>
</html>

<div class="container">
	<h3>Data Album</h3>

	<table class="table table-hover ">
		<thead class="thead-dark">
		<tr class="table-primary">
			<th scope="col">ID</th>
			<th scope="col">PHOTO ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr class="table-primary">
			<td><?php echo e($row->id); ?></td>
			<td><?php echo e($row->photo->pho_tittle); ?></td>
			<td><?php echo e($row->album_name); ?></td>
			<td><?php echo e($row->album_text); ?></td>
			<td>
				<a href="<?php echo e(url('album/' . $row->id . '/edit')); ?>" class="btn btn-outline-primary">EDIT</a>
				
				<form action="<?php echo e(url('album/' . $row->id)); ?>" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					<?php echo csrf_field(); ?>
					<button class="btn btn-outline-danger">DELETE</button>
				</form>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<a href="<?php echo e(url('album/create')); ?>" class="btn btn-outline-primary">Tambah Data</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz\resources\views/album/index.blade.php ENDPATH**/ ?>