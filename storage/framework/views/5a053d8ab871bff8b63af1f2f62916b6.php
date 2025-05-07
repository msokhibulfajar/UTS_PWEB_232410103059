<?php $__env->startSection('content'); ?>
<h1>Dashboard Gudang Tani</h1>
<?php if(isset($username)): ?>
    <div class="alert alert-success">
        Selamat datang di Gudang Tani, <strong><?php echo e($username); ?></strong>!
    </div>
<?php endif; ?>

<div class="row mt-4">
    <div class="col-md-6 mb-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title">Total Produk</h5>
                <p class="card-text display-4"><?php echo e($totalProduk ?? 0); ?></p>
                <a href="<?php echo e(route('pengelolaan', ['username' => request()->query('username')])); ?>"
                   class="text-white">Lihat Detail</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card text-white bg-info">
            <div class="card-body">
                <h5 class="card-title">Total Stok</h5>
                <p class="card-text display-4"><?php echo e($totalStok ?? 0); ?></p>
                <a href="<?php echo e(route('pengelolaan', ['username' => request()->query('username')])); ?>"
                   class="text-white">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        Ringkasan Inventori
    </div>
    <div class="card-body">
        <p>Total produk tersedia: <strong><?php echo e($totalProduk); ?></strong> jenis produk</p>
        <p>Total stok tersedia: <strong><?php echo e($totalStok); ?></strong> unit</p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\File\Data\laragon\www\utsprakweb\resources\views/dashboard.blade.php ENDPATH**/ ?>