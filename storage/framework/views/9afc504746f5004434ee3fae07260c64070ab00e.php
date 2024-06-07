
<?php $__env->startSection('content'); ?>

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
    <div class="float-start fs-2">Order</div>
    <div class="float-end mt-2 mb-4">
        <a href="<?php echo e(route('orders.create')); ?>" class="btn btn-success">Create New Order</a>
    </div>
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
    <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Ship_Address</th>
                    <th>Total_amount</th>
                    <th>Payment_method</th>
                    <th>Billing_address</th>
                    <th>Shipping_address</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($order->id); ?></td>
                        <td><?php echo e($order->customer_id); ?></td>
                        <td><?php echo e($order->ship_address); ?></td>
                        <td><?php echo e($order->total_amount); ?></td>
                        <td><?php echo e($order->payment_method); ?></td>
                        <td><?php echo e($order->billing_address); ?></td>
                        <td><?php echo e($order->shipping_address); ?></td>
                        <td><?php echo e($order->status); ?></td>
                        <td>
                            <form action="<?php echo e(route('orders.destroy',$order->id)); ?>" method="POST">
                            
                                <a href="<?php echo e(route('orders.edit',$order->id)); ?>" class="btn btn-info">Edit</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/orders/index.blade.php ENDPATH**/ ?>