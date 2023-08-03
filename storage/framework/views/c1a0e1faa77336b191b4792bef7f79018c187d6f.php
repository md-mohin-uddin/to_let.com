<?php $__env->startSection('admin_content'); ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
    <div class="sl-pagebody">
      <div class="sl-page-title">
    	  <h5>Cities Table</h5>
    	</div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">City List
            <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New City</a>
        </h6>
        <br>

        <div class="table-wrapper">

        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
      <?php endif; ?>


          <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
                <th class="wd-15p">ID</th>
                <th class="wd-15p">City name</th>
                <th class="wd-20p">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($row->id); ?></td>
            <td><?php echo e($row->city_name); ?></td>
            <td>
                <a href="<?php echo e(url('edit/city/'.$row->id)); ?>" class="btn btn-sm btn-info">Edit</a>
                <a href="<?php echo e(url('delete/city/'.$row->id)); ?>" class="btn btn-sm btn-danger" id="delete">Delete</a>
            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        </div><!-- table-wrapper -->
        </div><!-- card -->


         <!-- LARGE MODAL -->
 <div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New City</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <form action="<?php echo e(route('store.city')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="modal-body pd-20">
            <div class="form-group">
                <label for="catname">City Name</label>
                <input type="text" class="form-control" name="city_name" id="catname" placeholder="Enter City Name">
            </div>
        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-info pd-x-20">Submit</button>
          <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\houserental-mohin\resources\views/admin/city/city.blade.php ENDPATH**/ ?>