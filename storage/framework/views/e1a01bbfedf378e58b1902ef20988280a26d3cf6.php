
<?php $__env->startSection('content'); ?>
    
<div class="col-10">
    <h2>Create New Supplier</h2>

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

    <form action="<?php echo e(route('suppliers.store')); ?>" method="POST" class="card p-5">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="<?php echo e(old('supplier_name')); ?>">
        </div>
        <div class="form-group">
            <label for="name">Contact Name:</label>
            <input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo e(old('contact_name')); ?>">
        </div>
        <div class="form-group">
            <label for="address">address:</label>
            <textarea class="form-control" id="address" name="address"><?php echo e(old('address')); ?></textarea>
        </div>
        <div class="form-group">
            <label for="postal_code">postal code:</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?php echo e(old('postal_code')); ?>">
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e(old('phone')); ?>">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?php echo e(route('suppliers.index')); ?>" class="btn btn-info mt-2">Show Supplier</a>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/suppliers/create.blade.php ENDPATH**/ ?>