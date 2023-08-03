<?php $__env->startSection('admin_content'); ?>

  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Post Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Post List </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Post_Title</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($row->post_title_en); ?></td>
                  <td><?php echo e($row->category_name_en); ?></td>
                  <td><img src="<?php echo e(URL::to($row->post_image)); ?>" height="50px;" width="50px;"></td>
                  <td>
                  	<a href="<?php echo e(URL::to('edit/post/'.$row->id)); ?>" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                  	<a href="<?php echo e(URL::to('delete/post/'.$row->id)); ?>" class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
                  </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HouseRental\resources\views/admin/blog/index.blade.php ENDPATH**/ ?>