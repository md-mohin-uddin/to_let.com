<?php $__env->startSection('admin_content'); ?>


<?php
  $date=date("d-m-y");
  $month=date("F");
  $year=date('Y');

  $todayOrder=DB::table('interested_properties')->whereIn('status',[0,1])->where('date',$date)->get();
  $delevery=DB::table('user_properties')->where('date',$date)->where('status',3)->sum('total_price');//--'total_price' is DB_field_name
  $month=DB::table('user_properties')->where('month',$month)->where('status',3)->sum('total_price');
  $year=DB::table('user_properties')->where('year',$year)->where('status',3)->sum('total_price');
  $contact=DB::table('contacts')->where('status',0)->get();
  $Property=DB::table('user_properties')->whereIn('status',[1,2])->get();
  //$brand=DB::table('brands')->get();
  $user=DB::table('users')->get();
  $setting=DB::table('sitesetting')->first();
?>

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="<?php echo e(url('admin/home')); ?>"><?php echo e($setting->company_name); ?></a>
        <span class="breadcrumb-item active">Dashboard</span>
        </nav>

        <div class="sl-pagebody">

            <?php if(Auth::user()->user_role == 1): ?>
                <div class="row row-sm">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card pd-20 bg-primary">
                            <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Order</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                            </div><!-- card-header -->
                            <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo e(count($todayOrder)); ?></h3>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col-3 -->

                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                        <div class="card pd-20 bg-info">
                            <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today Delevered</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                            </div><!-- card-header -->
                            <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">৳ <?php echo e(number_format($delevery)); ?></h3>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col-3 -->

                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                        <div class="card pd-20 bg-sl-primary">
                            <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month </h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                            </div><!-- card-header -->
                            <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">৳ <?php echo e(number_format($month)); ?></h3>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col-3 -->

                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                        <div class="card pd-20 bg-purple">
                            <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                            </div><!-- card-header -->
                            <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">৳ <?php echo e(number_format($year)); ?></h3>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col-3 -->
                </div><!-- row -->

                <br>

                <div class="row row-sm">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card pd-20 bg-primary">
                            <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">New Messages</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                            </div><!-- card-header -->
                            <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo e(count($contact)); ?></h3>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col-3 -->

                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                        <div class="card pd-20 bg-info">
                            <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Property</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                            </div><!-- card-header -->
                            <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo e(count($Property)); ?></h3>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col-3 -->

                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                        <div class="card pd-20 bg-sl-primary">
                            <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">User</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                            </div><!-- card-header -->
                            <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold"><?php echo e(count($user)); ?></h3>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col-3 -->

                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                        <div class="card pd-20 bg-purple">
                            <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Lorem Ipsum </h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                            </div><!-- card-header -->
                            <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ </h3>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col-3 -->

                </div><!-- row -->

            <?php else: ?>

            <?php
                $profile=DB::table('admins')->where('id',Auth::id())->first();
            ?>

            <div class="contact_form py-5" style="background: #F5F5FA">
                <div class="container py-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-info text-center">
                                Welcome To Dashboard. <span class=""><?php echo e($profile->name); ?></span>!
                            </h3>
                        </div>
                    </div>

                    <div class="row mt-3 justify-content-center">

                        <div class="col-md-7" data-aos="fade-right">
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
                                    <tr>
                                        <td>Access :</td>
                                        <td>
                                            <?php if($profile->places == 1): ?>
                                            <span class="badge badge-danger p-1">Places</span>
                                        <?php else: ?>
                                        <?php endif; ?>

                                        <?php if($profile->coupon == 1): ?>
                                            <span class="badge badge-success p-1">Coupon</span>
                                        <?php else: ?>
                                        <?php endif; ?>

                                        <?php if($profile->blogs == 1): ?>
                                            <span class="badge badge-info p-1">Blogs</span>
                                        <?php else: ?>
                                        <?php endif; ?>

                                        <?php if($profile->all_properties == 1): ?>
                                            <span class="badge badge-warning p-1">All Properties</span>
                                        <?php else: ?>
                                        <?php endif; ?>

                                        <?php if($profile->orders == 1): ?>
                                            <span class="badge badge-danger p-1">Rent Request</span>
                                        <?php else: ?>
                                        <?php endif; ?>

                                        <?php if($profile->reports == 1): ?>
                                            <span class="badge badge-success p-1">Reports</span>
                                        <?php else: ?>
                                        <?php endif; ?>

                                        <?php if($profile->user_role == 1): ?>
                                            <span class="badge badge-danger p-1">User Role</span>
                                        <?php else: ?>
                                        <?php endif; ?>

                                        <?php if($profile->newsletter == 1): ?>
                                            <span class="badge badge-info p-1">Newsletter</span>
                                        <?php else: ?>
                                        <?php endif; ?>

                                        <?php if($profile->contact_messages == 1): ?>
                                            <span class="badge badge-warning p-1">Contact Messages</span>
                                        <?php else: ?>
                                        <?php endif; ?>

                                        <?php if($profile->site_setting == 1): ?>
                                            <span class="badge badge-primary p-1">Site Setting</span>
                                        <?php else: ?>
                                        <?php endif; ?>

                                        <?php if($profile->database_backup == 1): ?>
                                            <span class="badge badge-danger p-1">Database Backup</span>
                                        <?php else: ?>
                                        <?php endif; ?>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!---end col-md-5--->
                        </div>


            <!------User-Profile----------------------->
                        <div class="col-4" data-aos="fade-left">
                            <div class="card" style="width: 18rem;">

                                <a href="<?php echo e(route('home')); ?>">
                                    <img src="<?php echo e(asset('public/default.png')); ?>" class="card-img-top rounded-circle mt-3" style="height: 90px; width: 90px; margin-left: 34%;">
                                </a>
                                <div class="card-body ">
                                    <h4 class="text-center" style="color: rgb(117, 117, 226);"><?php echo e(Auth::user()->name); ?></h4>
                                </div>

                                <ul class="list-group list-group-flush ml-4">
                                    <li class="list-group-item py-1"><a href="<?php echo e(route('admin.password.change')); ?>" class="button-pipaluk button--inverted px-4 py-2 text-info ml-4 text-center"> Change Password </a></li>
                                    <li class="list-group-item py-1"><a href="<?php echo e(route('admin.logout')); ?>" class="button-pipaluk button--inverted px-4 py-2 text-info ml-4 text-center"> Logout </a></li>
                                </ul>
                                <div class="card-body more more2 p-1">
                                    <a href="<?php echo e(route('admin.logout')); ?>" class="btn bg-transparent text-white button-pipaluk button--inverted btn-block btn-sm py-1" style="font-size:15px;">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endif; ?>

        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\houserental-mohin\resources\views/admin/home.blade.php ENDPATH**/ ?>