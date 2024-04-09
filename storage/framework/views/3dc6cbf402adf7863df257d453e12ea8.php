<li class="nav-item">
    <a href="<?php echo e(route('accountant.home')); ?>" class="nav-link <?php echo e(Request::is('accountant.home') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="" class="nav-link <?php echo e(Request::is('') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-exchange-alt"></i>
        <p>all transactions</p>
    </a>
</li>
<?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/layouts/accountantmenu.blade.php ENDPATH**/ ?>