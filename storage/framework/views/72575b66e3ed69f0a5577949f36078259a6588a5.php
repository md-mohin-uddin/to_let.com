<?php $__env->startSection('content'); ?>

<?php
  $profile=DB::table('users')->where('id',Auth::id())->first();
?>

    <div class="contact_form py-5" style="background: #F5F5FA">
        <div class="container py-3">
            <div class="row">

<!--------------- Register Form --------------->
    <div class="col-md-6 offset-md-1 logreg" data-aos="fade-right">
        <div class="contact_form_container">
            <h3 class="contact_form_title text-center text-primary">Update Profile</h3>

            <form action="<?php echo e(url('update/user/profile/'.$profile->id)); ?>" id="contact_form" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name </label>
                    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Full Name" name="name" value="<?php echo e($profile->name); ?>" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone </label>
                    <input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" aria-describedby="emailHelp" placeholder="Enter Phone" value="<?php echo e($profile->phone); ?>" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" aria-describedby="emailHelp" placeholder="Enter Email" value="<?php echo e($profile->email); ?>" required="">
                </div>
                <div class="contact_form_button more more2">
                    <button type="submit" class="btn btn-block bg-transparent text-white button-pipaluk button--inverted px-4 py-1" style="font-size:16px;">Submit</button>
                </div>
            </form>

        </div>
    </div>



<!------User-Profile----------------------->
            <div class="col-4 offset-md-1" data-aos="fade-left">
                <div class="card" style="width: 18rem;">

                <a href="<?php echo e(route('home')); ?>">
                    <img src="<?php echo e(asset('public/avatar.jpg')); ?>" class="card-img-top rounded-circle mt-3" style="height: 90px; width: 90px; margin-left: 34%;">
                </a>
                <div class="card-body more moreApp" style="margin-left: 80px;">
                    <a href="<?php echo e(route('home')); ?>" class="button-pipaluk button--inverted text-primary px-4 pt-1"> <h4 class="text-center"><?php echo e(Auth::user()->name); ?></h4></a>
                </div>

                <ul class="list-group list-group-flush ml-4">
                <li class="list-group-item more moreS py-1"><a href="<?php echo e(route('home')); ?>" class="button-pipaluk button--inverted px-5 py-2 text-primary ml-4">My Profile </a></li>
                <li class="list-group-item more moreS py-1"><a href="<?php echo e(route('password.change')); ?>" class="button-pipaluk button--inverted px-4 py-2 text-primary ml-4"> Change Password </a></li>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HouseRental\resources\views/pages/edit_profile.blade.php ENDPATH**/ ?>