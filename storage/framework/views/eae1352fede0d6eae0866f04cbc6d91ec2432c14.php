
<?php $__env->startSection('content'); ?>

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <div class="fs-2 float-start">Order Item</div>
        <div class="float-end mt-2 mb-4">
            <a href="<?php echo e(route('orderitems.create')); ?>" class="btn btn-success">Create New orderItem</a>
        </div><br><br>
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
    <table class="table table-striped  text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Order_id</th>
            <th>Product_Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $ordersitem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($orderitem->id); ?></td>
                    <td><?php echo e($orderitem->order_id); ?></td>
                    <td><?php echo e($orderitem->product_id); ?></td>
                    <td><?php echo e($orderitem->quantity); ?></td>
                    <td><?php echo e($orderitem->price); ?></td>
                    <td>
                    <form action="<?php echo e(route('orderitems.destroy',$orderitem->id)); ?>" method="POST">
                            
                            <a href="<?php echo e(route('orderitems.edit',$orderitem->id)); ?>" class="btn btn-info">Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/orderitems/index.blade.php ENDPATH**/ ?>