

<?php $__env->startSection('main'); ?>
<div class="main mt-4" style="height: 100%">
    Selamat Datang <?php echo e(auth()->user()->fullname); ?> di Aplikasi Catatan Perjalanan ini
</div>
<div class="nav justify-content-end mt-3">
    <a class="btn" href="add">Isi Catatan Perjalanan</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\peduli_diri\peduli_diri\resources\views/home.blade.php ENDPATH**/ ?>