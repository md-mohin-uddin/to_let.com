<?php $__env->startSection('admin_content'); ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
    <div class="sl-pagebody">
      <div class="sl-page-title">
    	  <h5>Subscriber Table</h5>
    	</div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Subscriber List
            <a href="#" class="btn btn-sm btn-danger" style="float: right;" id="delete" >Delete All</a>
        </h6>
        <br>

        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
                <th class="wd-15p">ID</th>
                <th class="wd-15p">Email</th>
                <th class="wd-15p">Subscription Time</th>
                <th class="wd-20p">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $newsletter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td> <input type="checkbox"> <?php echo e($row->id); ?></td>
            <td><?php echo e($row->email); ?></td>
            <td><?php echo e(\Carbon\Carbon::parse($row->created_at)->diffForhumans()); ?></td>
            <td>
                <a href="<?php echo e(url('delete/newsletter/'.$row->id)); ?>" class="btn btn-sm btn-danger" id="delete">Delete</a>
            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        </div><!-- table-wrapper -->
        </div><!-- card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/admin/coupon/newsletter.blade.php ENDPATH**/ ?>