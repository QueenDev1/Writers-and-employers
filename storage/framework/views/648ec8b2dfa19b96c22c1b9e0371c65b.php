

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Status Update</h1>

        <form action="<?php echo e(route('ordars.updateStatus', $ordar->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
    <label for="status">select Status</label>
    <select class="form-control" id="status" name="status">
        <option value="inprogress" <?php echo e($ordar->status === 'inprogress' ? 'selected' : ''); ?>>In Progress</option>
        <option value="inrevision" <?php echo e($ordar->status === 'inrevision' ? 'selected' : ''); ?>>In Revision</option>
        <option value="completed" <?php echo e($ordar->status === 'completed' ? 'selected' : ''); ?>>Completed</option>
    </select>
</div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/ordars/status.blade.php ENDPATH**/ ?>