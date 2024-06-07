
<?php $__env->startSection('content'); ?>
    <div class="col-10">
        <h1>Edit OrderItem</h1>
        <form action="<?php echo e(route('orderitems.update', $orderitem->id)); ?>" method="POST" class="card p-5">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
           
            <div class="form-group">
                <label for="order_id">Order:</label>
                <select name="order_id" class="form-control" required>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($order->id); ?>" <?php echo e($orderitem->order_id == $order->id ? 'selected' : ''); ?>><?php echo e($order->shipping_address); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">Product:</label>
                <select name="product_id" class="form-control" required>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($product->id); ?>" <?php echo e($orderitem->product_id == $product->id ? 'selected' : ''); ?>><?php echo e($product->product_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity :</label>
                <input type="text" name="quantity" class="form-control" value="<?php echo e($orderitem->quantity); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" value="<?php echo e($orderitem->price); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/orderitems/edit.blade.php ENDPATH**/ ?>