<?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>

                <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
                <?php endif; ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-3 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Completed Orders</h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-box bg-success">
            <i class="bi bi-bookmark-check"></i>
          </div>
          <h2 class="text-success">0</h2>
        </div>
        <div class="progress mt-4">
          <div class="progress-bar bg-success" style="width: 70%"></div>
        </div>
        <p class="mt-2 mb-0">KES 0.00</p>
      </div>
    </div>
  </div>
  
 <div class="col-md-3 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">account ballance</h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-box bg-primary">
            <i class="bi bi-people"></i>
          </div>
          <h2 class="text-primary"> <?php echo e($totalAmount); ?></h2>
        </div>
        <div class="progress mt-4">
          <div class="progress-bar bg-info" style="width: 50%"></div>
        </div>
        <p class="mt-2 mb-0">KES <?php echo e($totalAmount); ?></p>
      </div>
    </div>
  </div>



  <div class="col-md-3 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Public Orders</h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-box bg-primary">
            <i class="bi bi-people"></i>
          </div>
          <h2 class="text-primary">0</h2>
        </div>
        <div class="progress mt-4">
          <div class="progress-bar bg-info" style="width: 50%"></div>
        </div>
        <p class="mt-2 mb-0">KES 0.00</p>
      </div>
    </div>
  </div>

  <div class="col-md-3 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Escrowed Orders</h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-box bg-warning">
            <i class="bi bi-file-earmark-check"></i>
          </div>
          <h2 class="text-warning">0</h2>
        </div>
        <div class="progress mt-4">
          <div class="progress-bar bg-warning" style="width: 40%"></div>
        </div>
        <p class="mt-2 mb-0">KES 0.00</p>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <!-- Existing cards -->
  <div class="col-md-4 col-sm-6 col-12">
    <div class="card">
      <!-- Card content -->
    </div>
  </div>
  <div class="col-md-4 col-sm-6 col-12">
    <div class="card">
      <!-- Card content -->
    </div>
  </div>
  <div class="col-md-4 col-sm-6 col-12 d-flex justify-content-end">
    <div class="card">
      <!-- Card content -->
    </div>
  </div>

  <!-- New cards -->
  <div class="col-md-4 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Orders In Progress</h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-box bg-info">
            <i class="bi bi-clock"></i>
          </div>
          <h2 class="text-info">0</h2>
        </div>
        <div class="progress mt-4">
          <div class="progress-bar bg-info" style="width: 30%"></div>
        </div>
        <p class="mt-2 mb-0">KES 0.00</p>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Unconfirmed Orders</h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-box bg-danger">
            <i class="bi bi-x"></i>
          </div>
          <h2 class="text-danger">0</h2>
        </div>
        <div class="progress mt-4">
          <div class="progress-bar bg-danger" style="width: 20%"></div>
        </div>
        <p class="mt-2 mb-0">KES 0.00</p>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Submitted Orders</h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-box bg-secondary">
            <i class="bi bi-check-circle"></i>
          </div>
          <h2 class="text-secondary">0</h2>
        </div>
        <div class="progress mt-4">
          <div class="progress-bar bg-secondary" style="width: 50%"></div>
        </div>
        <p class="mt-2 mb-0">KES 0.00</p>
      </div>
    </div>
  </div>
</div>



<div class="row">
<div class="col-md-4 col-sm-6 col-12">
  <div class="card bg-info">
    <div class="card-body">
      <h5 class="card-title text-white">Orders in Progress</h5>
      <div class="d-flex justify-content-between align-items-center">
        <div class="icon-box bg-white">
          <i class="bi bi-clock"></i>
        </div>
        <h2 class="text-white">0</h2>
      </div>
      <div class="progress mt-4">
        <div class="progress-bar bg-white" style="width: 30%"></div>
      </div>
      <p class="mt-2 mb-0 text-white">KES 0.00</p>
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 col-12">
  <div class="card bg-white">
    <div class="card-body">
      <h5 class="card-title">Paid Orders</h5>
      <div class="d-flex justify-content-between align-items-center">
        <div class="icon-box bg-info">
          <i class="bi bi-currency-dollar"></i>
        </div>
        <h2 class="text-info">0</h2>
      </div>
      <div class="progress mt-4">
        <div class="progress-bar bg-info" style="width: 50%"></div>
      </div>
      <p class="mt-2 mb-0">KES 0.00</p>
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 col-12">
  <div class="card bg-white">
    <div class="card-body">
      <h5 class="card-title">Unpaid Orders</h5>
      <div class="d-flex justify-content-between align-items-center">
        <div class="icon-box bg-danger">
          <i class="bi bi-x-circle"></i>
        </div>
        <h2 class="text-danger">0</h2>
      </div>
      <div class="progress mt-4">
        <div class="progress-bar bg-danger" style="width: 25%"></div>
      </div>
      <p class="mt-2 mb-0">KES 0.00</p>
    </div>
  </div>
