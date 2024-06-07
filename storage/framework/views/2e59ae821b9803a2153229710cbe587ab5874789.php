
<?php $__env->startSection('content'); ?>

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <h1>Create Product</h1>

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

        <form action="<?php echo e(route('products.store')); ?>" method="POST" class="card p-5">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="code">Product code:</label>
                <input type="number" name="product_code" class="form-control" value="<?php echo e(old('product_code')); ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="product_name" class="form-control" value="<?php echo e(old('product_name')); ?>" required>
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control" required>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="supplier_id">Supplier:</label>
                <select name="supplier_id" class="form-control" required>
                    <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->supplier_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Unit Price:</label>
                <input type="number" name="unit_price" class="form-control"  value="<?php echo e(old('unit_price')); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Unit in Stock:</label>
                <input type="number" name="units_in_stock" class="form-control"  value="<?php echo e(old('units_in_stock')); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Discount:</label>
                <input type="number" name="discount" class="form-control"  value="<?php echo e(old('discount')); ?>" required>
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
            <a href="<?php echo e(route('products.index')); ?>" class="btn btn-info mt-2">Show Product</a>
            
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/products/create.blade.php ENDPATH**/ ?>