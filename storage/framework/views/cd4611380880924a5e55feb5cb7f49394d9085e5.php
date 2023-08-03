<?php $__env->startSection('admin_content'); ?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>User-Property-Added Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            
            <h6 class="card-body-title text-primary">
                <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($row->status==0): ?>
                        Pending properties for approval - Table : <?php break; ?>
                    <?php elseif($row->status==1): ?>
                        Uploaded Properties - Table <?php break; ?>
                    <?php elseif($row->status==2): ?>
                        Properties on progress for delivery - Table : <?php break; ?>
                    <?php elseif($row->status==3): ?>
                        Successfully Delivered Properties - Table : <?php break; ?>
                    <?php else: ?>
                        Cancelled Properties - Table : <?php break; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </h6>
            <br>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-5p">Property Code</th>
                            <th class="wd-5p">User Name</th>
                            <th class="wd-5p">Phone</th>
                            <th class="wd-5p">City Name</th>
                            <th class="wd-5p">Sub-City</th>
                            <th class="wd-5p">Image</th>
                            <th class="wd-5p">Price (৳)</th>
                            <th class="wd-5p">Date-Time</th>
                            <th class="wd-10p">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($row->property_code); ?></td>
                            <td><?php echo e($row->name); ?></td>
                            <td><?php echo e($row->phone); ?></td>
                            <td><?php echo e($row->city_name); ?></td>
                            <td><?php echo e($row->subcity); ?></td>
                            <td><img src="<?php echo e(URL::to($row->image_one)); ?>" height="40px;" width="45px;"></td>
                            
                            <?php if(isset($row->discount_price)): ?>
                                <td>৳ <?php echo e($row->discount_price); ?> (D)</td>
                            <?php else: ?>
                                <td>৳ <?php echo e($row->price); ?></td>
                            <?php endif; ?>
                            <td><?php echo e(date('d M, Y h:i A', strtotime($row->created_at))); ?></td>
                            <td>
                                <?php if($row->status==0 || $row->status==1 || $row->status==2): ?>
                                <a href="<?php echo e(URL::to('edit/property/'.$row->id)); ?>" class="btn btn-sm btn-info"
                                    title="Edit"><i class="fa fa-edit"></i></a>
                                
                                <a href="<?php echo e(URL::to('view/property/'.$row->id)); ?>" class="btn btn-sm btn-warning"
                                    title="View_Details"><i class="fa fa-eye"></i></a>
                                <a href="<?php echo e(url('admin/property/cancel/'.$row->id)); ?>" class="btn btn-sm btn-danger"
                                    title="Cancel_Property" id="cancel"><i class="fa fa-times"></i></a>
                                <?php elseif($row->status==3): ?>
                                
                                <a href="<?php echo e(URL::to('view/property/'.$row->id)); ?>" class="btn btn-sm btn-warning"
                                    title="View_Details"><i class="fa fa-eye"></i></a>
                                <?php else: ?>
                                <a href="<?php echo e(URL::to('edit/property/'.$row->id)); ?>" class="btn btn-sm btn-info"
                                    title="Edit"><i class="fa fa-edit"></i></a>
                                
                                <a href="<?php echo e(URL::to('view/property/'.$row->id)); ?>" class="btn btn-sm btn-warning"
                                    title="View_Details"><i class="fa fa-eye"></i></a>
                                <?php endif; ?>
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

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/admin/properties/user_property_request.blade.php ENDPATH**/ ?>