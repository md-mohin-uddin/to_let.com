<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">ToLet</a>
        <span class="breadcrumb-item active">View Property Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          
          

        <h6 class="card-body-title mg-b-20 mg-sm-b-35">View Property Details
            <a href="<?php echo e(URL::to('edit/property/'.$property->id)); ?>" class="btn btn-sm btn-danger" style="float: right;" >Edit Property</a>
        </h6>

         <div class="row">
         	<div class="col-md-6">
         	    <div class="card">
         	        <div class="card-header"><strong>Property Owner's</strong> Details</div>

         	        <div class="card-body">
         	    	<table class="table">
         	    		 <tr>
         	    		 	<th>Name : </th>
         	    		 	<th><?php echo e($property->name); ?></th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Email : </th>
         	    		 	<th><?php echo e($property->email); ?></th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Phone : </th>
         	    		 	<th><?php echo e($property->phone); ?></th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Address : </th>
         	    		 	<th><?php echo e($property->address); ?></th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>City :</th>
         	    		 	<th><?php echo e($property->city_name); ?></th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Subcity/Thana : </th>
         	    		 	<th><?php echo e($property->subcity_name); ?></th>
         	    		 </tr>
                        <tr>
                            <th>Month :</th>
                            <th><?php echo e($property->month); ?></th>
                        </tr>
                        <tr>
                            <th>Date :</th>
                            <th><?php echo e($property->date); ?></th>
                        </tr>
                        <tr>
                            <th>Date-Time :</th>
                            <th><?php echo e(date('d M, Y h:i A', strtotime($property->created_at))); ?></th>
                        </tr>
                        <tr>
                            <th>Year :</th>
                            <th><?php echo e($property->year); ?></th>
                        </tr>
                        <tr>
                            <th>Status : </th>
                            <th style="font-size: 16px">
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
                            </th>
                        </tr>
                        <tr>
                            <th>Property Code :</th>
                            <th><?php echo e($property->property_code); ?></th>
                        </tr>
                        <tr>
                            <th>Added By :</th>
                            <th style="font-size: 16px">
                                <?php if($property->added_by == NULL): ?>
                                    <span class="badge badge-primary p-1">Owner/User</span>
                                <?php else: ?>
                                    <span class="badge badge-primary p-1">Admin</span>
                                <?php endif; ?>
                            </th>
                        </tr>

                        <?php if(isset($property->amount) && isset($property->transaction_id)): ?>
                            <tr>
                                <th>Payment :</th>
                                <th><span class="badge badge-primary p-1">Paid (৳<?php echo e($property->amount); ?>)</span></th>
                                
                            </tr>
                            <tr>
                                <th>Transaction Id :</th>
                                <th><?php echo e($property->transaction_id); ?></th>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <th>Payment :</th>
                                <th><span class="badge badge-danger p-1">Unpaid</span></th>
                            </tr>
                            <tr>
                                <th>Transaction Id :</th>
                                <th>Not Available</th>
                            </tr>
                        <?php endif; ?>

         	    	</table>

         	        </div>
         	    </div>
             </div>


         	<div class="col-md-6">
         	    <div class="card">
         	        <div class="card-header"><strong>Property</strong> Details</div>
         	        <div class="card-body">
         	    	<table class="table">
         	    		 <tr>
         	    		 	<th>Bedroom : </th>
         	    		 	<th><?php echo e($property->bedroom); ?></th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Bathroom : </th>
         	    		 	<th><?php echo e($property->bathroom); ?></th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Kitchen : </th>
         	    		 	<th><?php echo e($property->kitchen); ?></th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Parking : </th>
         	    		 	<th><?php echo e($property->parking); ?></th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Type :</th>
         	    		 	<th><?php echo e($property->type); ?></th>
                          </tr>
                          <tr>
                            <th>Area :</th>
                            <th><?php echo e($property->area); ?></th>
                        </tr>
                        <tr>
                            <th>Categoty :</th>
                            <th><?php echo e($property->category); ?></th>
                        </tr>
                        <tr>
                            <th>Purpose :</th>
                            <th><?php echo e($property->purpose); ?></th>
                        </tr>
                        <tr>
                            <th>Floor Level :</th>
                            <th><?php echo e($property->floor); ?></th>
                        </tr>
                        <tr>
                            <th>Price :</th>
                            <th>৳ <?php echo e($property->price); ?></th>
                        </tr>
                        <tr>
                            <th>Discount Price :</th>
                            <th>৳ <?php echo e($property->discount_price); ?></th>
                        </tr>
                        <tr>
                            <th>Service Charge :</th>
                            <th>৳ <?php echo e($property->service_charge); ?></th>
                        </tr>
                        <tr>
                            <th class="text-primary">Total Price :</th>
                            <th class="text-primary">৳ <?php echo e(number_format($property->total_price)); ?></th>
                        </tr>

         	    	</table>

         	        </div>
         	    </div>
         	</div>
         </div>



        <div class="col-lg-12">
            <div class="form-group" style="border:1px solid grey;padding:10px;">
            <label class="form-control-label"><b>Property Details/Description : </b><span class="tx-danger">*</span></label>
              <br>
            <p><?php echo $property->details; ?></p>
          </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group" style="border:1px solid grey;padding:10px;">
            <label class="form-control-label">Video Link : <span class="tx-danger">*</span></label>
              <br>
            <p style="margin-left: 35px">
                <a href="<?php echo e($property->video); ?>" target="_blank"><?php echo e($property->video); ?></a>
            </p>
          </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group" style="border:1px solid grey;padding:10px;">
            <label class="form-control-label">Map Link : <span class="tx-danger">*</span></label>
              <br>
            <p style="margin-left: 35px"><?php echo e($property->map_link); ?></p>
          </div>
        </div>


        <div class="row p-4 mb-3">
            <div class="col-lg-4">
                <label>Image One (Main Thumbnail)<span class="tx-danger">*</span></label>
                <label class="custom-file">
                <img src="<?php echo e(URL::to($property->image_one)); ?>" style="height: 80px; width: 80px;" >
            </label>
            </div>
            <div class="col-lg-4">
                <label>Image Two <span class="tx-danger">*</span></label>
                <label class="custom-file">
                <img src="<?php echo e(URL::to($property->image_two)); ?>" style="height: 80px; width: 80px;" >
            </label>
            </div>
            <div class="col-lg-4">
                <label>Image Three <span class="tx-danger">*</span></label>
                <label class="custom-file">
                <img src="<?php echo e(URL::to($property->image_three)); ?>" style="height: 80px; width: 80px;" >
            </label>
            </div>
        </div>



  <div class="row m-4" style="border:1px solid grey;padding:10px; font-size:15px;">
    <div class="col-lg-4">
        <label>
        <?php if($property->trend == 1): ?>
          <span class="badge badge-success p-1">Active</span> |
        <?php else: ?>
        <span class="badge badge-danger p-1">Inactive</span> |
        <?php endif; ?>
          <span>Trend</span>
        </label>
    </div>
    <div class="col-lg-4">
        <label>
          <?php if($property->best_rated == 1): ?>
          <span class="badge badge-success p-1">Active</span> |
        <?php else: ?>
        <span class="badge badge-danger p-1">Inactive</span> |
        <?php endif; ?>
          <span>Best Rated</span>
        </label>
    </div>
    <div class="col-lg-4">
        <label class="">
          <?php if($property->hot_new == 1): ?>
          <span class="badge badge-success p-1">Active</span> |
        <?php else: ?>
        <span class="badge badge-danger p-1">Inactive</span> |
        <?php endif; ?>
          <span>Hot New</span>
        </label>
    </div>
  </div> <hr>


