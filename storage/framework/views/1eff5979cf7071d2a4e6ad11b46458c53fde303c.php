<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>New Rent Request Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">
            <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($row->status == 0): ?>
                    New Rent Request List For Property
                    <a href="<?php echo e(route('admin.all.order')); ?>" class="btn btn-sm btn-info" style="float: right;" >All Rent Request</a> <?php break; ?>
                <?php else: ?>
                    All Rent Request List For Property
                    <a href="<?php echo e(route('admin.new.order')); ?>" class="btn btn-sm btn-info" style="float: right;" >New Rent Request</a> <?php break; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Property Code</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-5p">Date-Time</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($row->property_code); ?></td>
                  <td><?php echo e($row->name); ?></td>
                  <td><?php echo e($row->phone); ?></td>
                  <td><?php echo e($row->email); ?></td>
                  <td><?php echo e(date('d M, Y h:i A', strtotime($row->created_at))); ?></td>
                  <td>
                    <a href="<?php echo e(URL::to('view/property/order/'.$row->property_code)); ?>" class="btn btn-sm btn-primary" title="View_Property_Details"><i class="fa fa-eye"></i></a>

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
        </div><!-- card -->
      </div><!-- sl-pagebody -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\houserental-mohin\resources\views/admin/order/orders.blade.php ENDPATH**/ ?>