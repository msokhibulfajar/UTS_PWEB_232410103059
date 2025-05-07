<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php if(request()->query('username')): ?>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>"
                           href="<?php echo e(route('dashboard', ['username' => request()->query('username')])); ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('pengelolaan') ? 'active' : ''); ?>"
                           href="<?php echo e(route('pengelolaan', ['username' => request()->query('username')])); ?>">Pengelolaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('profile') ? 'active' : ''); ?>"
                           href="<?php echo e(route('profile', ['username' => request()->query('username')])); ?>">Profile</a>
                    </li>
                <?php else: ?>
                    
                    <li class="nav-item">
                        <span class="nav-link disabled">Dashboard</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link disabled">Pengelolaan</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link disabled">Profile</span>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\File\Data\laragon\www\utsprakweb\resources\views/components/navbar.blade.php ENDPATH**/ ?>