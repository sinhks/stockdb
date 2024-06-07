
<?php $__env->startSection('content'); ?>
    <div class="col-10 ">
        <h1>Create Order</h1>

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

        <form action="<?php echo e(route('orders.store')); ?>" method="POST" class="card p-5">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="customer_id">Customer:</label>
                <select name="customer_id" class="form-control" required>
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->customer_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="code">Ship Address:</label>
                <input type="text" name="ship_address" class="form-control" value="<?php echo e(old('ship_address')); ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Total amount:</label>
                <input type="text" name="total_amount" class="form-control" value="<?php echo e(old('total_amount')); ?>" required>
            </div>
            
            
            <div class="form-group">
                <label for="price">Payment method:</label>
                <input type="text" name="payment_method" class="form-control"  value="<?php echo e(old('payment_method')); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Billing address:</label>
                <input type="text" name="billing_address" class="form-control"  value="<?php echo e(old('billing_address')); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Shipping address:</label>
                <input type="text" name="shipping_address" class="form-control"  value="<?php echo e(old('shipping_address')); ?>" required>
            </div>
            <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="pending">Pending</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="<?php echo e(route('orders.index')); ?>" class="btn btn-info mt-2">Show Order</a>
            
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/orders/create.blade.php ENDPATH**/ ?>