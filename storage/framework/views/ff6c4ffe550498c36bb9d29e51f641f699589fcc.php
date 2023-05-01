<?php $__env->startSection('title'); ?>
    <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($publisher->name); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="card-group">
        <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo e($publisher->image); ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($publisher->name); ?></h5>
                            <p class="card-text">Address :</p>
                            <p class="card-text"><?php echo e($publisher->address); ?></p>
                            <p class="card-text">Email :</p>
                            <p class="card-text"><?php echo e($publisher->email); ?></p>
                            <p class="card-text"><small class="text-muted">Phone :</small></p>
                            <p class="card-text"><small class="text-muted"><?php echo e($publisher->phone); ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="card-group">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="min-height: 50vh;width: 280cm;">
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GiantBookSupplier\resources\views/publisherDetail.blade.php ENDPATH**/ ?>