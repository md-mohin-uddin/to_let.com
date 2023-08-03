<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Admin Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Admin List
          	<a href="<?php echo e(route('create.admin')); ?>" class="btn btn-sm btn-warning" style="float: right;" >Add New</a>
          </h6>
          <br>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Access</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($row->name); ?></td>
                  <td><?php echo e($row->phone); ?></td>
                  <td>
                    <?php if($row->places == 1): ?>
                        <span class="badge badge-danger p-1">Places</span>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if($row->coupon == 1): ?>
                        <span class="badge badge-success p-1">Coupon</span>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if($row->blogs == 1): ?>
                        <span class="badge badge-info p-1">Blogs</span>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if($row->all_properties == 1): ?>
                        <span class="badge badge-warning p-1">All Properties</span>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if($row->orders == 1): ?>
                        <span class="badge badge-danger p-1">Rent Request</span>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if($row->reports == 1): ?>
                        <span class="badge badge-success p-1">Reports</span>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if($row->user_role == 1): ?>
                        <span class="badge badge-danger p-1">User Role</span>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if($row->newsletter == 1): ?>
                        <span class="badge badge-info p-1">Newsletter</span>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if($row->contact_messages == 1): ?>
                        <span class="badge badge-warning p-1">Contact Messages</span>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if($row->site_setting == 1): ?>
                        <span class="badge badge-primary p-1">Site Setting</span>
                    <?php else: ?>
                    <?php endif; ?>

                    <?php if($row->database_backup == 1): ?>
                        <span class="badge badge-danger p-1">Database Backup</span>
                    <?php else: ?>
                    <?php endif; ?>

                  </td>

                  <td>
                  	<a href="<?php echo e(URL::to('edit/admin/'.$row->id)); ?>" class="btn btn-sm btn-info">Edit</a>
                  	<a href="<?php echo e(URL::to('delete/admin/'.$row->id)); ?>" class="btn btn-sm btn-danger" id="delete">Delete</a>
                  </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/admin/role/all_role.blade.php ENDPATH**/ ?>