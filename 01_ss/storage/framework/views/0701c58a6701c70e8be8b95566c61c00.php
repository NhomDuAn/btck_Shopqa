<?php $__env->startSection('title', 'category'); ?>
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nội Dung truyền vào đây</h1>
    <h2>Thông tin:<?php echo e($category ? $category : 'Không có dữ liệu'); ?></h2>

</body>
</html>

<?php echo $__env->make('layouts.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\btck_Shopqa\resources\views/page/category/index.blade.php ENDPATH**/ ?>