<!--//----------------------------------------------------------------------------
// --ekhane Database onosare "Status" er term gular rules holo :--
//         Status = 0 = Pending
//         Status = 1 = PropertyAccepted === Upload_Property
//         Status = 2 = Delivery_Progress
//         Status = 3 = Successfully_Delivered
//         Status = 4 = Cancelled_Property
//------------------------------------------------------------------------------->


    <?php if($property->status == 0): ?>
        <strong> ** If everything is OK & all of these above info is valid, Please click 'Upload Property' to upload it.</strong>
        <a href="<?php echo e(url('admin/property/accept/'.$property->id)); ?>" class="btn btn-info"><i class="fa fa-check-square"></i>&nbsp; Upload Property</a>
        <strong> ** If something went wrong about this property, Please click 'Cancel Property'.</strong>

        
        <a
            href="javascript:void(0)"
            data-toggle="modal"
            data-target="#cancelPropertry"
            data-route="<?php echo e(url('admin/property/cancel/'.$property->id)); ?>"
            class="btn btn-danger cancelPropertry"

        >
            <i class="fa fa-times"></i>&nbsp; Cancel Property
        </a>
        

    <?php elseif($property->status == 1): ?>
        <strong>* This property is already uploaded, Now sent it to delivery progress if any rental request has come for this property.</strong>
        <a href="<?php echo e(url('admin/delevery/progress/'.$property->id)); ?>" class="btn btn-info"><i class="fa fa-check"></i>&nbsp; Sent To Delivery Progress</a>
        <strong> ** If something went wrong about this property,Need to recheck/edit, Please sent it back to Pending stage.</strong>
        
        <a
            href="javascript:void(0)"
            data-toggle="modal"
            data-target="#pendingPropertry"
            data-route="<?php echo e(url('admin/property/pending/'.$property->id)); ?>"
            class="btn btn-danger pendingPropertry"

        >
            <i class="fa fa-reply"></i>&nbsp; Sent Back to Pending stage
        </a>

    <?php elseif($property->status == 2): ?>
        <strong> ** If Payment have already done for this Property and handover successfully, Click 'Delivery Done'.</strong>
        <a href="<?php echo e(url('admin/delivery/done/'.$property->id)); ?>" class="btn btn-success"><i class="fa fa-check-square"></i>&nbsp; Delivery Done</a>
        <strong> ** If delivery was not successfull, Please sent it back to Upload stage.</strong>
        
        <a
            href="javascript:void(0)"
            data-toggle="modal"
            data-target="#backToUploadPropertry"
            data-route="<?php echo e(url('admin/property/backToUpload/'.$property->id)); ?>"
            class="btn btn-danger backToUploadPropertry"

        >
            <i class="fa fa-reply"></i>&nbsp; Sent Back to Upload stage
        </a>

    <?php elseif($property->status == 4): ?>
        <strong class="text-danger text-center" style="font-size: 22px"><i class="fa fa-times"></i>&nbsp; This Property is not valid, So its Cancelled !!!</strong> <br> <br>
        <strong> ** If you want to recheck/edit this property again, Please sent it back to Pending stage.</strong>
        
        <a
            href="javascript:void(0)"
            data-toggle="modal"
            data-target="#pendingPropertry"
            data-route="<?php echo e(url('admin/property/pending/'.$property->id)); ?>"
            class="btn btn-danger pendingPropertry"

        >
            <i class="fa fa-reply"></i>&nbsp; Sent Back to Pending stage
        </a>

    <?php else: ?>
        <strong class="text-success text-center" style="font-size: 26px"><i class="fa fa-check-square"></i>&nbsp; This Property Is Successfully Delivered !!!</strong>
    <?php endif; ?>

      </div><!--card-->
    </div>





