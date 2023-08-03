<?php $__env->startSection('content'); ?>

<div style="background: #F5F5FA; padding:80px">

    <h3 class="bg-white p-3 text-success text-center" style="background-color: #e1f1e9e5; font-size:23px;">
        Details Of Property '<?php echo e($property->property_code); ?>' :
    </h3>
    

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white" style="font-size: 16px;"><strong>Property Owner's Details</strong></div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td>Name : </td>
                            <td><?php echo e($property->name); ?></td>
                        </tr>
                        <tr>
                            <td>Email : </td>
                            <td><?php echo e($property->email); ?></td>
                        </tr>
                        <tr>
                            <td>Phone : </td>
                            <td><?php echo e($property->phone); ?></td>
                        </tr>
                        <tr>
                            <td>Address : </td>
                            <td><?php echo e($property->address); ?></td>
                        </tr>
                        <tr>
                            <td>City :</td>
                            <td><?php echo e($property->city_name); ?></td>
                        </tr>
                        
                        <tr>
                            <td>Month :</td>
                            <td><?php echo e($property->month); ?></td>
                        </tr>
                        <tr>
                            <td>Date :</td>
                            <td><?php echo e($property->date); ?></td>
                        </tr>
                        <tr>
                            <td>Date-Time :</td>
                            <td><?php echo e(date('d M, Y h:i A', strtotime($property->created_at))); ?></td>
                        </tr>
                        <tr>
                            <td>Year :</td>
                            <td><?php echo e($property->year); ?></td>
                        </tr>
                        <tr>
                            <td>Status : </td>
                            <td style="font-size: 16px">
                                <?php if($property->status == 0): ?>
                                    <span class="badge badge-warning p-1">Pending</span>
                                <?php elseif($property->status == 1): ?>
                                    <span class="badge badge-info p-1">Uploaded</span>
                                <?php elseif($property->status == 2): ?>
                                    <span class="badge badge-info p-1">On Progress </span>
                                <?php elseif($property->status == 3): ?>
                                    <span class="badge badge-success p-1">Delivered </span>
                                <?php else: ?>
                                    <span class="badge badge-danger p-1">Canceled </span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Property Code :</td>
                            <td><?php echo e($property->property_code); ?></td>
                        </tr>
                        <tr>
                            <td>Added By :</td>
                            <td style="font-size: 16px">
                                <?php if($property->added_by == NULL): ?>
                                    <?php echo e(Auth::user()->name); ?>

                                <?php else: ?>
                                    <span class="badge badge-primary p-1">Admin</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <?php if(isset($property->amount) && isset($property->transaction_id)): ?>
                            <tr>
                                <td>Payment :</td>
                                <td><span class="badge badge-primary p-1">Paid (৳<?php echo e($property->amount); ?>)</span></td>
                                
                            </tr>
                            <tr>
                                <td>Transaction Id :</td>
                                <td><?php echo e($property->transaction_id); ?></td>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <td>Payment :</td>
                                <td><span class="badge badge-danger p-1">Unpaid</span></td>
                            </tr>
                            <tr>
                                <td>Transaction Id :</td>
                                <td>Not Available</td>
                            </tr>
                        <?php endif; ?>

                    </table>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white" style="font-size: 16px;"><strong>Property Details</strong></div>
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td>Bedroom : </td>
                            <td><?php echo e($property->bedroom); ?></td>
                        </tr>
                        <tr>
                            <td>Bathroom : </td>
                            <td><?php echo e($property->bathroom); ?></td>
                        </tr>
                        <tr>
                            <td>Kitchen : </td>
                            <td><?php echo e($property->kitchen); ?></td>
                        </tr>
                        <tr>
                            <td>Parking : </td>
                            <td><?php echo e($property->parking); ?></td>
                        </tr>
                        <tr>
                            <td>Type :</td>
                            <td><?php echo e($property->type); ?></td>
                        </tr>
                        <tr>
                            <td>Area :</td>
                            <td><?php echo e($property->area); ?></td>
                        </tr>
                        <tr>
                            <td>Categoty :</td>
                            <td><?php echo e($property->category); ?></td>
                        </tr>
                        <tr>
                            <td>Purpose :</td>
                            <td><?php echo e($property->purpose); ?></td>
                        </tr>
                        <tr>
                            <td>Floor Level :</td>
                            <td><?php echo e($property->floor); ?></td>
                        </tr>
                        <tr>
                            <td>Price :</td>
                            <td>৳ <?php echo e($property->price); ?></td>
                        </tr>
                        <tr>
                            <td>Discount Price :</td>
                            <td>৳ <?php echo e($property->discount_price); ?></td>
                        </tr>
                        <tr>
                            <td>Service Charge :</td>
                            <td>৳ <?php echo e($property->service_charge); ?></td>
                        </tr>
                        

                    </table>
                </div>
            </div>
        </div>
    </div>


    <!--------- Details show ----------->
    <div class="col-lg-12 my-4">
        <div class="form-group pl-5" style="border:1px solid grey;padding:10px; background-color:rgb(253, 253, 253);">
            <label class="form-control-label" style="font-size: 16px;">
                <b>Property Details/Description : </b>
            </label>
            <br>
            <p><?php echo $property->details; ?></p>
        </div>
    </div>


    <!--------- Video show ----------->
    <div class="col-lg-12">
        <div class="form-group" style="border:1px solid grey;padding:10px;background-color:rgb(253, 253, 253);">
        <label class="form-control-label">Video Link : </label>
            <br>
        <p style="margin-left: 35px">
            <a href="<?php echo e($property->video); ?>" target="_blank"><?php echo e($property->video); ?></a>
        </p>
        </div>
    </div>


    <!--------- Map show ----------->
    <div class="col-lg-12">
        <div class="form-group" style="border:1px solid grey;padding:10px;background-color:rgb(253, 253, 253);">
        <label class="form-control-label">Map Link : </label>
            <br>
        
            <?php if(isset($property->map_link)): ?>
                <iframe src="<?php echo e($property->map_link); ?>" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <?php else: ?>
                <span style="font-size: 15px;"> Sorry!!! No Map Link Is Available To Show At This moment. </span>
            <?php endif; ?>
        </div>
    </div>


    <!--------- Image show ----------->
    




    <!--------- Review/Note/Comment Details start ----------->
    <h3 class="bg-white p-3 text-success text-center" style="background-color: #e1f1e9e5; font-size:23px; margin-top:95px;">
        Review/Comment About This Property '<?php echo e($property->property_code); ?>' :
    </h3>
    <div class="row">
        <div class="col-md-12 mx-3" style="background: rgb(253, 253, 253);">
            <?php $__empty_1 = true; $__currentLoopData = $commentOfProperty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="p-3 d-flex flex-row">
                    <img src="<?php echo e(asset('public/default.png')); ?>" class="rounded-circle mr-3" style="height: 30px; width: 30px;">
                    <div class="">
                        <p class="p-2 mb-0" style="background: rgb(242, 242, 242)">
                            <?php echo e($row->comment); ?>

                        </p>
                        <small class="m-0 p-0" style="color:gray"><?php echo e(date('d M, Y h:i A', strtotime($row->created_at))); ?></small>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>No Comment Available Yet.</p>
            <?php endif; ?>
        </div>
    </div>
    <!--------- Review/Note/Comment Details end ----------->

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/pages/view_user_uploaded_property.blade.php ENDPATH**/ ?>