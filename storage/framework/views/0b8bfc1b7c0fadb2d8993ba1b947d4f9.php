

<?php $__env->startSection('content'); ?>
<div class="container" style="margin: 5px auto;">
  <div class="row">
    <div class="col-md-11">
    <h2>Order Details</h2>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <!-- Your content rows go here -->

        <div class="row">
          <strong>ID:</strong>
          <div class="col-md-8">
            <?php echo e($order->id); ?>

          </div>
        </div>

        <div class="row mt-3">
          <strong>Subject:</strong>
          <div class="col-md-8">
            <?php echo e($order->subject); ?>

          </div>
        </div>

        <div class="row mt-3">
          <strong>Topic:</strong>
          <div class="col-md-8">
            <?php echo e($order->Topic); ?>

          </div>
        </div>

        <div class="row mt-3">
          <strong>paper type:</strong>
          <div class="col-md-8">
            <?php echo e($order->papertype); ?>

          </div>
        </div>

        <div class="row mt-3">
          <strong>paper lavel:</strong>
          <div class="col-md-8">
            <?php echo e($order->paperlavel); ?>

          </div>
        </div>

        <div class="row mt-3">
          <strong>no of sources:</strong>
          <div class="col-md-8">
            <?php echo e($order->noofsources); ?>

          </div>
        </div>
      </div> <!-- End of first column -->

      <div class="col-md-6">
        <!-- Continue adding other fields -->

        <div class="row mt-3">
          <strong>format:</strong>
          <div class="col-md-8">
            <?php echo e($order->format); ?>

          </div>
        </div>

        <div class="row mt-3">
          <strong>language:</strong>
          <div class="col-md-8">
            <?php echo e($order->language); ?>

          </div>
        </div>

        <div class="row mt-3">
          <strong>slide count:</strong>
          <div class="col-md-8">
            <?php echo e($order->slidecount); ?>

          </div>
        </div>

        <div class="row mt-3">
          <strong>spacing:</strong>
          <div class="col-md-8">
            <?php echo e($order->spacing); ?>

          </div>
        </div>

        <div class="row mt-3">
          <strong>nature:</strong>
          <div class="col-md-8">
            <?php echo e($order->nature); ?>

          </div>
        </div>

        <div class="row mt-3">
          <strong>amount to pay in ksh:</strong>
          <div class="col-md-8">
            <?php echo e($order->ammounttopay); ?>

          </div>
        </div>
      </div> <!-- End of second column -->
    </div> <!-- End of row -->
  </div> <!-- End of card-body -->
</div> <!-- End of card -->

       
            <strong>Description:</strong>
            <div class="col-md-8">
              <?php echo e($order->Description); ?>

            </div>
          

          <div class="row mt-3">
            <div class="col-md-4">
              <strong>Files:</strong>
            </div>
            <div class="col-md-8">
              <?php if(Session::has('error')): ?>
              <div class="alert alert-danger">
                <?php echo e(Session::get('error')); ?>

              </div>
              <?php endif; ?>

              <?php if(!empty($order->files)): ?>
              <a href="<?php echo e(route('order.download', ['orderId' => $order->id])); ?>" class="btn btn-primary"><span class="mr-2"><i class="fas fa-download"></i></span>Download File</a>
              <?php endif; ?>
            </div>
          </div>

          <div class="bid-section mt-4">
    <h4>Bidding Section</h4>
    <form method="POST" action="<?php echo e(route('bids.store')); ?>">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
      <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit Bid</button>
    </form>
  </div>
</div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userlte', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/user/bid.blade.php ENDPATH**/ ?>