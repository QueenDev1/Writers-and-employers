

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Drafts Orders</h1>
    
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

  
<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="ordars-table">
            <thead>
            <tr>
                <th>Subject</th>
                <th>Topic</th>
                <th>Description</th>
                <th>Files</th>
                <th>Accountname</th>
                <th>Accountoredrnumber</th>
                <th>Papertype</th>
                <th>Paperlavel</th>
                <th>Format</th>
                <th>Language</th>
                <th>Slidecount</th>
                <th>Noofsources</th>
                <th>Spacing</th>
                <th>Nature</th>
                <th>Ammounttopay</th>
                <th>Actualdeadline</th>
                <th>Writerdeadline</th>
                <th>Paymentdate</th>
                <th>Writer</th>
                <th>Allocationmode</th>
                <th colspan="3">Action</th>
            </tr>
           
            </thead>
            <tbody>
            <?php $__currentLoopData = $ordars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ordar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ordar->user_id === Auth::id() && $ordar->allocationmode === 'drafts'): ?>
                <tr>
                    <td><?php echo e($ordar->subject); ?></td>
                    <td><?php echo e($ordar->Topic); ?></td>
                    <td><?php echo e($ordar->Description); ?></td>
                    <td><?php echo e($ordar->files); ?></td>
                    <td><?php echo e($ordar->accountname); ?></td>
                    <td><?php echo e($ordar->accountoredrnumber); ?></td>
                    <td><?php echo e($ordar->papertype); ?></td>
                    <td><?php echo e($ordar->paperlavel); ?></td>
                    <td><?php echo e($ordar->format); ?></td>
                    <td><?php echo e($ordar->language); ?></td>
                    <td><?php echo e($ordar->slidecount); ?></td>
                    <td><?php echo e($ordar->noofsources); ?></td>
                    <td><?php echo e($ordar->spacing); ?></td>
                    <td><?php echo e($ordar->nature); ?></td>
                    <td><?php echo e($ordar->ammounttopay); ?></td>
                    <td><?php echo e($ordar->actualdeadline); ?></td>
                    <td><?php echo e($ordar->writerdeadline); ?></td>
                    <td><?php echo e($ordar->paymentdate); ?></td>
                    <td><?php echo e($ordar->writer); ?></td>
                    <td><?php echo e($ordar->allocationmode); ?></td>
                    <td style="width: 120px">
                        <?php echo Form::open(['route' => ['ordars.destroy', $ordar->id], 'method' => 'delete']); ?>

                        <div class='btn-group'>
                            <a href="<?php echo e(route('ordars.show', [$ordar->id])); ?>"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('ordars.edit', [$ordar->id])); ?>"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                        </div>
                        <?php echo Form::close(); ?>

                    </td>
                </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<style>
#ordars-table {
  font-size: 12px;
}
</style><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/drafts/index.blade.php ENDPATH**/ ?>