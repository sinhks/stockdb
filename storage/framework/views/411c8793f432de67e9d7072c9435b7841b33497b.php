
<?php $__env->startSection('content'); ?>
    <div class="col-10">
        <div class="fs-2 float-start">Order Item</div>
        <div class="float-end mt-2 mb-4">
            <a href="<?php echo e(route('order_items.create)); ?>" class="btn btn-success">Create New orderItem</a>
        </div>
       
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/order_items/index.blade.php ENDPATH**/ ?>