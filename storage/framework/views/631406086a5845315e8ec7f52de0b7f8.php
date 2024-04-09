

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Escrowed Data</h1>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="search">Search:</label>
                <input type="text" class="form-control" id="search" placeholder="Enter keyword">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status">
                    <option value="">All</option>
                    <option value="pending">20 per page</option>
                    <option value="approved">50 per page</option>
                    <option value="rejected">100 per page</option>
                </select>
            </div>
        </div>
    </div>
    
    <?php if($escrowedData->isEmpty()): ?>
        <div class="alert alert-warning" role="alert">
            No escrowed data found.
        </div>
    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $escrowedData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($data->title); ?> - <?php echo e($data->amount); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/escrowed/index.blade.php ENDPATH**/ ?>