<!----------------------------------------------------------------------------------------------->
            <!--Interested Buyer/Renter's Address For This Property-->
<!----------------------------------------------------------------------------------------------->

<?php
    $user=DB::table('interested_properties')->join('user_properties','interested_properties.property_code','user_properties.property_code')->select('interested_properties.*','user_properties.property_code')->where('interested_properties.property_code',$property->property_code)->get();
?>

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
          <h5 class="mb-4 mt-3 card-header col-md-6 text-primary" style="background-color: #E9ECEF">Interested <b> Buyer/Renter's Info</b> Table For This Property : </h5>
          

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                    <th class="wd-15p">Property Code</th>
                    <th class="wd-15p">Name</th>
                    <th class="wd-15p">Phone</th>
                    <th class="wd-15p">Email</th>
                    <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row->property_code); ?></td>
                    <td><?php echo e($row->name); ?></td>
                    <td><?php echo e($row->phone); ?></td>
                    <td><?php echo e($row->email); ?></td>
                    <td>
                      <a href="<?php echo e(URL::to('delete/order/'.$row->id)); ?>" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>

                    <?php if($row->status == 0): ?>
                        <a href="<?php echo e(URL::to('mark/read/order/'.$row->id)); ?>" class="btn btn-sm btn-success" title="Mark as Responded"><i class="fa fa-check"></i></a>
                    <?php else: ?>
                        <a href="<?php echo e(URL::to('mark/unread/order/'.$row->id)); ?>" class="btn btn-sm btn-warning" title="Mark as New Order"><i class="fa fa-thumbs-down"></i></a>
                    <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->

        </div><!--card-->
    </div>

</div><!-- sl-mainpanel -->




    <!------- Cancel Property modal --------->
    <div class="modal fade" id="cancelPropertry" tabindex="-1" data-backdrop="static" aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reportModalLabel"><?php echo app('translator')->get('Cancel Property!'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" class="cancelPropertrySubmit">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="reason"><?php echo app('translator')->get('Cancel Reason : '); ?></label>
                            <textarea name="comment" id="comment" cols="30" rows="4" class="form-control" required placeholder="<?php echo app('translator')->get('type here...'); ?>"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!------- pending Property modal --------->
    <div class="modal fade" id="pendingPropertry" tabindex="-1" data-backdrop="static" aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reportModalLabel"><?php echo app('translator')->get('Make Property Pending!'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" class="pendingPropertrySubmit">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="reason"><?php echo app('translator')->get('Make Pending Reason : '); ?></label>
                            <textarea name="comment" id="comment" cols="30" rows="4" class="form-control" required placeholder="<?php echo app('translator')->get('type here...'); ?>"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!------- back To Upload Propertry modal --------->
    <div class="modal fade" id="backToUploadPropertry" tabindex="-1" data-backdrop="static" aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reportModalLabel"><?php echo app('translator')->get('Back To Upload Propertry!'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" class="backToUploadPropertrySubmit">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="reason"><?php echo app('translator')->get('Back To Upload Reason : '); ?></label>
                            <textarea name="comment" id="comment" cols="30" rows="4" class="form-control" required placeholder="<?php echo app('translator')->get('type here...'); ?>"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<script src="<?php echo e(asset('public/backend/js/jquery-3.6.0.min.js')); ?>"></script>
<script>
    "use strict";

    // cancel Propertry
    $(document).on('click', '.cancelPropertry', function (){
        var route = $(this).data('route');
        $('.cancelPropertrySubmit').attr('action', route)
    })

    // pending Propertry
    $(document).on('click', '.pendingPropertry', function (){
        var route = $(this).data('route');
        $('.pendingPropertrySubmit').attr('action', route)
    })

    // back To Upload Propertry
    $(document).on('click', '.backToUploadPropertry', function (){
        var route = $(this).data('route');
        $('.backToUploadPropertrySubmit').attr('action', route)
    })
</script>


<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\houserental-mohin\resources\views/admin/properties/show.blade.php ENDPATH**/ ?>