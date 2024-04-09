<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-ui-adminlte::components.adminlte-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('laravel-ui-adminlte::adminlte-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<div class="card-body text-center">
    <div class="d-flex justify-content-center">
        <div>
        withdraw
            <button type="button" class="btn btn-success btn-sm badge-button small-button" data-bs-toggle="modal"
                data-bs-target="#withdrawalModal">
                
                <span id="balance">Withdraw funds</span>
            </button>
        </div>
        <div class="d-flex justify-content-center">
            deposit
            <button type="button" class="btn btn-success btn-sm badge-button small-button" data-bs-toggle="modal"
                data-bs-target="#paymentModal">
                <span id="balance">deposit</span>
            </button>
        </div>
        <div>
            confirm
            <button type="button" class="btn btn-success btn-sm badge-button small-button" data-bs-toggle="modal"
                data-bs-target="#confirmationModal">
                <span id="balance">confirm</span>
            </button>
        </div>
        <div class="d-flex justify-content-center">
            user inbox
            <form method="get" action="<?php echo e(url('inbox')); ?>" id="payment-form">
                <button type="submit" class="btn btn-primary small-button">
                    <i class="fas fa-inbox"></i> User inbox
                </button>
            </form>
        </div>
    </div>
</div>

<style>
    .small-button {
        font-size: 12px;
    }
</style>



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
                    <form method="post" action="<?php echo e(route('stkpushh')); ?>" id="payment-form">
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
    <label for="partyA" class="form-label">Phone number</label>
    <input type="text" class="form-control" id="phoneno" name="phoneno" placeholder="e.g., 0712345678" required>
</div>
                    <div class="mb-3">
    <label for="amount" class="form-label">Amount</label>
    <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter the amount" required>
</div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>












    <!-- Withdrawal Modal -->
    <div class="modal fade" id="withdrawalModal" tabindex="-1" aria-labelledby="withdrawalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="withdrawalModalLabel">Withdraw Funds</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method=" action=""  id="withdrawal-form">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="text" class="form-control" id="amount" name="amount"
                                placeholder="Enter the amount" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter your password" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add event listener to the form submit button
        document.getElementById("withdrawal-form").addEventListener("submit", function(event) {
            // Get the password input value
            var password = document.getElementById("password").value;

            // Check if the password meets your criteria
            if (password.length < 8) {
                alert("Password must be at least 8 characters long.");
                event.preventDefault(); // Prevent form submission
            }
        });
    </script>






















    
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Main Header -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                                
                    </li>
                </ul>





















<ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="https://assenfyom.com/logo/blue_logo_150x150.png"
                                class="user-image img-circle elevation-2" alt="User Image">
                            <span class="d-none d-md-inline   bg-secondary"><?php echo e(Auth::user()->name); ?></span>
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
                            <a href="<?php echo e(route('writer.profile')); ?>" class="btn btn-default btn-flat">View Profile</a>

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
            </nav>

            <!-- Left side column. contains the logo and sidebar -->
            <?php echo $__env->make('layouts.usersidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/layouts/userlte.blade.php ENDPATH**/ ?>