<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gudang Tani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>(
<script>
    $(document).ready(function() {
        // Handle edit button click
        $(document).on('click', '.btn-edit', function() {
            var id = $(this).data('id');
            var nama = $(this).data('nama');
            var harga = $(this).data('harga');
            var stok = $(this).data('stok');

            $('#edit_nama').val(nama);
            $('#edit_harga').val(harga);
            $('#edit_stok').val(stok);

            // Update form action with correct route
            $('#editForm').attr('action', '/produk/' + id);

            var editModal = new bootstrap.Modal(document.getElementById('editProdukModal'));
            editModal.show();
        });

        // Handle delete button click
        $(document).on('click', '.btn-delete', function() {
            var id = $(this).data('id');

            // Update form action with correct route
            $('#hapusForm').attr('action', '/produk/' + id);

            var deleteModal = new bootstrap.Modal(document.getElementById('hapusProdukModal'));
            deleteModal.show();
        });
    });
</script>

)
</body>
</html>
<?php /**PATH D:\File\Data\laragon\www\utsprakweb\resources\views/layouts/app.blade.php ENDPATH**/ ?>