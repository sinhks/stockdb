

<?php $__env->startSection('title', 'បង្កើតមុខទំនិញ'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-12 col-md-10 col-lg-10 p-3">
    <div class="fs-5 text-success"><i class="fa-solid fa-plus"></i> បង្កើតមុខទំនិញថ្មី</div>
    <div class="mt-2">
        <a href="" class="text-decoration-none text-secondary"><i class="fa-solid fa-hand-point-left"></i>ត្រឡប់ទៅវិញ</a>
    </div>
    
        <form action="" class="mt-4 card p-5">
        
       
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">ឈ្មោះក្រុមប្រភេទ</span>
        <input type="text" class="form-control" placeholder="សូមបញ្ចូលក្រុមប្រភេទ" aria-label="Username" aria-describedby="basic-addon1">
        </div>


        
        <div class="input-group mb-3">
            <span class="input-group-text">បរិយាយ</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
            <div><input type="radio"name="status" value="Yes"  onclick="showSelectedFruit()">Yes</div>
            <div><input type="radio"name="status" value="No"  onclick="showSelectedFruit()">No</div>
        <button class="btn btn-light"><i class="fa-solid fa-arrow-left"></i> ត្រឡប់ក្រោយ</button>
        <input type="submit" name="រក្សាទុក" id="" value="រក្សាទុក" class="btn btn-success">
    </form>
        
    
</div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/child/category.blade.php ENDPATH**/ ?>