<?php $__env->startSection('title'); ?>
        <?php echo e($book->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card" style="min-height: 80vh">
        <div class="image_background inverse" style="background-color: black">
            <img src= "<?php echo e(asset('img/'.$book->image)); ?>" class="rounded mx-auto d-block image" alt="...">
        </div>
        <div class="detail-container">
            <h5 class="card-title">Title : <?php echo e($book->title); ?></h5>
            <li class="card-text">Author : <?php echo e($book->author); ?></li>
            <li class="card-text">Publisher : <?php echo e($book->publisher->name); ?></li>
            <li class="card-text">Year : <?php echo e($book->year); ?></li>
            <li class="card-text">Synopsis : </li>
            <lu class="card-text">
                <?php echo e($book->synopsis); ?>

            </lu>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GiantBookSupplier\resources\views/bookdetail.blade.php ENDPATH**/ ?>