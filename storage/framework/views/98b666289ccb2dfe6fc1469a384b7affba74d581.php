


<?php $__env->startSection('main'); ?>
<div class="base-filter d-flex flex-row bd-highlight mt-4 mb-2">
    <div class="bd-highlight">Urutkan Berdasarkan</div>
    <div class="mx-2 bd-highlight">
        <select name="filter" id="filter" class="filter">
            <option value="1">Tanggal</option>
            <option value="2">Waktu</option>
        </select>
    </div>
    <div class="mx-2 bd-highlight">
        <button class="btn-filter" type="submit">Urutkan</button>
    </div>
</div>
<div class="main" style="padding: 50px">
    <?php if($histories->count()): ?>    
    <table class="sortable">
        <tr>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Lokasi</th>
            <th>Suhu Tubuh</th>
        </tr>
        <?php $__currentLoopData = $histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="item">
            <td><?php echo e($history->tanggal); ?></td>
            <td><?php echo e($history->waktu); ?></td>
            <td><?php echo e($history->lokasi); ?></td>
            <td><?php echo e($history->suhu); ?> °C</td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php else: ?>
        <p>Data Tidak Ditemukan</p>
    <?php endif; ?>
    <div class="nav justify-content-end mt-3">
        <a class="btn" href="add">Isi Catatan Perjalanan</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\peduli_diri\peduli_diri\resources\views/history.blade.php ENDPATH**/ ?>