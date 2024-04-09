

<?php $__env->startSection('content'); ?>

<div class="alert alert-secondary" role="alert">
    <strong>Well done!</strong> the ammount will be deducted  from your wallet
</div>


<div class="row">
    
    <div class="col-md-4">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-money-bill"></i> Pay Monthly</h5>
                <p class="card-text">Ksh 475</p>

            </div>
            <div>
            <button type="button" class="btn btn-primary btn-sm badge-button" data-bs-toggle="modal" data-bs-target="#paymentModall">
       <span id="balance"> Deposit funds</span>
        </button>
        </div>
        </div>
    </div>








    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModall" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Make Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method="post" action="<?php echo e(route('usersubscriptions')); ?>" id="payment-form">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
            <input type="hidden" name="amount" value="475">
          </div>

<div class="mb-3">
<label for="password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
</div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>







    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModalll" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Make Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method="post" action="<?php echo e(route('usersubscriptions')); ?>" id="payment-form">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
            <input type="hidden" name="amount" value="250">
          </div>

<div class="mb-3">
<label for="password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
</div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModallk" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Make Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form method="post" action="<?php echo e(route('usersubscriptions')); ?>" id="payment-form">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
            <input type="hidden" name="amount" value="140">
          </div>

<div class="mb-3">
<label for="password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
</div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>





    
    <div class="col-md-4">
        <div class="card bg-warning text-white">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-calendar-alt"></i> two week plan </h5>
                <p class="card-text">Ksh 250</p>
            </div>
            <button type="button" class="btn btn-success btn-sm badge-button" data-bs-toggle="modal" data-bs-target="#paymentModalll">
       <span id="balance"> Deposit funds</span>
        </button>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-info text-white">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-money-check"></i> Pay Weekly</h5>
                <p class="card-text">Ksh 140</p>
            </div>
            <div>
            <button type="button" class="btn btn-success btn-sm badge-button" data-bs-toggle="modal" data-bs-target="#paymentModallk">
       <span id="balance"> Deposit funds</span>
        </button>
        </div>
        </div>
    </div>
  
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/subscription/index.blade.php ENDPATH**/ ?>