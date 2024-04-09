

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">

    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-3 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Available Orders</h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-box bg-success">

          </div>
          <h2 class="text-success">0</h2>
        </div>
        <i class="fas fa-shopping-cart"></i>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Account Balance</h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-box bg-secondary">
            <!-- Add the desired icon class here -->
          </div>
          <h2 class="text-primary" style=" font-size: 14px;">KES: <?php echo e($totalAmount); ?></h2>

        </div>
        <i class="fas fa-wallet"></i>
        <h2 class="text-primary" style=" font-size: 14px;">KES: <?php echo e($totalAmount); ?></h2>
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      
      </div>
    </div>
  </div>

  <div class="col-md-3 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">In progress Orders</h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-box bg-primary">
          
          </div>
          <h2 class="text-primary">0</h2>
        </div>

        <i class="fas fa-spinner fa-spin"></i>

        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">In review</h5>
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-box bg-warning">
          
          </div>
          <h2 class="text-warning">0</h2>
        </div>
        <i class="fas fa-check-circle"></i>

        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
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
  <div class="container">
  <div class="row">
    <div class="col-md-4 col-sm-6 col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Completed</h5>
          <div class="d-flex justify-content-between align-items-center">
            <div class="icon-box bg-info">
              <i class="bi bi-clock"></i>
            </div>
            <h2 class="text-info">0</h2>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Revision</h5>
          <div class="d-flex justify-content-between align-items-center">
            <div class="icon-box bg-danger">
              <i class="bi bi-x"></i>
            </div>
            <h2 class="text-danger">0</h2>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Desputed</h5>
          <div class="d-flex justify-content-between align-items-center">
            <div class="icon-box bg-primary">
              <i class="bi bi-plus"></i>
            </div>
            <h2 class="text-primary">0</h2>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

   
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
            <div class="card card-lg"> <!-- Add the custom class "card-lg" to the card element -->
                <div class="card-body">
                    <h5 class="card-title">Ratings</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="icon-box bg-success">
                            <i class="bi bi-bookmark-check"></i>
                        </div>
                        <h2 class="text-success">0/5</h2>
                    </div>
                    <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
          </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 col-12">
            <div class="card card-lg"> <!-- Add the custom class "card-lg" to the card element -->
                <div class="card-body">
                    <h5 class="card-title">pending payments</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="icon-box bg-warning">
                            <i class="bi bi-clock"></i>
                        </div>
                        <h2 class="text-warning">0</h2>
                    </div>
                    <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
          </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 col-12">
            <div class="card card-lg"> <!-- Add the custom class "card-lg" to the card element -->
                <div class="card-body">
                    <h5 class="card-title">Total paid</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="icon-box bg-danger">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        <h2 class="text-danger">0</h2>
                    </div>
                    <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
          </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div>
<h4 class="subjects-heading" style="margin-left: 20px; margin-right: 20px; font-size: 16px;">Subjects</h4>

  <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <button class="btn btn-light subject-badge" style="margin-left: 10px; margin-right: 10px;"><?php echo e($subject->name); ?></button>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>





<div class="container">
  <div class="untrusted-employers">
    <h3 class="untrusted-heading">Untrusted employers (latest)</h3>
    <table class="table table-bordered">
      <thead class="table-success">
        <tr>
          <th scope="col">name</th>
          <th scope="col">social.m name</th>
          <th scope="col">TEL</th>
          <th scope="col">email</th>
        </tr>
      </thead>
      <tbody>
        <!-- Table rows with data can be added here -->
      </tbody>
    </table>
  </div>
</div>



<div class="container">
  <h2 class="text-center mb-4">Transactions</h2>
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

<?php echo $__env->make('layouts.userlte', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/user/home.blade.php ENDPATH**/ ?>