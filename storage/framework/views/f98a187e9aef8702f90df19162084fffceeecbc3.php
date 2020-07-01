
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
	<h3>Data Post</h3>

	<table class="table table-hover ">
		<thead class="thead-dark">
		<tr class="table-primary">
			<th scope="col">ID</th>
			<th scope="col">CATEGORY ID</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">SLUG</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr class="table-primary">
			<td><?php echo e($row->id); ?></td>
			<td><?php echo e($row->category->cat_name); ?></td>
			<td><?php echo e($row->post_date); ?></td>
			<td><?php echo e($row->post_slug); ?></td>
			<td><?php echo e($row->post_tittle); ?></td>
			<td><?php echo e($row->post_text); ?></td>
			<td>
				<a href="<?php echo e(url('post/' . $row->id . '/edit')); ?>" class="btn btn-outline-primary">EDIT</a>
				
				<form action="<?php echo e(url('post/' . $row->id)); ?>" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					<?php echo csrf_field(); ?>
					<button class="btn btn-outline-danger">DELETE</button>
				</form>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<a href="<?php echo e(url('post/create')); ?>" class="btn btn-outline-primary">Tambah Data</a>
</div>

</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz\resources\views/post/index.blade.php ENDPATH**/ ?>