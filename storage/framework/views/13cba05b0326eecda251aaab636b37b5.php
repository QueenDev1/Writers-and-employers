<li class="nav-item">
    <a href="" class="nav-link <?php echo e(Request::is('accountant') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
<a href="<?php echo e(url('/viewdisputedbids')); ?>" class="nav-link <?php echo e(Request::is('viewdisputedbids') ? 'active' : ''); ?>">
            <i class="nav-icon fas fa-exclamation-circle"></i>
            <p>Manage Complaints</p>
        </a>
    </li>

    <li class="nav-item">
<a href="inbox">
            <i class="nav-icon fas inbox"></i>
            <p>inbox</p>
        </a>
    </li><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/layouts/receptionistmenu.blade.php ENDPATH**/ ?>