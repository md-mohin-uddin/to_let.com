<?php $__env->startSection('content'); ?>

<div style="background: #F5F5FA; padding:80px">

<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><?php echo e(__('Change Your Password')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('update.password')); ?>" aria-label="<?php echo e(__('Reset Password')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="oldpass" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Old Password')); ?></label>

                            <div class="col-md-6">
                                <input id="oldpass" type="password" class="form-control<?php echo e($errors->has('oldpass') ? ' is-invalid' : ''); ?>" name="oldpass" value="<?php echo e($oldpass ?? old('oldpass')); ?>" required autofocus>

                                <?php if($errors->has('oldpass')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('oldpass')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Password Change')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<!----------User Profile--------------->
        <div class="col-4">     <!---------------------------------------------->
            <div class="col-4">
                 <div class="card" style="width: 18rem;">

                    <a href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e(asset('public/avatar.jpg')); ?>" class="card-img-top mt-3" style="height: 90px; width: 90px; margin-left: 34%;">
                    </a>
                    <div class="card-body more moreApp" style="margin-left: 80px;">
                        <a href="<?php echo e(route('home')); ?>" class="button-pipaluk button--inverted text-primary px-4 pt-1"> <h4 class="text-center"><?php echo e(Auth::user()->name); ?></h4></a>
                    </div>

                    <ul class="list-group list-group-flush ml-4">
                        <li class="list-group-item more moreS py-1"><a href="<?php echo e(route('home')); ?>" class="button-pipaluk button--inverted px-5 py-2 text-primary ml-4">My Profile </a></li>
                        <li class="list-group-item more moreS py-1"><a href="<?php echo e(route('edit.user.profile')); ?>" class="button-pipaluk button--inverted px-5 py-2 text-primary ml-4"> Edit Profile </a></li>
                        <li class="list-group-item more moreS py-1"><a href="<?php echo e(route('add.property.user')); ?>" class="button-pipaluk button--inverted pl-4 py-2 text-primary ml-4" style="padding-right:35px;">Add My Property</a></li>
                    </ul>
                    <div class="card-body more more2 p-1">
                        <a href="<?php echo e(route('user.logout')); ?>" class="btn bg-transparent text-white button-pipaluk button--inverted btn-block btn-sm py-1" style="font-size:15px;">Logout</a>
                    </div>
                </div>
               </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/auth/changepassword.blade.php ENDPATH**/ ?>