

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Disputed Orders</h2>
        <?php if($disputedDisputes->isEmpty()): ?>
            <p>No disputes with status 'disputed' found.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Subject</th>
                            <th>Topic</th>
                            <th>Dispute Type</th>
                            <!-- Add more columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $disputedDisputes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dispute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($dispute->complainant_id === Auth::user()->id): ?>
                                <tr>
                                    <td><?php echo e($dispute->order_id); ?></td>
                                    <td><?php echo e($dispute->subject); ?></td>
                                    <td><?php echo e($dispute->topic); ?></td>
                                    
                                    <td><?php echo e($dispute->dispute_type); ?></td>
                                    <!-- Add more columns as needed -->
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/disputed/index.blade.php ENDPATH**/ ?>