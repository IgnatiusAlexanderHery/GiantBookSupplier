<?php $__env->startSection('title', 'Home page'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card-group">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" >
            <img src="<?php echo e(asset('img/'.$book->image)); ?>" class="rounded mx-auto d-block image" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($book->title); ?></h5>
                <p class="card-text">By</p>
                <p class="card-text"><?php echo e($book->author); ?></p>
                <a href="/bookdetail/<?php echo e($book->id); ?>" class="btn card-footer">Detail</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="paginations">
        <?php echo e($books->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GiantBookSupplier\resources\views/index.blade.php ENDPATH**/ ?>