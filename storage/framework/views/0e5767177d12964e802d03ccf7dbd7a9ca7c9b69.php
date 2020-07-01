
<?php $__env->startSection('content'); ?>

<div class="container">
	<h3>Data Kategori</h3>

	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($row->cat_id); ?></td>
			<td><?php echo e($row->cat_name); ?></td>
			<td><?php echo e($row->cat_text); ?></td>
			<td>
				<a href="<?php echo e(url('category/' . $row->cat_id . '/edit')); ?>" class="badge badge-success">EDIT</a>
				
				<form action="<?php echo e(url('category/' . $row->cat_id)); ?>" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					<?php echo csrf_field(); ?>
					<button class="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<a href="<?php echo e(url('category/create')); ?>">Tambah Data</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prak-10\resources\views/category/index.blade.php ENDPATH**/ ?>