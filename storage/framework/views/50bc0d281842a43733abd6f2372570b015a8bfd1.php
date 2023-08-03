<?php $__env->startSection('content'); ?>

<?php
  $profile=DB::table('users')->where('id',Auth::id())->first();
?>

<div class="contact_form py-5" style="background: #F5F5FA">
    <div class="container py-3">
        <div class="row">

            <div class="col-md-7 mt-5 mr-5 ml-5" data-aos="fade-right">
                <h3 class="bg-white p-2 mt-2 text-success" style="background-color: #e1f1e9e5; font-size:29px;">Profile Info :</h3>
                <div class="bg-white">
                    <table class="table table-hover" style="font-size: 16px;">
                        <tr>
                            <td class="border-0">Name :</td>                   <!--class="border-0"-->
                            <td class="border-0"><?php echo e($profile->name); ?></td>    <!--class="border-0"-->
                        </tr>
                        <tr>
                            <td>Email :</td>
                            <td><?php echo e($profile->email); ?></td>
                        </tr>
                        <tr>
                            <td>Phone :</td>
                            <td><?php echo e($profile->phone); ?></td>
                        </tr>
                    </table>
                </div> <!---end col-md-5--->
            </div>


<!------User-Profile----------------------->
            <div class="col-4" data-aos="fade-left">
                <div class="card" style="width: 18rem;">

                    <a href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e(asset('public/avatar.jpg')); ?>" class="card-img-top rounded-circle mt-3" style="height: 90px; width: 90px; margin-left: 34%;">
                    </a>
                    <div class="card-body more moreApp" style="margin-left: 80px;">
                        <a href="<?php echo e(route('home')); ?>" class="button-pipaluk button--inverted text-primary px-4 pt-1"> <h4 class="text-center"><?php echo e(Auth::user()->name); ?></h4></a>
                    </div>

                    <ul class="list-group list-group-flush ml-4">
                    <li class="list-group-item more moreS py-1"><a href="<?php echo e(route('password.change')); ?>" class="button-pipaluk button--inverted px-4 py-2 text-primary ml-4"> Change Password </a></li>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HouseRental\resources\views/home.blade.php ENDPATH**/ ?>
