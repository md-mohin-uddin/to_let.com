<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Report List</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h2 class="card-body-title text-white py-2 pl-4" style="background-color: #63a1e7; font-size:15px;">Total Amount = ( <?php echo e(number_format($total)); ?> ) Taka</h2>
          
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                    <th class="wd-10p">Property Code</th>
                    <th class="wd-15p">Name</th>
                    <th class="wd-10p">Phone</th>
                    <th class="wd-10p">Email</th>
                    <th class="wd-10p">Date</th>
                    <th class="wd-10p">Price (৳)</th>
                    <th class="wd-10p">Status</th>
                    <th class="wd-10p">Action</th>
                    <th></th>
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
                        <?php if($row->discount_price == NULL): ?>
                            <?php echo e($row->price); ?>

                        <?php else: ?>
                            <?php echo e($row->discount_price); ?> (D)
                        <?php endif; ?>
                    </td>
                    <td>
                    <?php if($row->status == 0): ?>
                        <span class="badge badge-warning p-1">Pending</span>
                    <?php elseif($row->status == 1): ?>
                        <span class="badge badge-info p-1">Uploaded</span>
                    <?php elseif($row->status == 2): ?>
                        <span class="badge badge-info p-1">On Progress </span>
                    <?php elseif($row->status == 3): ?>
                        <span class="badge badge-success p-1">Delivered </span>
                    <?php else: ?>
                        <span class="badge badge-danger p-1">Canceled </span>
                    <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(URL::to('view/property/'.$row->id)); ?>" class="btn btn-sm btn-info">View</a>
                    </td> <td></td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HouseRental\resources\views/admin/report/search_report.blade.php ENDPATH**/ ?>