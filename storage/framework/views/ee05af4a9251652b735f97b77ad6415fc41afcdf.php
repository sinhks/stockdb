
<?php $__env->startSection('content'); ?>

<div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
    <div class="float-start fs-2">Customer</div>
    <div class="float-end mt-2 mb-4">
        <a href="<?php echo e(route('customers.create')); ?>" class="btn btn-success">Create New Customer</a>
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
    <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact Name</th>
                    <th>Contact Title</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Region</th>
                    <th>Postal code</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($customer->id); ?></td>
                        <td><?php echo e($customer->customer_name); ?></td>
                        <td><?php echo e($customer->contact_name); ?></td>
                        <td><?php echo e($customer->contact_title); ?></td>
                        <td><?php echo e($customer->address); ?></td>
                        <td><?php echo e($customer->city); ?></td>
                        <td><?php echo e($customer->region); ?></td>
                        <td><?php echo e($customer->postal_code); ?></td>
                        <td><?php echo e($customer->country); ?></td>
                        <td><?php echo e($customer->phone); ?></td>
                        <td>
                            <form action="<?php echo e(route('customers.destroy',$customer->id)); ?>" method="POST">
                            
                                <a href="<?php echo e(route('customers.edit',$customer->id)); ?>" class="btn btn-info">Edit</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/customers/index.blade.php ENDPATH**/ ?>