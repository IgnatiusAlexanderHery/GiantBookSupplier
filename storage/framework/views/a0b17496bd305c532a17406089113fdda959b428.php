<?php $__env->startSection('title'); ?>
    Publisher
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="card-group">
        <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-6" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-12">
                        <img src="<?php echo e($publisher->image); ?>" class="img-fluid rounded-start image" alt="...">
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($publisher->name); ?></h5>
                        </div>
                    </div>
                    <a href="/publisherDetail/<?php echo e($publisher->id); ?>" class="btn card-footer" style="width: 50%">Detail</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="paginations">
        <?php echo e($publishers->links()); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GiantBookSupplier\resources\views/publisher.blade.php ENDPATH**/ ?>