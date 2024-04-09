<!-- resources/views/disputedbids/index.blade.php -->
 <!-- Assuming you have a master layout file -->

<?php $__env->startSection('content'); ?>
    <h1>Disputed Bids</h1>

    <div class="table-responsive"> <!-- To ensure the table is responsive on smaller screens -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order ID</th>
                    <th>Subject</th>
                    <th>Topic</th>
                    <th>User ID</th>
                    <th>Status</th>
                    <th>Dispute Type</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Complainant ID</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $disputedBids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disputedBid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($disputedBid->status === 'disputed'): ?>
                        <tr>
                            <td><?php echo e($disputedBid->id); ?></td>
                            <td><?php echo e($disputedBid->order_id); ?></td>
                            <td><?php echo e($disputedBid->subject); ?></td>
                            <td><?php echo e($disputedBid->topic); ?></td>
                            <td><?php echo e($disputedBid->user_id); ?></td>
                            <td><?php echo e($disputedBid->status); ?></td>
                            <td><?php echo e($disputedBid->dispute_type); ?></td>
                            <td><?php echo e($disputedBid->created_at); ?></td>
                            <td><?php echo e($disputedBid->updated_at); ?></td>
                            <td><?php echo e($disputedBid->complainant_id); ?></td> <!-- Corrected the typo in 'complainant_id' -->
                        </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.receptionistapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/viewdisputedbids/index.blade.php ENDPATH**/ ?>