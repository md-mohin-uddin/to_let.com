<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">BariWala</a>
        <span class="breadcrumb-item active">Site Setting Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Website Setting  </h6>
          <p class="mg-b-20 mg-sm-b-30"> Website Update</p>



        <form action="<?php echo e(route('update.sitesetting')); ?>" method="post" >
            <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="<?php echo e($setting->id); ?>">

        <div class="form-layout">
        <div class="row mg-b-25">
            <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label"> Phone One: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="phone_one"  required="" value="<?php echo e($setting->phone_one); ?>">
            </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Phone Two: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="phone_two"  required="" value="<?php echo e($setting->phone_two); ?>">
            </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Email One: <span class="tx-danger">*</span></label>
                <input class="form-control" type="email" name="email_one"  required="" value="<?php echo e($setting->email_one); ?>">
            </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
                <div class="form-group">
                    <label class="form-control-label">Email Two: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="email" name="email_two"  required="" value="<?php echo e($setting->email_two); ?>">
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Company Name <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="company_name"  required="" value="<?php echo e($setting->company_name); ?>">
            </div>
            </div><!-- col-4 -->

            <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Company Address One: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="address_one"  required="" value="<?php echo e($setting->address_one); ?>">
            </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
                <div class="form-group">
                    <label class="form-control-label">Company Address Two: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="address_two"  required="" value="<?php echo e($setting->address_two); ?>">
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Facebook Link: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="facebook"  required="" value="<?php echo e($setting->facebook); ?>">
            </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
                <div class="form-group">
                    <label class="form-control-label">Linkedin Link: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="linkedin"  required="" value="<?php echo e($setting->linkedin); ?>">
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
                <div class="form-group">
                    <label class="form-control-label">Twitter Link: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="twitter"  required="" value="<?php echo e($setting->twitter); ?>">
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Youtube Link: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="youtube"  required="" value="<?php echo e($setting->youtube); ?>">
            </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Instagram Link<span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="instagram"  required="" value="<?php echo e($setting->instagram); ?>">
            </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Pinterest Link: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="pinterest"  required="" value="<?php echo e($setting->pinterest); ?>">
            </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
                <div class="form-group">
                    <label class="form-control-label">Whatsapp Link: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="whatsapp"  required="" value="<?php echo e($setting->whatsapp); ?>">
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
                <div class="form-group">
                    <label class="form-control-label">Experience: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="experience"  required="" value="<?php echo e($setting->experience); ?>">
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-3">
                <div class="form-group">
                    <label class="form-control-label">Project: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="project"  required="" value="<?php echo e($setting->project); ?>">
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
                <div class="form-group">
                    <label class="form-control-label">Award: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="award"  required="" value="<?php echo e($setting->award); ?>">
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
                <div class="form-group">
                    <label class="form-control-label">Clients: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="clients"  required="" value="<?php echo e($setting->clients); ?>">
                </div>
            </div><!-- col-4 -->




        </div><!-- row -->
        <br>
        <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5" type="submit">Update </button>
        </div><!-- form-layout-footer -->
        </div><!-- form-layout -->
        </form>

        </div><!-- card -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HouseRental\resources\views/admin/setting/site_setting.blade.php ENDPATH**/ ?>