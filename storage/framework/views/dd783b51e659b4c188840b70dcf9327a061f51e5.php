<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>User Contact Message Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">
                <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($row->status==0): ?>
                        User's New Message List
                        <a href="<?php echo e(route('admin.all.contact')); ?>" class="btn btn-sm btn-info" style="float: right;" >All Responded Message</a> <?php break; ?>
                        </div>
                    <?php else: ?>
                        User's All Responded Message List
                        <a href="<?php echo e(route('admin.new.contact')); ?>" class="btn btn-sm btn-info" style="float: right;" >New Messages</a> <?php break; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </h6>

          <br>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-15p">Review</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($row->name); ?></td>
                  <td><?php echo e($row->phone); ?></td>
                  <td><?php echo e($row->email); ?></td>
                  <td style="font-size: 15px">
                    <?php if($row->status == 0): ?>
                     <span class="badge badge-warning p-1">New Message</span>
                    <?php else: ?>
                     <span class="badge badge-primary p-1">Already Responded</span>
                    <?php endif; ?>
                  </td>
                  <td style="font-size: 15px">
                    <?php if($row->review == 0): ?>
                     <span class="badge badge-warning p-1">Not Showing</span>
                    <?php else: ?>
                     <span class="badge badge-primary p-1">Showing </span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <a href="<?php echo e(URL::to('view/contact/'.$row->id)); ?>" class="btn btn-sm btn-info" title="View Details"><i class="fa fa-eye"></i></a>
                    <a href="<?php echo e(URL::to('delete/contact/'.$row->id)); ?>" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>

                    <?php if($row->status == 0): ?>
                        <a href="<?php echo e(URL::to('mark/read/contact/'.$row->id)); ?>" class="btn btn-sm btn-success" title="Mark as Read"><i class="fa fa-check"></i></a>
                    <?php else: ?>
                        <a href="<?php echo e(URL::to('mark/unread/contact/'.$row->id)); ?>" class="btn btn-sm btn-warning" title="Mark as Unread"><i class="fa fa-thumbs-down"></i></a>
                    <?php endif; ?>

                </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/admin/contact/contact.blade.php ENDPATH**/ ?>