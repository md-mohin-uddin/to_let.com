<?php $__env->startSection('content'); ?>

<script src="<?php echo e(asset('public/frontend/js/jquery.min.js')); ?>"></script>   <!--f_ajax--->

<div style="background: #F5F5FA; padding-bottom:100px;">

<!-- Shop -->
<div class="shop">
    <div class="container-fluid">
        <div class="row ml-3 pl-3 py-5">

<!-----------------------Start Left_Side_Bar----------------------------->
            <div class="col-md-2 align-self-start top_bar_contact_item" style="padding-top: 140px; margin-right:-40px;">
                <!-- Shop Sidebar -->
    <!------SubCity list------------>
                <div>
                    <?php
                        $city1=DB::table('cities')->where('id',$cityId->city_id)->first();
                    ?>
                    
                    <div class="pr-0 mr-0" >
                        <h3 style="color: #39af39; font-size: 19px; padding-bottom:9px;">Popular <?php echo e($city1->city_name); ?> <br>Neighborhoods :</h3>
                        <ul class="ml-4" style="font-size: 16px;">
                            <?php $__currentLoopData = $subcity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="fas fa-arrow-right" style="font-size: 10px;"></li>
                                <li class="list-inline-item "><a href="<?php echo e(url('properties/'.$row->id)); ?>" style="color:blue;"><?php echo e($row->subcity_name); ?></a></li> <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

    <!-------------City list--------------->
                    <div class="my-4 py-2 pr-0 mr-0">
                        <h3 style="color:#39af39; font-size:20px; padding-bottom:9px;">Available Cities :</h3>
                        <?php
                            $city=DB::table('cities')->get();
                        ?>
                        <ul class="ml-4" style="font-size: 16px;">
                            <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $town): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="fas fa-arrow-right" style="font-size: 10px;"></li>
                                <li class="list-inline-item"><a href="<?php echo e(url('city/properties/'.$town->id)); ?>" style="color:blue;"><?php echo e($town->city_name); ?></a></li> <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                
              </div>
            </div>  <!--End left side -->

<!--------//------------//--------End Left_Side_Bar---------//------------//------------//-------->






<!------------------------Start Right_Side_Bar------------------------->
    <div class="col-md-10 pl-4" style="border-left:1px solid blue;">
        <!-- Shop Content -->
            <div class="clearfix pl-2" data-aos="fade-left">
                <?php if(isset($cityId->subcity_id) ): ?>
                    <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h2 style="font-size: 33px;" class="text-primary mb-0">Available Properties In <?php echo e($item->subcity); ?>, <?php echo e($item->city_name); ?></h2> <?php break; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <h2 style="font-size: 33px;" class="text-primary mb-0">Available Properties In <?php echo e($city1->city_name); ?></h2>
                <?php endif; ?>

                <p style="font-size: 17px; margin-top:0px;"><span class="badge badge-primary text-white rounded-circle p-1"><?php echo e(count($count)); ?></span> Properties found</p>
            </div> <hr class="pb-4">

<div class="mr-5 px-2" data-aos="fade-left">
    <!-- Project One -->
