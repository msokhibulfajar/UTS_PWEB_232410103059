<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Profile Pengguna
            </div>
            <div class="card-body">
                <?php if(isset($username)): ?>
                    <h4 class="card-title">Selamat datang di Gudang Tani, <?php echo e($username); ?>!</h4>
                <?php endif; ?>

                <div class="mt-4">
                    <h5>Informasi Akun</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Username: <?php echo e($username); ?></li>
                        <li class="list-group-item">Email: <?php echo e($username); ?>@gmail.com</li>
                        <li class="list-group-item">Bergabung sejak: <?php echo e(now()->format('d F Y')); ?></li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-danger">Keluar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\File\Data\laragon\www\utsprakweb\resources\views/profile.blade.php ENDPATH**/ ?>