</div>


<div class="col-md-4 col-sm-6 col-12">
  <div class="card bg-primary">
    <div class="card-body">
      <h5 class="card-title text-white">Disputed Orders</h5>
      <div class="d-flex justify-content-between align-items-center">
        <div class="icon-box bg-white">
          <i class="bi bi-exclamation-circle"></i>
        </div>
        <h2 class="text-white">0</h2>
      </div>
      <div class="progress mt-4">
        <div class="progress-bar bg-white" style="width: 15%"></div>
      </div>
      <p class="mt-2 mb-0 text-white">KES 0.00</p>
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 col-12">
  <div class="card bg-success">
    <div class="card-body">
      <h5 class="card-title text-white">Available for Take</h5>
      <div class="d-flex justify-content-between align-items-center">
        <div class="icon-box bg-white">
          <i class="bi bi-check"></i>
        </div>
        <h2 class="text-white">0</h2>
      </div>
      <div class="progress mt-4">
        <div class="progress-bar bg-white" style="width: 5%"></div>
      </div>
      <p class="mt-2 mb-0 text-white">KES 0.00</p>
    </div>
  </div>
</div>
<div class="col-md-4 col-sm-6 col-12">
  <div class="card bg-danger">
    <div class="card-body">
      <h5 class="card-title text-white">Bid Orders</h5>
      <div class="d-flex justify-content-between align-items-center">
        <div class="icon-box bg-white">
          <i class="bi bi-bullseye"></i>
        </div>
        <h2 class="text-white">0</h2>
      </div>
      <div class="progress mt-4">
        <div class="progress-bar bg-white" style="width: 25%"></div>
      </div>
      <p class="mt-2 mb-0 text-white">KES 0.00</p>
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 col-12">
  <div class="card bg-secondary">
    <div class="card-body">
      <h5 class="card-title text-white">Draft Orders</h5>
      <div class="d-flex justify-content-between align-items-center">
        <div class="icon-box bg-white">
          <i class="bi bi-file-earmark"></i>
        </div>
        <h2 class="text-white">0</h2>
      </div>
      <div class="progress mt-4">
        <div class="progress-bar bg-white" style="width: 15%"></div>
      </div>
      <p class="mt-2 mb-0 text-white">KES 0.00</p>
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 col-12">
  <div class="card bg-dark">
    <div class="card-body">
      <h5 class="card-title text-white">Canceled Orders</h5>
      <div class="d-flex justify-content-between align-items-center">
        <div class="icon-box bg-white">
          <i class="bi bi-x-circle"></i>
        </div>
        <h2 class="text-white">0</h2>
      </div>
      <div class="progress mt-4">
        <div class="progress-bar bg-white" style="width: 5%"></div>
      </div>
      <p class="mt-2 mb-0 text-white">KES 0.00</p>
    </div>
  </div>
</div>

<div class="col-md-4 col-sm-6 col-12">
  <div class="card bg-primary">
    <div class="card-body">
      <h5 class="card-title text-white">All Orders</h5>
      <div class="d-flex justify-content-between align-items-center">
        <div class="icon-box bg-white">
          <i class="bi bi-list-check"></i>
        </div>
        <h2 class="text-white">0</h2>
      </div>
      <div class="progress mt-4">
        <div class="progress-bar bg-white" style="width: 100%"></div>
      </div>
      <p class="mt-2 mb-0 text-white">KES 0.00</p>
    </div>
  </div>
</div>







<div class="container">
  <h3 class="text-center mb-4">Transactions</h3>
  <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead class="bg-success">
        <tr>
          <th>Date</th>
          <th>Amount</th>
          <th>Balance</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $cashConfirmations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashConfirmation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($cashConfirmation->created_at); ?></td>
          <td><?php echo e($cashConfirmation->amount); ?></td>
          <td><?php echo e($totalAmount); ?></td>
          <td><?php echo e($cashConfirmation->confirmed); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/home.blade.php ENDPATH**/ ?>