
<?php $__env->startSection('content'); ?>

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
        <h1>Edit Product</h1>
        <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST" class="card p-5">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="code">Product code:</label>
                <input type="text" name="product_code" class="form-control" value="<?php echo e($product->product_code); ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" name="product_name" class="form-control" value="<?php echo e($product->product_name); ?>" required>
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" class="form-control" required>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php echo e($product->category_id == $category->id ? 'selected' : ''); ?>><?php echo e($category->category_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="supplier_id">Supplier:</label>
                <select name="supplier_id" class="form-control" required>
                    <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($supplier->id); ?>" <?php echo e($product->supplier_id == $supplier->id ? 'selected' : ''); ?>><?php echo e($supplier->supplier_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Unit Price:</label>
                <input type="text" name="unit_price" class="form-control"  value="<?php echo e($product->unit_price); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Unit in Stock:</label>
                <input type="text" name="units_in_stock" class="form-control"  value="<?php echo e($product->units_in_stock); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Discount:</label>
                <input type="text" name="discount" class="form-control"  value="<?php echo e($product->discount); ?>" required>
            </div>
            <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="pending" <?php echo e($product->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                <option value="active" <?php echo e($product->status == 'Active' ? 'selected' : ''); ?>>Active</option>
                <option value="inactive" <?php echo e($product->status == 'Inactive' ? 'selected' : ''); ?>>Inactive</option>
            </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/products/edit.blade.php ENDPATH**/ ?>