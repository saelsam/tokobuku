
<?php $__env->startSection('title'); ?>
Ini adalah halaman Mahasiswa
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container px-4 py-5">
<?php if(session('success')): ?>
<div class="alert alert-success">
<b>Yeah!</b> <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<a href="tokobuku.create", class=""><Button class="btn btn-primary mb-
3">Tambah</Button></a>

<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Nama</th>
<th scope="col">Jenis</th>
<th scope="col">Harga</th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $tokobukus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tokobuku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<th scope="row"><?php echo e($tokobuku->id); ?></th>
<td><?php echo e($tokobuku->nama); ?></td>
<td><?php echo e($tokobuku->jenis); ?></td>
<td><?php echo e($tokobuku->harga); ?></td>


<a href="#" class=""><Button class="btn btn-success mb-3">Lihat</Button></a>

</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\myFile\Semester 5\Praktek\Framework\tokobuku\resources\views/tokobuku/index.blade.php ENDPATH**/ ?>