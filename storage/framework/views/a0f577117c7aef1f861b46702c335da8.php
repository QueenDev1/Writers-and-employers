

<?php $__env->startSection('content'); ?>


<h2>All Orders</h2>

<?php if(session('alert_message')): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo session('alert_message'); ?>

    </div>
<?php endif; ?>

<table class="table table-striped table-bordered">
  <thead class="table-success">
    <tr>
    <th>User Name</th>
      <th>Order ID</th>

      <th>Subject</th>
      <th>Topic</th>
      <th>Pages</th>
      <th>Budget (KES)</th>
      <th>Duration</th>
      <th>status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $ordars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
      <td>
          <!-- Display the user name related to the user_id -->
          <?php if($order->user): ?>
            <?php echo e($order->user->name); ?>

          <?php else: ?>
            N/A <!-- If the user is not found, display N/A or any other default value -->
          <?php endif; ?>
        </td>
        <td>
          <a href="<?php echo e(route('orders.show', $order->id)); ?>"><?php echo e($order->id); ?></a>
        </td>
        <td><?php echo e($order->subject); ?></td>
        <td><?php echo e($order->Topic); ?></td>
        <td><?php echo e($order->slidecount); ?></td>
        <td><?php echo e($order->ammounttopay." "); ?></td>
        <td>
          <span id="countdown_<?php echo e($order->id); ?>"></span>
          <script>
            // Calculate the remaining time
            var deadline_<?php echo e($order->id); ?> = new Date("<?php echo e($order->writerdeadline); ?>").getTime();
            var now = new Date("<?php echo e(now()); ?>").getTime(); // Use Laravel's now() function to get the current time from the server
            var remainingTime_<?php echo e($order->id); ?> = deadline_<?php echo e($order->id); ?> - now;

            // Update the countdown every second
            var countdownId_<?php echo e($order->id); ?> = setInterval(function() {
              now = new Date().getTime();
              remainingTime_<?php echo e($order->id); ?> = deadline_<?php echo e($order->id); ?> - now;

              // Check if the countdown is finished
              if (remainingTime_<?php echo e($order->id); ?> <= 0) {
                clearInterval(countdownId_<?php echo e($order->id); ?>);
                document.getElementById("countdown_<?php echo e($order->id); ?>").innerHTML =
                  '<i class="fas fa-clock text-danger"></i> Expired';
              } else {
                // Calculate days, hours, minutes, and seconds
                var days = Math.floor(remainingTime_<?php echo e($order->id); ?> / (1000 * 60 * 60 * 24));
                var hours = Math.floor((remainingTime_<?php echo e($order->id); ?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((remainingTime_<?php echo e($order->id); ?> % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((remainingTime_<?php echo e($order->id); ?> % (1000 * 60)) / 1000);

                // Display the countdown
                document.getElementById("countdown_<?php echo e($order->id); ?>").innerHTML =
                  '<i class="fas fa-clock text-success"></i> ' +
                  days + "d " + hours + "h " + minutes + "m " + seconds + "s";
              }
            }, 1000);
          </script>
        </td>
        <td><?php echo e($order->status); ?></td>

        <td>
          <form action="<?php echo e(route('orders.show', $order->id)); ?>" method="GET" style="display: inline;">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-primary btn-sm">Bid</button>
          </form>
        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userlte', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/user/vieworders.blade.php ENDPATH**/ ?>