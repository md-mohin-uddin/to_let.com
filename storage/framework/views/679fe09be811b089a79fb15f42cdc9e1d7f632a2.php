<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">ToLet</a>
        <span class="breadcrumb-item active">User Role Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Admin  </h6>
          <p class="mg-b-20 mg-sm-b-30">New Admin add form</p>

          <form action="<?php echo e(route('store.admin')); ?>" method="post" >
          	<?php echo csrf_field(); ?>
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name"  required="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="phone"  required="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email <span class="tx-danger">*</span></label>
                  <input class="form-control" type="email" name="email"  required="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Password <span class="tx-danger">*</span></label>
                  <input class="form-control" type="password" name="password"  required="">
                </div>
              </div><!-- col-4 -->


            </div><!-- row -->
            <br><hr>
            <div class="row">
            	<div class="col-lg-4">
            		<label class="ckbox">
					  <input type="checkbox" name="places" value="1">
					  <span>Places</span>
					</label>
            	</div>
            	
            	<div class="col-lg-4">
            		<label class="ckbox">
					  <input type="checkbox" name="all_properties" value="1">
					  <span>All Properties</span>
					</label>
            	</div>
            	<div class="col-lg-4">
            		<label class="ckbox">
      					<input type="checkbox" name="orders" value="1">
      					<span>Rent Request</span>
      				</label>
            	</div>

              

              <div class="col-lg-4">
                <label class="ckbox">
                  <input type="checkbox" name="user_role" value="1">
                  <span>User Role</span>
                </label>
              </div>
              
              <div class="col-lg-4">
                <label class="ckbox">
                  <input type="checkbox" name="contact_messages" value="1">
                  <span>Review Messages</span>
                </label>
              </div>
              <div class="col-lg-4">
                <label class="ckbox">
                  <input type="checkbox" name="site_setting" value="1">
                  <span>Site Setting</span>
                </label>
              </div>
              

            </div>

            <br><br><hr>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/admin/role/create.blade.php ENDPATH**/ ?>