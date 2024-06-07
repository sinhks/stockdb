
<?php $__env->startSection('content'); ?>

<div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
    <h1>Edit Customer</h1>
<form action="<?php echo e(route('customers.update',$customer->id)); ?>" method="POST" class="card p-5">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="name">Customer Name:</label>
        <input type="text" class="form-control" id="customer_name" name="customer_name" value="<?php echo e($customer->customer_name); ?>" require>
    </div>
    <div class="form-group">
        <label for="name">Contact Name:</label>
        <input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo e($customer->contact_name); ?>" require>
    </div>
    <div class="form-group">
        <label for="name">Contact title:</label>
        <input type="text" class="form-control" id="contact_title" name="contact_title" value="<?php echo e($customer->contact_title); ?>" require>
    </div>
   
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" require><?php echo e($customer->address); ?></textarea>
    </div>
    <div class="form-group">
        <label for="name">City:</label>
        <input type="text" class="form-control" id="city" name="city" value="<?php echo e($customer->city); ?>" require>
    </div>
    <div class="form-group">
        <label for="region">Region:</label>
        <input type="text" class="form-control" id="region" name="region" value="<?php echo e($customer->region); ?>" require>
    </div>
    <div class="form-group">
        <label for="postal_code">postal code:</label>
        <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?php echo e($customer->postal_code); ?>" require>
    </div>
    <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" class="form-control" id="country" name="country" value="<?php echo e($customer->country); ?>" require>
    </div>
    <div class="form-group">
        <label for="phone">phone:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e($customer->phone); ?>" require>
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
    
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/customers/edit.blade.php ENDPATH**/ ?>