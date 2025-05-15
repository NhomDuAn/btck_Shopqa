<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App- <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <?php echo $__env->make('layouts.header.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class='container'>
        <h2>Nội Dung Chèn vào đây</h2>
        <?php echo $__env->yieldContent('content'); ?>
        <!-- khối lệnh này được lấy nội dung trong khối lệnh section trong mục students.index -->
         <!-- nguyên tăc link là phải đi từ view -->
    </div>
    <?php echo $__env->make('layouts.footer.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\btck_Shopqa\resources\views/layouts/index.blade.php ENDPATH**/ ?>