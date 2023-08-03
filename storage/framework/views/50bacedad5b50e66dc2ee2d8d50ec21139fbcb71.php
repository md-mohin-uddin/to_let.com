<?php $__env->startSection('admin_content'); ?>

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Database Backup</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Database Backup List
          	<a href="<?php echo e(route('admin.backup.now')); ?>" class="btn btn-sm btn-warning" style="float: right;" >Backup Now</a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                <th>File Name</th>
                <th>Size</th>
                <th>Path</th>
                <th>Download</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
               	<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class="odd gradeX">
                <td><?php echo e($row->getFilename()); ?></td>
                <td><?php echo e($row->getSize()); ?> Kb</td>
                <td><?php echo e($row->getpath()); ?></td>
                <td class="center"> <a href="<?php echo e(url($row->getFilename())); ?>" class="btn btn-sm btn-primary" title="Download"><i class="fa fa-download"></i> </a></td>
                <td class="center"><a href="<?php echo e(url('delete/database/'.$row->getFilename() )); ?>" class="btn btn-sm btn-danger" id="delete">Delete</a></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HouseRental\resources\views/admin/setting/db_backup.blade.php ENDPATH**/ ?>