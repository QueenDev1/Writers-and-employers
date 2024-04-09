








<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Raise a Dispute</h2>
    
<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

    <form method="POST" action="<?php echo e(route('disputes.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="oder_id">order  id</label>
            <input type="text" class="form-control" name="order_id" required>
        </div>
       
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" name="subject" required>
        </div>
        <div class="form-group">
            <label for="topic">Topic:</label>
            <input type="text" class="form-control" name="topic" required>
        </div>


        <div class="form-group">
            <label for="user_id">User account id:</label>
            <input type="text" class="form-control" name="user_id" required>
        </div>
       
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" name="dispute_type" rows="4" required></textarea>
        </div>
        <!-- Add more input fields for other columns in the disputedbids table if needed -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/disputed/employerdisputes.blade.php ENDPATH**/ ?>