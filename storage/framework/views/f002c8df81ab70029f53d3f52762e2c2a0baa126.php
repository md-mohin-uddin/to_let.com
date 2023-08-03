<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">ToLet</a>
        <span class="breadcrumb-item active">User Contact Message Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">

          <p class="mg-b-20 mg-sm-b-30">View User Contact Message</p>

         <div class="row">
         	<div class="col-md-6">
         	    <div class="card">
         	        <div class="card-header"><strong>User</strong> Details</div>

         	        <div class="card-body">
         	    	<table class="table">
         	    		 <tr>
         	    		 	<th>Name : </th>
         	    		 	<th><?php echo e($view->name); ?></th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Phone : </th>
         	    		 	<th><?php echo e($view->phone); ?></th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Email : </th>
         	    		 	<th><?php echo e($view->email); ?></th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Subject : </th>
         	    		 	<th><?php echo e($view->subject); ?></th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Date : </th>
         	    		 	<th><?php echo e($view->date); ?></th>
                          </tr>
                        <tr>
                            <th>Status : </th>
                            <th style="font-size: 15px">
                                <?php if($view->status == 0): ?>
                                 <span class="badge badge-warning p-1">New Message</span>
                                <?php else: ?>
                                <span class="badge badge-primary p-1">Already Responded</span>
                                <?php endif; ?>
                            </th>
                        </tr>
                        <tr>
                            <th>Review : </th>
                            <th style="font-size: 15px">
                                <?php if($view->review == 0): ?>
                                    <span class="badge badge-primary p-1">Not showing as a review</span>
                                <?php else: ?>
                                    <span class="badge badge-success p-1">Showing as a review</span>
                                <?php endif; ?>
                            </th>
                        </tr>
         	    	</table>

         	        </div>
         	    </div>
             </div>

         </div>

         <div class="row">
         	<div class="card pd-20 pd-sm-40 col-lg-12">
         	  <h6 class="card-body-title p-3"style="background-color: #E9ECEF"><strong>User Message :</strong> </h6>
         	  <br>
               <div class="col-lg-12">
                <div class="form-group" style="border:1px solid grey;padding:10px; ">
                <p class="text-dark"><?php echo $view->message; ?></p>
              </div>
            </div>
         	</div><!-- card -->
         </div> <br>


        <?php if($view->status == 0): ?>
            <a href="mailto:<?php echo e($view->email); ?>" class="btn btn-block btn-info"><i class="fa fa-reply"></i>&nbsp; Want to sent replay ?</a>
            <a href="<?php echo e(URL::to('mark/read/contact/'.$view->id)); ?>" class="btn btn-block btn-sm btn-danger"><i class="fa fa-check-square"></i>&nbsp; Mark as Read</a>
        <?php else: ?>
            <a href="<?php echo e(URL::to('mark/unread/contact/'.$view->id)); ?>" class="btn btn-block btn-sm btn-danger py-2"><i class="fa fa-thumbs-down"></i>&nbsp; Mark as Unread</a>
        <?php endif; ?>
         <br>
        <?php if($view->review == 0): ?>
            <a href="<?php echo e(URL::to('show/review/contact/'.$view->id)); ?>" class="btn btn-block btn-sm btn-danger"><i class="fa fa-check-square"></i>&nbsp; Show as a Review</a>
        <?php else: ?>
            <a href="<?php echo e(URL::to('dont/review/contact/'.$view->id)); ?>" class="btn btn-block btn-sm btn-danger py-2"><i class="fa fa-thumbs-down"></i>&nbsp; Don't Show as a Review</a>
        <?php endif; ?>


      </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/admin/contact/view.blade.php ENDPATH**/ ?>