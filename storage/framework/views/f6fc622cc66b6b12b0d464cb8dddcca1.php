<?php $__env->startSection('content'); ?>
<h1>Pengelolaan Data</h1>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<div class="row mb-4">
    <div class="col-md-6">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title">Ringkasan Produk</h5>
                <p class="card-text">Total Produk: <strong><?php echo e(count($data)); ?></strong></p>
                <p class="card-text">Total Stok: <strong><?php echo e(array_sum(array_column($data, 'stok'))); ?></strong></p>
            </div>
        </div>
    </div>
</div>

<div class="card mt-2">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <span>Daftar Produk</span>
        <a href="<?php echo e(route('produk.create')); ?>" class="btn btn-light btn-sm">
            <i class="fas fa-plus"></i> Tambah Produk
        </a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga (Rp)</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item['id']); ?></td>
                    <td><?php echo e($item['nama']); ?></td>
                    <td><?php echo e(number_format($item['harga'], 0, ',', '.')); ?></td>
                    <td><?php echo e($item['stok']); ?></td>
                    <td>
                        <a href="<?php echo e(route('produk.edit', $item['id'])); ?>" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="<?php echo e(route('produk.destroy', $item['id'])); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\File\Data\laragon\www\utsprakweb\resources\views/pengelolaan.blade.php ENDPATH**/ ?>