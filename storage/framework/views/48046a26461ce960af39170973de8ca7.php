<li class="nav-item">
    <a href="<?php echo e(url('user/home')); ?>" class="nav-link <?php echo e(Request::is('home') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(url('available')); ?>" class="nav-link <?php echo e(Request::is('home') ? 'active' : ''); ?>">
    <i class="nav-icon fas fa-check-circle"></i>
        <p>Available</p>
        <span class="badge badge-danger navbar-badge" style="font-size: 1.1em;">0</span>
    </a>

    <li class="nav-item">
    <a href="<?php echo e(url('viewmybids')); ?>" class="nav-link <?php echo e(Request::is('viewmybids') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-eye text-success"></i>
        <p>View</p>
        <span class="badge badge-success navbar-badge" style="font-size: 1.1em;">0</span></span>
        
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(url('discardedbids')); ?>" class="nav-link <?php echo e(Request::is('discardedbids') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-trash text-danger"></i>
        <p>Discarded</p>
        <span class="badge badge-danger navbar-badge" style="font-size: 1.1em;">0</span>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(url('inprogressbids')); ?>" class="nav-link <?php echo e(Request::is('inprogressbids') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-spinner text-warning"></i>
        <p>In Progress</p>
        <span class="badge badge-warning navbar-badge" style="font-size: 1.1em;">0</span>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(url('inreviewbids')); ?>" class="nav-link <?php echo e(Request::is('inreviewbids') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-check-circle text-info"></i>
        <p>In Review</p>
        <span class="badge badge-info navbar-badge" style="font-size: 1.1em;">0</span>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(url('completedbids')); ?>" class="nav-link <?php echo e(Request::is('completedbids') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-check-circle text-success"></i>
        <p>Completed</p>
        <span class="badge badge-success navbar-badge" style="font-size: 1.1em;">0</span>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(url('revisionbids')); ?>" class="nav-link <?php echo e(Request::is('revisionbids') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-edit text-primary"></i>
        <p>Revision</p>
        <span class="badge badge-primary navbar-badge" style="font-size: 1.1em;">0</span>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('dispute.create')); ?>" class="nav-link <?php echo e(Request::is('writerdisputed*') ? 'active' : ''); ?>">
    <i class="nav-icon fas fa-exclamation-triangle text-danger"></i>
    <p>raise dispute<span class="badge badge-danger navbar-badge">0</span></p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(url('disputedbids')); ?>" class="nav-link <?php echo e(Request::is('disputedbids') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-exclamation-circle text-danger"></i>
        <p>Disputed</p>
        <span class="badge badge-danger navbar-badge" style="font-size: 1.1em;">0</span>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(url('transactions')); ?>" class="nav-link <?php echo e(Request::is('transactions') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-money-check-alt text-primary"></i>
        <p>Transactions</p>
        <span class="badge badge-primary navbar-badge" style="font-size: 1.1em;">0</span>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(url('untrustedemployers')); ?>" class="nav-link <?php echo e(Request::is('untrustedemployers') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-user-slash text-danger"></i>
        <p>Untrusted Employers</p>
        <span class="badge badge-danger navbar-badge" style="font-size: 1.1em;">0</span>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(url('subscriptions')); ?>" class="nav-link <?php echo e(Request::is('subscriptions') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-star text-warning"></i>
        <p>Subscription</p>
        <span class="badge badge-warning navbar-badge" style="font-size: 1.1em;">0</span>
    </a>
</li>

<?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/layouts/usermenu.blade.php ENDPATH**/ ?>