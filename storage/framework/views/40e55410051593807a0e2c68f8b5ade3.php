

<?php $__env->startSection('content'); ?>
<h2>My Bids</h2>

<table class="table table-striped table-bordered">
  <thead class="table-success">
    <tr>
      <th>Employer ID</th>
      <th>Bid ID</th>
      <th>Comment</th>
      <th>Order ID</th>
      <th>Status</th>
      <th>Employer Comment</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $bids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($bid->status === 'revision'): ?>
        <tr>
          <td><?php echo e($bid->order->user_id ?? 'Anonymous'); ?></td>
          <td><?php echo e($bid->id); ?></td>
          <td><?php echo e($bid->bid_comment); ?></td>
          <td><?php echo e($bid->order_id); ?></td>
          <td><?php echo e($bid->status); ?></td>
          <td><?php echo e($bid->employer_comment); ?></td>
        </tr>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userlte', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/user/revisionbids.blade.php ENDPATH**/ ?>