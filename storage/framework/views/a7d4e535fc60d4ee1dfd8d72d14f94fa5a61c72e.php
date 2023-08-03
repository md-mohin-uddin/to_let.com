<?php $__env->startSection('content'); ?>


<?php
    function loopIndex($object)
    {
        return ($object->currentPage() - 1) * $object->perPage() + 1;
    }
?>

<div style="background: #F5F5FA; padding:80px">
    <h3 class="bg-white p-2 mt-2 text-success text-center" style="background-color: #e1f1e9e5; font-size:25px;">
        My Uploaded Property List :
    </h3>


    <table class="table table-hover table-striped mt-4" border="1" style="border-color: rgb(215, 215, 215);">
        <thead class="bg-info text-white text-center">
            <tr>
                <th>SL No.</th>
                <th>Property Code</th>
                <th>Name</th>
                <th>Phone</th>
                <th>City Name</th>
                
                <th>Image</th>
                <th>Price (৳)</th>
                <th>Date-Time</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <?php $__empty_1 = true; $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e(loopIndex($property) + $loop->index); ?></td>
                <td><?php echo e($row->property_code); ?></td>
                <td><?php echo e($row->name); ?></td>
                <td><?php echo e($row->phone); ?></td>
                <td><?php echo e($row->city_name); ?></td>
                
                <td><img src="<?php echo e(URL::to($row->image_one)); ?>" height="40px;" width="45px;"></td>
                
                <?php if(isset($row->discount_price)): ?>
                    <td>৳ <?php echo e($row->discount_price); ?> (D)</td>
                <?php else: ?>
                    <td>৳ <?php echo e($row->price); ?></td>
                <?php endif; ?>
                <td><?php echo e(date('d M, Y h:i A', strtotime($row->created_at))); ?></td>
                <td>
                    <?php if($row->status == 0): ?>
                        <span class="badge badge-warning p-1">Pending</span>
                    <?php elseif($row->status == 1): ?>
                        <span class="badge badge-primary p-1">Uploaded</span>
                    <?php elseif($row->status == 2): ?>
                        <span class="badge badge-dark p-1">On Progress </span>
                    <?php elseif($row->status == 3): ?>
                        <span class="badge badge-success p-1">Delivered </span>
                    <?php else: ?>
                        <span class="badge badge-danger p-1">Canceled </span>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(URL::to('user/uploaded/property/view/'.$row->id)); ?>" class="btn btn-sm btn-primary" title="View_Details">
                        <i class="fa fa-eye"> View</i>
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="100%" class="text-danger text-center" style="font-size: 16px;">You did not upload any property yet.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

        <!--------------------Pagination--------------------->
        <div class="p-5" style="margin-left:600px; font-size: 14px;">
            <?php echo e($property->links()); ?>

        </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/pages/user_uploaded_property.blade.php ENDPATH**/ ?>