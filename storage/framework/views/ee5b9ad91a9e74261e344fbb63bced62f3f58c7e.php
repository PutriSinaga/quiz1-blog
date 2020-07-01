
<?php $__env->startSection('content'); ?>

<div class="container">
	<h3>Data Album</h3>

	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">PHOTO ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($row->id); ?></td>
			<td><?php echo e($row->album_pho_id); ?></td>
			<td><?php echo e($row->album_name); ?></td>
			<td><?php echo e($row->album_text); ?></td>
			<td>
				<a href="<?php echo e(url('album/' . $row->id . '/edit')); ?>" class="badge badge-success">EDIT</a>
				
				<form action="<?php echo e(url('album/' . $row->id)); ?>" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					<?php echo csrf_field(); ?>
					<button class="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<a href="<?php echo e(url('album/create')); ?>">Tambah Data</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prak-10\resources\views/album/index.blade.php ENDPATH**/ ?>