

<?php $__env->startSection('title', 'Category'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-12 col-md-10 col-lg-10 p-3">
    <div class="fs-5 text-success"><i class="fa-solid fa-plus"></i> Category</div>
    <div class="mt-2">
        <a href="" class="text-decoration-none text-secondary"><i class="fa-solid fa-hand-point-left"></i>ត្រឡប់ទៅវិញ</a>
    </div>
    <h2>Create New Product</h2>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<form action="<?php echo e(route('category.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="category_name" name="category_name" value="<?php echo e(old('category_name')); ?>">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description"><?php echo e(old('description')); ?></textarea>
    </div>
    <div class="form-group">
        <label for="price">status:</label>
        <input type="text" class="form-control" id="status" name="status" value="<?php echo e(old('status')); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/category/create.blade.php ENDPATH**/ ?>