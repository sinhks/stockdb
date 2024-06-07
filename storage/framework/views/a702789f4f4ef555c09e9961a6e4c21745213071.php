
<?php $__env->startSection('content'); ?>

<div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
    <h1>Edit Supplier</h1>
<form action="<?php echo e(route('suppliers.update', $supplier->id)); ?>" method="POST" class="card p-5">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="<?php echo e($supplier->supplier_name); ?>" required>
        </div>
        <div class="form-group">
            <label for="name">Contact Name:</label>
            <input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo e($supplier->contact_name); ?>" required>
        </div>
        <div class="form-group">
            <label for="address">address:</label>
            <textarea class="form-control" id="address" name="address" required><?php echo e($supplier->address); ?></textarea>
        </div>
        <div class="form-group">
            <label for="postal_code">postal code:</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?php echo e($supplier->postal_code); ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e($supplier->phone); ?>" required>
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo e($supplier->email); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/suppliers/edit.blade.php ENDPATH**/ ?>