<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-ui-adminlte::components.adminlte-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('laravel-ui-adminlte::adminlte-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Bank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                                
                    </li>
                    

            <!-- First column -->
            <div class="col">
                <div class="badge bg-danger">
                    Account No: <?php echo e(auth()->user()->id); ?>

                </div>
            </div>

            <div class="col">
                <div class="badge bg-danger">
                    My subscription: <?php echo e(auth()->user()->id); ?>

                </div>
            </div>

          


                </ul>
                    <li class="nav-item">
                        <button type="button" class="btn btn-success btn-sm badge-button" data-bs-toggle="modal"
                            data-bs-target="#paymentModal">
                            <span class="badge bg-primary" style="font-size: 13px;">Deposit Funds</span>
                        </button>
                    </li>
                    <li class="nav-item" style="margin: 0 10px;">
                        <button type="button" class="btn btn-success btn-sm badge-button" data-bs-toggle="modal"
                            data-bs-target="#confirmationModal">
                            <span class="badge bg-info" style="font-size: 13px;">Confirm</span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button style="font-size: 13px;" type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#transferModal">
                            <i class="fas fa-exchange-alt"></i> Transfer Funds
                        </button>
                    </li>
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="https://assenfyom.com/logo/blue_logo_150x150.png d-flex justify-content-end"
                                class="user-image img-circle elevation-2" alt="user profile">
                        
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-primary">
                                <img src="https://assets.infyom.clogo/blue_logo_150x150.png"
                                    class="img-circle elevation-2" alt="User profile">
                                <p bg-secondary>
                                    <?php echo e(Auth::user()->name); ?>

                                    <small>Member since <?php echo e(Auth::user()->created_at->format('M. Y')); ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                            <a href="<?php echo e(route('employer.profile')); ?>" class="btn btn-default btn-flat">View Profile</a>

                                <a href="#" class="btn btn-default btn-flat float-right"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign out
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>                                                                                              
    


    <div class="modal fade" id="transferModal" tabindex="-1" aria-labelledby="transferModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transferModalLabel">Enter The ID Of The ecipient.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- resources/views/your-blade-file.blade.php -->


            <form method="post" action="<?php echo e(route('transfer.submit')); ?>" id="payment-form">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User ID:</label>
                        <input type="text" name="user_id" id="user_id" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount:</label>
                        <input type="number" name="amount" id="amount" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Transfer</button>
                </div>
            </form>
        </div>
    </div>
</div>























    

<!-- Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirmation: eg RG12EWB5XW</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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

                <div class="card">
                    <div class="card-body text-center">
                        <form method="POST" action="<?php echo e(route('confirmation.confirm')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label for="MpesaReceiptNumber">Mpesa Receipt Number received via SMS</label>
                                <input type="text" id="MpesaReceiptNumber" name="MpesaReceiptNumber" style="width: 200px;" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











<!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Make Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo e(route('stkpush')); ?>" id="payment-form">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
    <label for="amount" class="form-label">Amount</label>
    <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter the amount" required>
</div>

<div class="mb-3">
    <label for="partyA" class="form-label">Phone no</label>
    <input type="text" class="form-control" id="phoneno" name="phoneno" placeholder="e.g., 071234568" required>
</div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    
  


                <!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">
</head>

  

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>











    <ul class="navbar-nav ml-auto">
              
            </nav>

            <!-- Left side column. contains the logo and sidebar -->
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <!-- Main Footer -->
         
        </div>
    </body>
    <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b>1
                </div>
                <strong>Copyright &copy; 2023 <a href="https://adminlte.io">writers and employers</a>.</strong> All rights
                reserved.
            </footer>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/layouts/app.blade.php ENDPATH**/ ?>