<?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row bg-white mb-4 border border-primary rounded ww ml-0">
    <div class="col-md-5 ml-0 pl-0">
        <div id="<?php echo e($row->property_code); ?>" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#<?php echo e($row->property_code); ?>" data-slide-to="0" class="active"></li>
                <li data-target="#<?php echo e($row->property_code); ?>" data-slide-to="1"></li>
                <li data-target="#<?php echo e($row->property_code); ?>" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" style="height: 300px">

        <!--------'wishlist' using ajax------->
            <div class="carousel-caption" style="transform: translate(68px,-221px)">
                <button class="addwishlist float-right" data-id="<?php echo e($row->id); ?>" role="button" style="background: none; border-style:none;" title="Add to wishlist">
                    <i class="fa fa-heart text-danger bg-white rounded-circle" style="font-size: 16px; padding: 10px;"></i>
                </button>
            </div>

        <!---------(Discount equation)-------->
            <div class="carousel-caption" style="transform: translate(-70px,-219px)">
                <ul class="float-left bg-danger rounded-circle ">
                    <?php if($row->discount_price == NULL): ?>
                    <li style="font-size: 13px; padding-top:9px; height:39px; width: 39px; border-radius:50%;">New</li>
                    <?php else: ?>
                    <?php
                        $price= implode(explode(',',$row->price));
                        $discount_price= implode(explode(',',$row->discount_price));
                        $amount= $price - $discount_price;
                        $discount= $amount/$price * 100;
                    ?>
                    <li style="font-size: 13px; padding-top:9px; height:39px; width: 39px; border-radius:50%;" title="Discount Available">
                        <?php echo e(intval($discount)); ?>%
                    </li>
                    <?php endif; ?>
                </ul>
            </div>

                <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                    <div class="carousel-item active">
                        <img style="height: 300px; width: 700px" src="<?php echo e(asset($row->image_one)); ?>"/>
                    </div>
                    <div class="carousel-item">
                        <img style="height: 300px; width: 700px" src="<?php echo e(asset($row->image_two)); ?>"/>
                    </div>
                    <div class="carousel-item">
                        <img style="height: 300px; width: 700px" src="<?php echo e(asset($row->image_three)); ?>"/>
                    </div>
                </a>
            </div>

            <a href="#<?php echo e($row->property_code); ?>" class="carousel-control-prev" data-slide="prev" title="Previous">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#<?php echo e($row->property_code); ?>" class="carousel-control-next" data-slide="next" title="Next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <div class="col-md-7">
    <?php if($row->purpose=='Sale'): ?>
        <h3 class="pt-3 text-primary font-weight-normal" title="Click for details">
            <a href="<?php echo e(url('property/details/'.$row->id)); ?>">
                <?php echo e($row->area); ?> Furnished <?php echo e($row->type); ?> Ready For <?php echo e($row->purpose); ?> at <?php echo e($row->city_name); ?>

            </a>
        </h3>
    <?php elseif($row->purpose=='Rent'): ?>
        <h3 class="pt-3 text-primary font-weight-normal" title="Click for details">
            <a href="<?php echo e(url('property/details/'.$row->id)); ?>">
                A Furnished <?php echo e($row->area); ?> <?php echo e($row->type); ?> Ready To <?php echo e($row->purpose); ?> at <?php echo e($row->city_name); ?>

            </a>
        </h3>
    <?php endif; ?>
        <p style="font-size: 15px" class="text-dark mb-0 pb-0" title="Place"><i class="fas fa-map-marker-alt mr-2 p-0" style="font-size:13px;"></i><?php echo e($row->address); ?>, <?php echo e($row->subcity); ?>, <?php echo e($row->city_name); ?>.</p>
        <p style="font-size: 16px" class="text-primary mt-0 pt-1">Property Code: <?php echo e($row->property_code); ?></p>


    <?php if($row->purpose=='Sale'): ?>
        <?php if($row->discount_price == NULL): ?>
            <div style="font-size: 25px" class="product_price discount my-0"> BDT <?php echo e($row->price); ?></div>
        <?php else: ?>
            <div style="font-size: 25px" class="product_price discount my-0"> BDT <?php echo e($row->discount_price); ?><span style="font-size: 17px"><del><b>BDT <?php echo e($row->price); ?></b></del></span></div>
        <?php endif; ?>
    <?php else: ?>
        <?php if($row->discount_price == NULL): ?>
            <div style="font-size: 25px" class="product_price discount my-0"> BDT <?php echo e($row->price); ?> / month</div>
        <?php else: ?>
            <div style="font-size: 25px" class="product_price discount my-0"> BDT <?php echo e($row->discount_price); ?> / month<span style="font-size: 17px"><del><b>BDT <?php echo e($row->price); ?></b></del></span></div>
        <?php endif; ?>
    <?php endif; ?>
    

        <div class="col-md-12 ml-0 pl-1" style="font-size: 20px">
            <i class="fas fa-bed pr-4" title="Bed Room"> <?php echo e($row->bedroom); ?> </i> |
            <i class="fas fa-bath p-4" title="Bath Room"> <?php echo e($row->bathroom); ?> </i> |
            <i class="fas fa-car p-4" title="Parking"> <?php echo e($row->parking); ?> </i> |
            <i class="fas fa-home p-4" title="Area"> <?php echo e($row->area); ?> </i> |
            <i class="fas fa-building p-4" title="Floor Level"> <?php echo e($row->floor); ?> </i> |
        </div>

        <div class="more">
            <a class="btn btn-white py-2 px-4 mr-3 text-white button-pipaluk button--inverted" style="font-size: 18px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-1"></i> Call </a>
            <a class="btn py-2 px-4 text-white button-pipaluk button--inverted" style="font-size: 18px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-1"></i> Email </a>
        </div>  <!--div class="more" extra added, & In <a> removed 'btn-primary',added button-pipaluk button--inverted-->
    </div>
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- /.row -->


    <!--If all property are sold under e subcategory then it will show this-->
        <?php if(count($count)== 0): ?>
            <h2 class="text-danger text-center mt-5"><i class="fa fa-times pr-2 text-danger"></i> Sorry! No property available at this moment.</h2>
        <?php endif; ?>


    </div>

        <!--------------------Pagination--------------------->
                <div class="p-5" style="margin-left:400px; font-size: 20px;">
                    <?php echo e($property->links()); ?>

                </div>

            </div><!--end col-lg-10--->
        </div>
    </div>
</div>
</div> <!--bg-color--->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToLet\resources\views/pages/properties.blade.php ENDPATH**/ ?>