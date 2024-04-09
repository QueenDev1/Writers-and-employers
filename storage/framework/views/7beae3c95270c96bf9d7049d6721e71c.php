

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Bids</h1>

    <?php if($bids->isEmpty()): ?>
        <div class="alert alert-warning" role="alert">
            No bids found.
        </div>
    <?php else: ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Bid Comment</th>
                    <th>Writer ID</th>
                    <th>Order ID</th>
                    <th>Status</th>
                    <th>Order Made At</th>
                    <th>Employer Comment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $bids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($bid->id); ?></td>
                        <td><?php echo e($bid->bid_comment); ?></td>
                        <td><?php echo e($bid->writer->name); ?></td>
                        <td><?php echo e($bid->order_id); ?></td>
                        <td><?php echo e($bid->status); ?></td>
                        <td><?php echo e($bid->created_at); ?></td>
                        <td><?php echo e($bid->employer_comment); ?></td>
                        <td>
                            <a href="<?php echo e(route('accept', ['orderId' => $bid->order_id])); ?>" class="btn btn-primary">Accept</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/bids/index.blade.php ENDPATH**/ ?>