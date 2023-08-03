<?php $__env->startSection('admin_content'); ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
          <div class="sl-page-title">
              <h5>Sub-city Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Sub-city List
                <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New Sub-city</a>
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
    

              <table id="datatable1" class="table display responsive nowrap ">
              <thead>
                <tr>
                    <th class="wd-15p">ID</th>
                    <th class="wd-15p">City name</th>
                    <th class="wd-15p">Subcity name</th>
                    <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $subcity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($row->id); ?></td>
                <td><?php echo e($row->city_name); ?></td>
                <td><?php echo e($row->subcity_name); ?></td>
                <td>
                    <a href="<?php echo e(url('edit/subcity/'.$row->id)); ?>" class="btn btn-sm btn-info">Edit</a>
                    <a href="<?php echo e(url('delete/subcity/'.$row->id)); ?>" class="btn btn-sm btn-danger" id="delete">Delete</a>
                </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            </table>
            </div><!-- table-wrapper -->
            </div><!-- card -->
        </div>
    </div>


             <!-- LARGE MODAL -->
     <div id="modaldemo3" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Subcity</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

    
            <form action="<?php echo e(route('store.subcity')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="modal-body pd-20">
                <div class="form-group">
                    <label for="catname">Subcity Name</label>
                    <input type="text" class="form-control" name="subcity_name" id="catname" placeholder="Enter Subcity Name">
                </div>
                <div class="form-group">
                    <label for="catid">City Name</label>
                    <select name="city_id" id="catid" class="form-control" required>
                        <option>Choose city</option>
                    <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($row->id); ?>"><?php echo e($row->city_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
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

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/admin/city/subcity.blade.php ENDPATH**/ ?>