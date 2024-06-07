
<?php $__env->startSection('content'); ?>
    <div class="col-10">
        <h1>Edit order</h1>
        <form action="<?php echo e(route('orders.update',$order->id)); ?>" method="POST" class="card p-5">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="customer_id">Customer:</label>
                <select name="customer_id" class="form-control" required>
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($customer->id); ?>" <?php echo e($order->customer_id == $customer->id ? 'selected' : ''); ?>><?php echo e($customer->customer_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="code">Ship Address:</label>
                <input type="text" name="ship_address" class="form-control" value="<?php echo e($order->ship_address); ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Total amount:</label>
                <input type="text" name="total_amount" class="form-control" value="<?php echo e($order->total_amount); ?>" required>
            </div>
            
            
            <div class="form-group">
                <label for="price">Payment method:</label>
                <input type="text" name="payment_method" class="form-control"  value="<?php echo e($order->payment_method); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Billing address:</label>
                <input type="text" name="billing_address" class="form-control"  value="<?php echo e($order->billing_address); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Shipping address:</label>
                <input type="text" name="shipping_address" class="form-control"  value="<?php echo e($order->shipping_address); ?>" required>
            </div>
            <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="pending" <?php echo e($order->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                <option value="active" <?php echo e($order->status == 'Active' ? 'selected' : ''); ?>>Active</option>
                <option value="inactive" <?php echo e($order->status == 'Inactive' ? 'selected' : ''); ?>>Inactive</option>
            </select>
        </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            
            
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/orders/edit.blade.php ENDPATH**/ ?>