
<?php $__env->startSection('content'); ?>

    <div class="col-12 col-md-10 col-lg-10" id="p-fix-r">
    <h1>Edit Category</h1>
    <form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST" class="card p-5">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" name="category_name" class="form-control" value="<?php echo e($category->category_name); ?>" required>
            </div>
            <div class="form-group">
                <label for="name">Description:</label>
                <input type="text" name="description" class="form-control" value="<?php echo e($category->description); ?>" required>
            </div>
            <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control">
                <option value="pending" <?php echo e($category->status == 'pending' ? 'selected' : ''); ?>>Pending</option>
                <option value="active" <?php echo e($category->status == 'Active' ? 'selected' : ''); ?>>Active</option>
                <option value="inactive" <?php echo e($category->status == 'Inactive' ? 'selected' : ''); ?>>Inactive</option>
            </select>
        </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/categories/edit.blade.php ENDPATH**/ ?>