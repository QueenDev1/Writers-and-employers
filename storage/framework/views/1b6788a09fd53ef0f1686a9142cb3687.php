<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-ui-adminlte::components.adminlte-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('laravel-ui-adminlte::adminlte-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<body class="hold-transition login-page">
   
   <!-- Add this code to display success message -->
<?php if(session('success')): ?>
   <div class="alert alert-success">
       <?php echo e(session('success')); ?>

   </div>
<?php endif; ?>

<!-- Add this code to display error message -->
<?php if(session('error')): ?>
   <div class="alert alert-danger">
       <?php echo e(session('error')); ?>

   </div>
<?php endif; ?>

       <div class="container d-flex justify-content-center align-items-center vh-100">
           <div class="login-box shadow rounded-lg">
               <div class="login-logo text-center mb-3">
              
               
                       <h4 class="mb-0">admin panel</h4>
                   </a>
               </div>
               <!-- /.login-logo -->

               <!-- /.login-box-body -->
               <div class="card">
                   <div class="card-body login-card-body">
                       <p class="login-box-msg">Sign in </p>

                       <form method="post" action="<?php echo e(url('/login')); ?>">
                           <?php echo csrf_field(); ?>

                           <div class="input-group mb-3">
                               <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email"
                                   class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                               <div class="input-group-append">
                                   <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                               </div>
                               <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                   <span class="error invalid-feedback"><?php echo e($message); ?></span>
                               <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                           </div>

                           <div class="input-group mb-3">
                               <input type="password" name="password" placeholder="Password"
                                   class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                               <div class="input-group-append">
                                   <div class="input-group-text">
                                       <span class="fas fa-lock"></span>
                                   </div>
                               </div>
                               <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                   <span class="error invalid-feedback"><?php echo e($message); ?></span>
                               <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                           </div>

                           <div class="row">
                               <div class="col-8">
                                   <div class="icheck-primary">
                                       <input type="checkbox" id="remember">
                                       <label for="remember">Remember Me</label>
                                   </div>
                               </div>

                               <div class="col-4">
                                   <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                               </div>

                           </div>
                       </form>

                       <p class="mb-1">
                           <a href="<?php echo e(route('password.request')); ?>">I forgot my password</a>
                       </p>
                    
                   </div>
                   <!-- /.login-card-body -->
               </div>

           </div>
           <!-- /.login-box -->
       </div>

       <!-- Add Bootstrap CSS link if not already included -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   </body>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\employers\public_html\resources\views/my-view.blade.php ENDPATH**/ ?>