<?php $__env->startSection('content'); ?>
<section class="content-header" style="background-color: #f9f7f4;">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Create Orders</h1>
            </div>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: pink-100">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Orders</li>
            </ol>
        </nav>
    </div>
</section>



    <div class="content px-3">

        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="card">

        <?php echo Form::open(['route' => 'ordars.store', 'enctype' => 'multipart/form-data']); ?>

            <div class="card-body">

                <div class="row">
                    <?php echo $__env->make('ordars.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

            </div>

           

            <?php echo Form::close(); ?>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/ordars/create.blade.php ENDPATH**/ ?>