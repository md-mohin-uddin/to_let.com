<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Report List</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Today's Order Report List </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Property Code</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-10p">Email</th>
                   <th class="wd-10p">Date</th>
                   <th class="wd-10p">Status</th>
                   <th class="wd-10p">Action</th>
                   
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($row->property_code); ?></td>
                  <td><?php echo e($row->name); ?></td>
                  <td><?php echo e($row->phone); ?></td>
                  <td><?php echo e($row->email); ?></td>
                  <td><?php echo e($row->date); ?></td>
                  <td>
                    <?php if($row->status == 0): ?>
                     <span class="badge badge-warning p-1">Pending</span>
                    <?php elseif($row->status == 1): ?>
                    <span class="badge badge-info p-1">Responded</span>
                    <?php endif; ?>
                  <td>
                  	<a href="<?php echo e(URL::to('view/property/order/'.$row->property_code)); ?>" class="btn btn-sm btn-info">View</a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/admin/report/today_order.blade.php ENDPATH**/ ?>