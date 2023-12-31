<!----Ekhane FrontEnd tar full OUTPUT show ache,"Top Header+Footer" + 'NAV' + "yield(content)" Code ache --->

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="<?php echo e(asset('public/frontend/js/jquery.min.js')); ?>"></script>   <!--f_Ajx--->


<!---------------------- Start 'Deals of the week'(hot_new_arrival)---------------------------->
<?php
  $Deals=DB::table('user_properties')
        ->join('cities','user_properties.city_id','cities.id')
        ->join('subcities','user_properties.subcity_id','subcities.id')
        ->select('user_properties.*','cities.city_name','subcities.subcity_name')
        ->whereIn('status', [1,2])
        ->where('hot_new',1)
        ->orderBy('id','desc')
        ->limit(4)
        ->get();
?>

<!-----'Deals of the week' ------>
<div class="deals_featured">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                <!-- Deals -->

                <div class="deals">
                    <div class="deals_title">New arrival</div>
                    <div class="deals_slider_container">

                        <!-- Deals Slider -->
                        <div class="owl-carousel owl-theme deals_slider">
<!---------------------------------------------------------------->
                    <?php $__currentLoopData = $Deals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ht): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Deals Item -->
                            <div class="owl-item deals_item">

                                <div class="deals_image portfolio-item" title="Click for details">
                                    <img src="<?php echo e(asset($ht->image_one)); ?>" style="width: 330px; height: 255px;">
                                    <a href="<?php echo e(url('property/details/'.$ht->id)); ?>" class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3><?php echo e($ht->type); ?> for <?php echo e($ht->purpose); ?></h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p><?php echo e($ht->subcity_name); ?>, <?php echo e($ht->city_name); ?></p>
                                        </div>
                                    </a>
                                </div>

                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category">
                                            <a href="<?php echo e(url('property/details/'.$ht->id)); ?>" title="Click for details">
                                                <?php echo e($ht->city_name); ?>

                                            </a>
                                        </div>
                                        <?php if($ht->discount_price == NULL): ?>
                                        <?php else: ?>
                                          <div class="deals_item_price_a ml-auto"><del>৳ <?php echo e($ht->price); ?></del></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_name">
                                            <a href="<?php echo e(url('property/details/'.$ht->id)); ?>" title="Click for details">
                                                <?php echo e($ht->subcity_name); ?>

                                            </a>
                                        </div>

                                        <?php if($ht->discount_price == NULL): ?>
                                          <div class="deals_item_price ml-auto" style="font-size: 18px">৳ <?php echo e($ht->price); ?></div>
                                        <?php else: ?>
                                          <div class="deals_item_price ml-auto" style="font-size: 18px">৳ <?php echo e($ht->discount_price); ?></div>
                                        <?php endif; ?>
                                    </div>


                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-1">
                                      <span class="col-md-5"><?php echo e($ht->type); ?> for <?php echo e($ht->purpose); ?></span> <span class="col-md-7 mr-auto justify-content-start"><hr></span>
                                    </div>


                                    <div class="row mb-4">
                                        <div class="col-md-12 mb-2" title="Place">
                                            <i class="fas fa-map-marker-alt mr-2 p-0" style="font-size:13px;" title="Place"></i><?php echo e($ht->address); ?>

                                        </div>
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> <?php echo e($ht->bedroom); ?></i>|
                                            <i class="fas fa-bath" title="Bath Room"> <?php echo e($ht->bathroom); ?></i>|
                                            <i class="fas fa-car" title="Parking"> <?php echo e($ht->parking); ?></i>|
                                            <i class="fas fa-home" title="Area"> <?php echo e($ht->area); ?></i>
                                        </div>
                                    </div>


                                    <!-- <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="deals_timer_title_container">
                                            <div class="deals_timer_title">Hurry Up</div>
                                            <div class="deals_timer_subtitle">Offer ends in:</div>
                                        </div>
                                        <div class="deals_timer_content ml-auto">
                                            <div class="deals_timer_box clearfix" data-target-time="">
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer2_hr" class="deals_timer_hr"></div>
                                                    <span>hours</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer2_min" class="deals_timer_min"></div>
                                                    <span>mins</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer2_sec" class="deals_timer_sec"></div>
                                                    <span>secs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                    </div>

                    <div class="deals_slider_nav_container">
                        <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                        <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                    </div>
                </div>
    <!----------//-----//------ End of 'Deals of the Weak' -----------//-----------//-------->





<!-----------------------Start 'Featured'------------------------------>
<?php
    $featured=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->whereIn('status', [1,2])->orderBy('id','desc')->get();   //sob_property(available)
?>

    <!------ Featured ------>
                <div class="featured">
                    <div class="tabbed_container">
                        <div class="tabs">
                            <ul class="clearfix">
                                <li class="active"><?php if(session()->get('lang') == 'bangla'): ?>ফিচারড <?php else: ?> Featured <?php endif; ?></li>
                                <li><?php if(session()->get('lang') == 'bangla'): ?>বিক্রয়ের জন্য <?php else: ?> For Sale <?php endif; ?></li>
                                <li><?php if(session()->get('lang') == 'bangla'): ?>ভাড়ার জন্য <?php else: ?> To Rent <?php endif; ?></li>
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <!-- Product Panel -->
                        <div class="product_panel panel active">
                            <div class="featured_slider slider pb-5 mb-5">

<!---------------------------------------------------------------->
                            <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Slider Item -->
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center" >
                                            <img src="<?php echo e(asset($row->image_one)); ?>" style="height: 140px; width: 150px;">

                                            <a href="<?php echo e(url('property/details/'.$row->id)); ?>" class="portfolio-item-overlay" title="Click for details">
                                                <div class="portfolio-item-details text-center">
                                                    <!--item logo-->
                                                    <h3 style="font-size:10px"><?php echo e($row->type); ?> for <?php echo e($row->purpose); ?></h3>
                                                    <!--item strips-->
                                                    <span></span>
                                                    <!--item description-->
                                                    <p style="font-size:12px"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?></p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="product_content">
                                            
                                            <?php if($row->discount_price == NULL): ?>
                                                <div class="product_price discount my-2"> ৳ <?php echo e($row->price); ?></div>
                                            <?php else: ?>
                                             <div class="product_price discount my-2"> ৳ <?php echo e($row->discount_price); ?><span><del><b> ৳ <?php echo e($row->price); ?></b></del></span></div>
                                            <?php endif; ?>
                                                
                                            <div class="row mb-0 pb-0">
                                                <div class="col-md-12 text-primary">
                                                    <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                        <?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?>

                                                    </a>
                                                </div>
                                                <div class="col-md-12 py-1 text-muted">
                                                    <i class="fas fa-bed" title="Bed Room"> <?php echo e($row->bedroom); ?></i> |
                                                    <i class="fas fa-bath" title="Bath Room"> <?php echo e($row->bathroom); ?></i> |
                                                    
                                                    <i class="fas fa-home" title="Area"> <?php echo e($row->area); ?></i>
                                                </div>
                                            </div>

    <!--------"Call & Email" (app.balde.php e niche "Modal" er code ache)-------->
                                            <div class="product_extras product_cart_button more moreFront">
                                                
    <a class="btn py-2 px-3 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-1"></i> Call </a>
    <a class="btn py-2 px-3 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-1"></i> Email </a>
                                            </div>
                                        </div>

        <!-------'Wishlist' using Toaster--------->
                                        <!--  -->
        <!--------'wishlist' using ajax (niche JS ache)-------->
                                <!-- <button class="addwishlist" data-id="<?php echo e($row->id); ?>" title="Add to wishlist">
                                    <div class="product_fav">
                                    <i class="fa fa-heart text-danger"></i>
                                    </div>
                                </button> -->

        <!---------(Discount equation)-------->
                                        <!-- <ul class="product_marks">
                                            <?php if($row->discount_price == NULL): ?>
                                            <li class="product_mark product_discount" style="background: #6868cc;">New</li>
                                            <?php else: ?>
                                            <?php
                                                $price= implode(explode(',',$row->price));
                                                $discount_price= implode(explode(',',$row->discount_price));
                                                $amount= $price - $discount_price;
                                                $discount= $amount/$price * 100;
                                            ?>
                                            <li class="product_mark product_discount" title="Discount Available">
                                                <?php echo e(intval($discount)); ?>%
                                            </li>
                                            <?php endif; ?>
                                        </ul> -->

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="featured_slider_dots_cover"></div>
                        </div>

<!-------------//--------------End Featured property-------------//-----------------//------------>



<!---------------------------Start Sale(property)----------------------------------------------------------->
<?php
    $sale=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->whereIn('status', [1,2])->where('purpose','Sale')->orderBy('id','desc')->get();   //Sale_property(available)
?>

            <!-- Product Panel -->

            <div class="product_panel panel">
                <div class="featured_slider slider pb-5 mb-5">

                    <!-- Slider Item -->
<!---------------------------------------------------------------->
                        <?php $__currentLoopData = $sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Slider Item -->
                            <div class="featured_slider_item">
                                <div class="border_active"></div>
                                <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                    <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                        <img src="<?php echo e(asset($row->image_one)); ?>" style="height: 140px; width: 150px;">

                                        <a href="<?php echo e(url('property/details/'.$row->id)); ?>" class="portfolio-item-overlay" title="Click for details">
                                            <div class="portfolio-item-details text-center">
                                                <!--item logo-->
                                                <h3 style="font-size:10px"><?php echo e($row->type); ?> for <?php echo e($row->purpose); ?></h3>
                                                <!--item strips-->
                                                <span></span>
                                                <!--item description-->
                                                <p style="font-size:12px"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?></p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="product_content">
                                        
                                        <?php if($row->discount_price == NULL): ?>
                                            <div class="product_price discount my-2"> ৳ <?php echo e($row->price); ?></div>
                                        <?php else: ?>
                                         <div class="product_price discount my-2"> ৳ <?php echo e($row->discount_price); ?><span><del><b> ৳ <?php echo e($row->price); ?></b></del></span></div>
                                        <?php endif; ?>
                                            
                                        <div class="row mb-0 pb-0">
                                            <div class="col-md-12 text-primary">
                                                <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                    <?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?>

                                                </a>
                                            </div>
                                            <div class="col-md-12 py-1 text-muted">
                                                <i class="fas fa-bed" title="Bed Room"> <?php echo e($row->bedroom); ?></i> |
                                                <i class="fas fa-bath" title="Bath Room"> <?php echo e($row->bathroom); ?></i> |
                                                
                                                <i class="fas fa-home" title="Area"> <?php echo e($row->area); ?></i>
                                            </div>
                                        </div>

        <!--------"Call & Email" (app.balde.php e niche "Modal" er code ache)-------->
                                        <div class="product_extras product_cart_button more moreFront">
    <a class="btn py-2 px-3 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-1"></i> Call </a>
    <a class="btn py-2 px-3 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-1"></i> Email </a>
                                        </div>
                                    </div>

        <!------'Wishlist' using Toastr--------->
                                    <!-- <a href="<?php echo e(URL::to('add/wishlist/tostr/'.$row->id)); ?>" title="Add to wishlist">
                                        <div class="product_fav">
                                            <i class="fa fa-heart text-danger"></i>
                                        </div>
                                    </a> -->

        <!---------(Discount equation)-------->
                                    <!-- <ul class="product_marks">
                                        <?php if($row->discount_price == NULL): ?>
                                        <li class="product_mark product_discount" style="background: #6868cc;">New</li>
                                        <?php else: ?>
                                        <?php
                                            $price= implode(explode(',',$row->price));
                                            $discount_price= implode(explode(',',$row->discount_price));
                                            $amount= $price - $discount_price;
                                            $discount= $amount/$price * 100;
                                        ?>
                                        <li class="product_mark product_discount" title="Discount Percentage">
                                            <?php echo e(intval($discount)); ?>%
                                        </li>
                                        <?php endif; ?>
                                    </ul> -->

                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div class="featured_slider_dots_cover"></div>
                </div>
<!----------//------------------End Sale(property)--------------//-------------//---------->



<!------------------------Start Rent(property)-------------------------------------------------------------->
<?php
    $rent=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->whereIn('status', [1,2])->where('purpose','Rent')->orderBy('id','desc')->get();   //Rent_property(available)
?>
            <!-- Product Panel -->

            <div class="product_panel panel">
                <div class="featured_slider slider pb-5 mb-5">

                    <!-- Slider Item -->
<!---------------------------------------------------------------->
                    <?php $__currentLoopData = $rent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Slider Item -->
                        <div class="featured_slider_item">
                            <div class="border_active"></div>
                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                    <img src="<?php echo e(asset($row->image_one)); ?>" style="height: 140px; width: 150px;">

                                    <a href="<?php echo e(url('property/details/'.$row->id)); ?>" class="portfolio-item-overlay" title="Click for details">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3 style="font-size:10px"><?php echo e($row->type); ?> for <?php echo e($row->purpose); ?></h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p style="font-size:12px"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?></p>
                                        </div>
                                    </a>
                                </div>

                                <div class="product_content">
                                    
                                    <?php if($row->discount_price == NULL): ?>
                                        <div class="product_price discount my-2"> ৳ <?php echo e($row->price); ?></div>
                                    <?php else: ?>
                                     <div class="product_price discount my-2"> ৳ <?php echo e($row->discount_price); ?><span><del><b> ৳ <?php echo e($row->price); ?></b></del></span></div>
                                    <?php endif; ?>
                                        
                                    <div class="row mb-0 pb-0">
                                        <div class="col-md-12 text-primary">
                                            <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                <?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?>

                                            </a>
                                        </div>
                                        <div class="col-md-12 py-1 text-muted">
                                            <i class="fas fa-bed" title="Bed Room"> <?php echo e($row->bedroom); ?></i> |
                                            <i class="fas fa-bath" title="Bath Room"> <?php echo e($row->bathroom); ?></i> |
                                            
                                            <i class="fas fa-home" title="Area"> <?php echo e($row->area); ?></i>
                                        </div>
                                    </div>

        <!--------"Call & Email" (app.balde.php e niche "Modal" er code ache)-------->
                                    <div class="product_extras product_cart_button more moreFront">
    <a class="btn py-2 px-3 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-1"></i> Call </a>
    <a class="btn py-2 px-3 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-1"></i> Email </a>
                                    </div>
                                </div>

        <!------ 'Wishlist' using Toastr--------->
                                <!-- <a href="<?php echo e(URL::to('add/wishlist/tostr/'.$row->id)); ?>" title="Add to wishlist">
                                    <div class="product_fav">
                                        <i class="fa fa-heart text-danger"></i>
                                    </div>
                                </a> -->

        <!---------(Discount equation)-------->
                                <!-- <ul class="product_marks">
                                    <?php if($row->discount_price == NULL): ?>
                                    <li class="product_mark product_discount" style="background: #6868cc;">New</li>
                                    <?php else: ?>
                                    <?php
                                        $price= implode(explode(',',$row->price));
                                        $discount_price= implode(explode(',',$row->discount_price));
                                        $amount= $price - $discount_price;
                                        $discount= $amount/$price * 100;
                                    ?>
                                    <li class="product_mark product_discount" title="Discount Percentage">
                                        <?php echo e(intval($discount)); ?>%
                                    </li>
                                    <?php endif; ?>
                                </ul> -->

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
                <div class="featured_slider_dots_cover"></div>
            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>      <!--------------- End of "Rent(property)" ------------------>

<!---------------//------------ End of "Deals of the Week" -------------------------------------->






<!------------------------------------------------------------------------------------------------------------>
                                    <!-----Start Best Rated------>
<!------------------------------------------------------------------------------------------------------------>
<?php
  $bestRated=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->whereIn('status', [1,2])->where('best_rated',1)->orderBy('id','desc')->get();
?>

<div class="trends">
    <div class="trends_background"></div>
    <div class="trends_overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Trends Content -->
            <div class="col-lg-3">
                <div class="trends_container">
                    <h2 class="trends_title text-light">Best Rated Properties</h2>
                    <div class="trends_text"><p style="color: white">Find Best Rated stylish properties all under a single roof...</p></div>
                    <div class="trends_slider_nav">
                        <div class="trends_prev trends_nav" title="Previous"><i class="fas fa-angle-left ml-auto"></i></div>
                        <div class="trends_next trends_nav" title="Next"><i class="fas fa-angle-right ml-auto"></i></div>
                    </div>
                </div>
            </div>

            <!-- Trends Slider -->
            <div class="col-lg-9">
                <div class="trends_slider_container">

                    <!-- Trends Slider -->
                    <div class="owl-carousel owl-theme trends_slider">

    <!-------------------------------------------------------------------->
                        <!-- Trends Slider Item -->
                    <?php $__currentLoopData = $bestRated; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="owl-item">
                            <div class="trends_item is_new mb-0 pb-0">

                                <div class="trends_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                    <img src="<?php echo e(asset($row->image_one)); ?>" style="width: 200px; height: 200px">
                                    <a href="<?php echo e(url('property/details/'.$row->id)); ?>" class="portfolio-item-overlay" title="Click for details">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3 style="font-size:12px"><?php echo e($row->type); ?> For <?php echo e($row->purpose); ?></h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p style="font-size:13px"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?></p>
                                        </div>
                                    </a>
                                </div>

                                <div class="trends_content" style="margin-top: 5px">
                                    <div class="trends_info clearfix">
                                        <span class="trends_category">
                                            <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                <?php echo e($row->city_name); ?>

                                            </a>
                                        </span>
                                        <?php if($row->discount_price == NULL): ?>
                                        <?php else: ?>
                                            <span class="trends_price ml-auto" style="font-size: 15px"><del>৳ <?php echo e($row->price); ?></del></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="trends_info clearfix">
                                        <div class="trends_name">
                                            <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                <?php echo e($row->subcity_name); ?>

                                            </a>
                                        </div>
                                        <?php if($row->discount_price == NULL): ?>
                                            <div class="trends_price ml-auto text-danger" style="font-size: 18px">৳ <?php echo e($row->price); ?></div>
                                        <?php else: ?>
                                            <div class="trends_price ml-auto text-danger" style="font-size: 18px">৳ <?php echo e($row->discount_price); ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-0" style="color:blue">
                                        <span class="col-md-7"><?php echo e($row->type); ?> For <?php echo e($row->purpose); ?></span> <span class="col-md-5 mr-auto justify-content-start"><hr></span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> <?php echo e($row->bedroom); ?></i>&nbsp;|&nbsp;
                                            <i class="fas fa-bath" title="Bath Room"> <?php echo e($row->bathroom); ?></i>&nbsp; | &nbsp;
                                            <i class="fas fa-car" title="Parking"> <?php echo e($row->parking); ?></i>&nbsp;|
                                            <i class="fas fa-home" title="Area"> <?php echo e($row->area); ?></i>
                                        </div>
                                    </div>
                                    <div class="more" style="margin: 0px 0px;">
    <a class="btn text-white py-2 px-3 mr-3 button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-2"></i> Call </a>
    <a class="btn text-white py-2 px-3 button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-2"></i> Email </a>
                                    </div>
                                </div>

        <!--------'wishlist' using ajax (niche JS ache)-------->
                                <!-- <button class="addwishlist invisible" data-id="<?php echo e($row->id); ?>" title="Add to wishlist">
                                    <div class="trends_fav">
                                        <i class="fa fa-heart text-danger"></i>
                                    </div>
                                </button> -->

        <!---------(Discount equation)-------->
                                <!-- <ul class="trends_marks">
                                    <?php if($row->discount_price == NULL): ?>
                                        <li class="trends_mark trends_new" style="background: #6868cc;">New</li>
                                    <?php else: ?>
                                    <?php
                                        $price= implode(explode(',',$row->price));
                                        $discount_price= implode(explode(',',$row->discount_price));
                                        $amount= $price - $discount_price;
                                        $discount= $amount/$price * 100;
                                    ?>
                                    <li class="trends_mark trends_new bg-danger" title="Discount Percentage">
                                        <?php echo e(intval($discount)); ?>%
                                    </li>
                                    <?php endif; ?>
                                </ul> -->

                            </div>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>  <!--col-->

    </div>  <!--row-->
</div>  <!--container-->
</div>

<!--------//------------//----------//---------End Best Rated----------//------------//-------------//------------>







<!---------------------------------------------------------------------------------------------------->
                            <!--- for Showing 'Chittagong' City (1st place) --->
<!---------------------------------------------------------------------------------------------------->
<?php
    $city=DB::table('cities')->skip(0)->first();
    $city_id=$city->id;
    $ctg=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->where('user_properties.city_id',$city_id)->whereIn('status', [1,2])->orderBy('id','desc')->get();   //sob_property(available)
?>
<!----------------------------------Start Featured(chattogram) Property-------------------------------------------->

<div class="hot_arrivals">
    <div class="new_arrivals">
        <div class="container">
            <div class="row pl-5">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title"><?php echo e($city->city_name); ?> City's Properties</div>
                            <ul class="clearfix">
                                <li class="active">Featured</li>
                                <li>For Sale</li>
                                <li>To Rent</li>
                            </ul>
                            <div class="tabs_line" style="border: 1px solid green; margin-bottom: 25px;"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider pb-4 mb-4">

<!---------------------------------------------------------------->
                                    <?php $__currentLoopData = $ctg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item m-1">
                                            <div class="border_active"></div>
                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                                <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                    <img src="<?php echo e(asset($row->image_one)); ?>" style="height: 150px; width: 200px;">

                                                    <a href="<?php echo e(url('property/details/'.$row->id)); ?>" class="portfolio-item-overlay" title="Click for details">
                                                        <div class="portfolio-item-details text-center">
                                                            <!--item logo-->
                                                            <h3 style="font-size:10px"><?php echo e($row->type); ?> for <?php echo e($row->purpose); ?></h3>
                                                            <!--item strips-->
                                                            <span></span>
                                                            <!--item description-->
                                                            <p style="font-size:12px"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?></p>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="product_content">
                                                    
                                                    <?php if($row->discount_price == NULL): ?>
                                                        <div class="product_price discount my-2"> ৳ <?php echo e($row->price); ?></div>
                                                    <?php else: ?>
                                                     <div class="product_price discount my-2"> ৳ <?php echo e($row->discount_price); ?><span><del><b> ৳ <?php echo e($row->price); ?></b></del></span></div>
                                                    <?php endif; ?>
                                                        
                                                    <div class="row mb-0 pb-0">
                                                        <div class="col-md-12 text-primary">
                                                            <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                                <?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?>

                                                            </a>
                                                        </div>
                                                        <div class="col-md-12 py-1 text-muted">
                                                            <i class="fas fa-bed" title="Bed Room"> <?php echo e($row->bedroom); ?> </i> |&nbsp;
                                                            <i class="fas fa-bath" title="Bath Room"> <?php echo e($row->bathroom); ?> </i> |&nbsp;
                                                            <i class="fas fa-car" title="Parking"> <?php echo e($row->parking); ?> </i> |&nbsp;
                                                            <i class="fas fa-home" title="Area"> <?php echo e($row->area); ?> </i>
                                                        </div>
                                                    </div>

            <!--------"Check Availability" (niche "Modal" er code ache)-------->
                                                    <div class="product_extras product_cart_button more moreFront">
                                                        
    <a class="btn py-2 px-4 mr-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-1"></i> Call </a>
    <a class="btn py-2 px-4 ml-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-1"></i> Email </a>
                                                    </div>
                                                </div>

                <!-------'Wishlist' using Toastr--------->
                                        <!--  -->
                <!--------'wishlist' using ajax (niche JS ache)-------->
                                        <!-- <button class="addwishlist" data-id="<?php echo e($row->id); ?>" title="Add to wishlist">
                                            <div class="product_fav">
                                            <i class="fa fa-heart text-danger"></i>
                                            </div>
                                        </button> -->

                <!---------(Discount equation)-------->
                                                <!-- <ul class="product_marks">
                                                    <?php if($row->discount_price == NULL): ?>
                                                    <li class="product_mark product_discount" style="background: #6868cc;">New</li>
                                                    <?php else: ?>
                                                    <?php
                                                        $price= implode(explode(',',$row->price));
                                                        $discount_price= implode(explode(',',$row->discount_price));
                                                        $amount= $price - $discount_price;
                                                        $discount= $amount/$price * 100;
                                                    ?>
                                                    <li class="product_mark product_discount" title="Discount Percentage">
                                                        <?php echo e(intval($discount)); ?>%
                                                    </li>
                                                    <?php endif; ?>
                                                </ul> -->

                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

        <!-------------//--------------End Featured(chattogram) property-------------//-----------------//------------>



<!---------------------------------Start Sale(chattogram)---------------------------------->
<?php
    $city=DB::table('cities')->skip(0)->first();
    $city_id=$city->id;
    $ctgSale=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->where('user_properties.city_id',$city_id)->where('purpose','Sale')->whereIn('status', [1,2])->orderBy('id','desc')->get();   //sob_property(available)
?>

                            <!-- Product Panel -->
                            <div class="product_panel panel">
                                <div class="arrivals_slider slider pb-4 mb-4">

<!-------------------------------------------------------------------->
                                <?php $__currentLoopData = $ctgSale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item m-1">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="<?php echo e(asset($row->image_one)); ?>" style="height: 180px; width: 200px;">

                                                <a href="<?php echo e(url('property/details/'.$row->id)); ?>" class="portfolio-item-overlay" title="Click for details">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px"><?php echo e($row->type); ?> for <?php echo e($row->purpose); ?></h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?></p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="product_content">
                                                
                                                <?php if($row->discount_price == NULL): ?>
                                                    <div class="product_price discount my-2"> ৳ <?php echo e($row->price); ?></div>
                                                <?php else: ?>
                                                    <div class="product_price discount my-2"> ৳ <?php echo e($row->discount_price); ?><span><del><b> ৳ <?php echo e($row->price); ?></b></del></span></div>
                                                <?php endif; ?>
                                                    
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">
                                                        <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                            <?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?>

                                                        </a>
                                                    </div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room"> <?php echo e($row->bedroom); ?> </i> |&nbsp;
                                                        <i class="fas fa-bath" title="Bath Room"> <?php echo e($row->bathroom); ?> </i> |&nbsp;
                                                        <i class="fas fa-car" title="Parking"> <?php echo e($row->parking); ?> </i> |&nbsp;
                                                        <i class="fas fa-home" title="Area"> <?php echo e($row->area); ?> </i>
                                                    </div>
                                                </div>

        <!--------"Check Availability" (niche "Modal" er code ache)-------->
                                                <div class="product_extras product_cart_button more moreFront">
                                                    
        <a class="btn py-2 px-4 mr-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-1"></i> Call </a>
        <a class="btn py-2 px-4 ml-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-1"></i> Email </a>
                                                </div>
                                            </div>

            <!-------'Wishlist' using Toastr--------->
                                            <!-- <a href="<?php echo e(URL::to('add/wishlist/tostr/'.$row->id)); ?>" title="Add to wishlist">
                                                <div class="product_fav">
                                                    <i class="fa fa-heart text-danger"></i>
                                                </div>
                                            </a> -->
            <!--------'wishlist' using ajax (niche JS ache)-------->
                                    <!--  -->

            <!---------(Discount equation)-------->
                                            <!-- <ul class="product_marks">
                                                <?php if($row->discount_price == NULL): ?>
                                                <li class="product_mark product_discount" style="background: #6868cc;">New</li>
                                                <?php else: ?>
                                                <?php
                                                    $price= implode(explode(',',$row->price));
                                                    $discount_price= implode(explode(',',$row->discount_price));
                                                    $amount= $price - $discount_price;
                                                    $discount= $amount/$price * 100;
                                                ?>
                                                <li class="product_mark product_discount" title="Discount Percentage">
                                                    <?php echo e(intval($discount)); ?>%
                                                </li>
                                                <?php endif; ?>
                                            </ul> -->

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>



<!----------------------------Start Rent(chattogram)------------------------------------------------------------------>
<?php
    $city=DB::table('cities')->skip(0)->first();
    $city_id=$city->id;
    $ctgRent=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->where('user_properties.city_id',$city_id)->where('purpose','Rent')->whereIn('status', [1,2])->orderBy('id','desc')->get();   //sob_property(available)
?>

                            <!-- Product Panel -->
                            <div class="product_panel panel">
                                <div class="arrivals_slider slider pb-4 mb-4">

<!-------------------------------------------------------------------->
                                <?php $__currentLoopData = $ctgRent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item m-1">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="<?php echo e(asset($row->image_one)); ?>" style="height: 180px; width: 200px;">

                                                <a href="<?php echo e(url('property/details/'.$row->id)); ?>" class="portfolio-item-overlay" title="Click for details">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px"><?php echo e($row->type); ?> for <?php echo e($row->purpose); ?></h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?></p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="product_content">
                                                
                                                <?php if($row->discount_price == NULL): ?>
                                                    <div class="product_price discount my-2"> ৳ <?php echo e($row->price); ?></div>
                                                <?php else: ?>
                                                    <div class="product_price discount my-2"> ৳ <?php echo e($row->discount_price); ?><span><del><b> ৳ <?php echo e($row->price); ?></b></del></span></div>
                                                <?php endif; ?>
                                                    
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary"><a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?>

                                                    </a>
                                                </div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room"> <?php echo e($row->bedroom); ?> </i> |&nbsp;
                                                        <i class="fas fa-bath" title="Bath Room"> <?php echo e($row->bathroom); ?> </i> |&nbsp;
                                                        <i class="fas fa-car" title="Parking"> <?php echo e($row->parking); ?> </i> |&nbsp;
                                                        <i class="fas fa-home" title="Area"> <?php echo e($row->area); ?> </i>
                                                    </div>
                                                </div>

        <!--------"Check Availability" (niche "Modal" er code ache)-------->
                                                <div class="product_extras product_cart_button more moreFront">
                                                    
        <a class="btn py-2 px-4 mr-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-1"></i> Call </a>
        <a class="btn py-2 px-4 ml-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-1"></i> Email </a>
                                                </div>
                                            </div>

            <!-------'Wishlist' using Toastr--------->
                                        <!-- <a href="<?php echo e(URL::to('add/wishlist/tostr/'.$row->id)); ?>" title="Add to wishlist">
                                            <div class="product_fav">
                                                <i class="fa fa-heart text-danger"></i>
                                            </div>
                                        </a> -->
            <!--------'wishlist' using ajax (niche JS ache)-------->
                                    <!--  -->

            <!---------(Discount equation)-------->
                                            <!-- <ul class="product_marks">
                                                <?php if($row->discount_price == NULL): ?>
                                                <li class="product_mark product_discount" style="background: #6868cc;">New</li>
                                                <?php else: ?>
                                                <?php
                                                    $price= implode(explode(',',$row->price));
                                                    $discount_price= implode(explode(',',$row->discount_price));
                                                    $amount= $price - $discount_price;
                                                    $discount= $amount/$price * 100;
                                                ?>
                                                <li class="product_mark product_discount" title="Discount Percentage">
                                                    <?php echo e(intval($discount)); ?>%
                                                </li>
                                                <?php endif; ?>
                                            </ul> -->

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-----------------------------------------End of Showing 'Chittagong' City (1st place)-------------------------------------->








<!---------------------------start "Popular Categories" -------------------------------------->







<!------------------------------------------------------------------------------------------------------------>
                                    <!-----Start Trends------>
<!------------------------------------------------------------------------------------------------------------>
<?php
  $trend=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->whereIn('status', [1,2])->where('trend',1)->orderBy('id','desc')->get();
?>

<div class="trends">
    <div class="trends_background"></div>
    <div class="trends_overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Trends Content -->
            <div class="col-lg-3">
                <div class="trends_container">
                    <h2 class="trends_title text-light">Trends 2023...</h2>
                    <div class="trends_text"><p style="color: white">Find all Trending stylish properties under a single roof</p></div>
                    <div class="trends_slider_nav">
                        <div class="trends_prev trends_nav" title="Previous"><i class="fas fa-angle-left ml-auto"></i></div>
                        <div class="trends_next trends_nav" title="Next"><i class="fas fa-angle-right ml-auto"></i></div>
                    </div>
                </div>
            </div>

            <!-- Trends Slider -->
            <div class="col-lg-9">
                <div class="trends_slider_container">

                    <!-- Trends Slider -->
                    <div class="owl-carousel owl-theme trends_slider">

    <!-------------------------------------------------------------------->
                        <!-- Trends Slider Item -->
                    <?php $__currentLoopData = $trend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="owl-item">
                            <div class="trends_item is_new mb-0 pb-0">

                                <div class="trends_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                    <img src="<?php echo e(asset($row->image_one)); ?>" style="width: 200px; height: 200px">

                                    <a href="<?php echo e(url('property/details/'.$row->id)); ?>" class="portfolio-item-overlay" title="Click for details">
                                        <div class="portfolio-item-details text-center">
                                            <!--item logo-->
                                            <h3 style="font-size:12px"><?php echo e($row->type); ?> For <?php echo e($row->purpose); ?></h3>
                                            <!--item strips-->
                                            <span></span>
                                            <!--item description-->
                                            <p style="font-size:13px"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?></p>
                                        </div>
                                    </a>
                                </div>

                                <div class="trends_content" style="margin-top: 5px">
                                    <div class="trends_info clearfix">
                                        <span class="trends_category">
                                            <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                <?php echo e($row->city_name); ?>

                                            </a>
                                        </span>
                                        <?php if($row->discount_price == NULL): ?>
                                        <?php else: ?>
                                            <span class="trends_price ml-auto" style="font-size: 15px"><del>৳ <?php echo e($row->price); ?></del></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="trends_info clearfix">
                                        <div class="trends_name">
                                            <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                <?php echo e($row->subcity_name); ?>

                                            </a>
                                        </div>
                                        <?php if($row->discount_price == NULL): ?>
                                            <div class="trends_price ml-auto text-danger" style="font-size: 18px">৳ <?php echo e($row->price); ?></div>
                                        <?php else: ?>
                                            <div class="trends_price ml-auto text-danger" style="font-size: 18px">৳ <?php echo e($row->discount_price); ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="DealsWeek row no-gutters align-items-center justify-content-start mt-0" style="color:blue">
                                        <span class="col-md-7"><?php echo e($row->type); ?> For <?php echo e($row->purpose); ?></span> <span class="col-md-5 mr-auto justify-content-start"><hr></span>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <i class="fas fa-bed" title="Bed Room"> <?php echo e($row->bedroom); ?></i>&nbsp;|&nbsp;
                                            <i class="fas fa-bath" title="Bath Room"> <?php echo e($row->bathroom); ?></i>&nbsp; | &nbsp;
                                            <i class="fas fa-car" title="Parking"> <?php echo e($row->parking); ?></i>&nbsp;|
                                            <i class="fas fa-home" title="Area"> <?php echo e($row->area); ?></i>
                                        </div>
                                    </div>
                                    <div class="more" style="margin: 0px 0px;">
    <a class="btn text-white py-2 px-3 mr-3 button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-2"></i> Call </a>
    <a class="btn text-white py-2 px-3 button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-2"></i> Email </a>
                                    </div>
                                </div>

        <!--------'wishlist' using ajax (niche JS ache)-------->
                                <!-- <button class="addwishlist invisible" data-id="<?php echo e($row->id); ?>" title="Add to wishlist">
                                    <div class="trends_fav">
                                        <i class="fa fa-heart text-danger"></i>
                                    </div>
                                </button> -->

        <!---------(Discount equation)-------->
                                <!-- <ul class="trends_marks">
                                    <?php if($row->discount_price == NULL): ?>
                                        <li class="trends_mark trends_new" style="background: #6868cc;">New</li>
                                    <?php else: ?>
                                    <?php
                                        $price= implode(explode(',',$row->price));
                                        $discount_price= implode(explode(',',$row->discount_price));
                                        $amount= $price - $discount_price;
                                        $discount= $amount/$price * 100;
                                    ?>
                                    <li class="trends_mark trends_new bg-danger" title="Discount Percentage">
                                        <?php echo e(intval($discount)); ?>%
                                    </li>
                                    <?php endif; ?>
                                </ul> -->

                            </div>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>  <!--col-->
        </div> <!--row-->

    </div> <!--container-->
</div>
</div>

<!--------//------------//----------//---------End Trends----------//------------//-------------//------------>






<!---------------------------------------------------------------------------------------------------->
                            <!--- for Showing 'Dhaka' City (2nd placed City) --->
<!---------------------------------------------------------------------------------------------------->
<?php
    $city=DB::table('cities')->skip(1)->first();
    $city_id=$city->id;
    $dha=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->where('user_properties.city_id',$city_id)->whereIn('status', [1,2])->orderBy('id','desc')->get();   //sob_property(available)
?>
<!----------------------------------Start Featured(Dhaka) Property-------------------------------------------->

<div class="hot_arrivals">
    <div class="new_arrivals">
        <div class="container">
            <div class="row pl-5">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title"><?php echo e($city->city_name); ?> City's Properties</div>
                            <ul class="clearfix">
                                <li class="active">Featured</li>
                                <li>For Sale</li>
                                <li>To Rent</li>
                            </ul>
                            <div class="tabs_line" style="border: 1px solid green; margin-bottom: 25px;"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider pb-4 mb-4">

<!---------------------------------------------------------------->
                                    <?php $__currentLoopData = $dha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item m-1">
                                            <div class="border_active"></div>
                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                                <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                    <img src="<?php echo e(asset($row->image_one)); ?>" style="height: 180px; width: 200px;">

                                                    <a href="<?php echo e(url('property/details/'.$row->id)); ?>" class="portfolio-item-overlay" title="Click for details">
                                                        <div class="portfolio-item-details text-center">
                                                            <!--item logo-->
                                                            <h3 style="font-size:10px"><?php echo e($row->type); ?> for <?php echo e($row->purpose); ?></h3>
                                                            <!--item strips-->
                                                            <span></span>
                                                            <!--item description-->
                                                            <p style="font-size:12px"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?></p>
                                                        </div>
                                                    </a>
                                                </div>

                                                <div class="product_content">
                                                    
                                                    <?php if($row->discount_price == NULL): ?>
                                                        <div class="product_price discount my-2"> ৳ <?php echo e($row->price); ?></div>
                                                    <?php else: ?>
                                                     <div class="product_price discount my-2"> ৳ <?php echo e($row->discount_price); ?><span><del><b> ৳ <?php echo e($row->price); ?></b></del></span></div>
                                                    <?php endif; ?>
                                                        
                                                    <div class="row mb-0 pb-0">
                                                        <div class="col-md-12 text-primary">
                                                            <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                                <?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?>

                                                            </a>
                                                        </div>
                                                        <div class="col-md-12 py-1 text-muted">
                                                            <i class="fas fa-bed" title="Bed Room"> <?php echo e($row->bedroom); ?> </i> |&nbsp;
                                                            <i class="fas fa-bath" title="Bath Room"> <?php echo e($row->bathroom); ?> </i> |&nbsp;
                                                            <i class="fas fa-car" title="Parking"> <?php echo e($row->parking); ?> </i> |&nbsp;
                                                            <i class="fas fa-home" title="Area"> <?php echo e($row->area); ?> </i>
                                                        </div>
                                                    </div>

            <!--------"Check Availability" (niche "Modal" er code ache)-------->
                                                    <div class="product_extras product_cart_button more moreFront">
                                                        
        <a class="btn py-2 px-4 mr-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-1"></i> Call </a>
        <a class="btn py-2 px-4 ml-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-1"></i> Email </a>
                                                    </div>
                                                </div>

                <!-------'Wishlist' using Toastr--------->
                                        <!--  -->
                <!--------'wishlist' using ajax (niche JS ache)-------->
                                        <!-- <button class="addwishlist" data-id="<?php echo e($row->id); ?>" title="Add to wishlist">
                                            <div class="product_fav">
                                            <i class="fa fa-heart text-danger"></i>
                                            </div>
                                        </button> -->

                <!---------(Discount equation)-------->
                                                <!-- <ul class="product_marks">
                                                    <?php if($row->discount_price == NULL): ?>
                                                    <li class="product_mark product_discount" style="background: #6868cc;">New</li>
                                                    <?php else: ?>
                                                    <?php
                                                        $price= implode(explode(',',$row->price));
                                                        $discount_price= implode(explode(',',$row->discount_price));
                                                        $amount= $price - $discount_price;
                                                        $discount= $amount/$price * 100;
                                                    ?>
                                                    <li class="product_mark product_discount" title="Discount Percentage">
                                                        <?php echo e(intval($discount)); ?>%
                                                    </li>
                                                    <?php endif; ?>
                                                </ul> -->

                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

        <!-------------//--------------End Featured(Dhaka) property(2nd placed City)-------------//-----------------//------------>



<!---------------------------------Start Sale(Dhaka)---------------------------------->
<?php
    $city=DB::table('cities')->skip(1)->first();
    $city_id=$city->id;
    $dhaSale=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->where('user_properties.city_id',$city_id)->where('purpose','Sale')->whereIn('status', [1,2])->orderBy('id','desc')->get();   //Sale_property(available)
?>

                            <!-- Product Panel -->
                            <div class="product_panel panel">
                                <div class="arrivals_slider slider pb-4 mb-4">

<!-------------------------------------------------------------------->
                                <?php $__currentLoopData = $dhaSale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item m-1">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="<?php echo e(asset($row->image_one)); ?>" style="height: 180px; width: 200px;">

                                                <a href="<?php echo e(url('property/details/'.$row->id)); ?>" class="portfolio-item-overlay" title="Click for details">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px"><?php echo e($row->type); ?> for <?php echo e($row->purpose); ?></h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?></p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="product_content">
                                                
                                                <?php if($row->discount_price == NULL): ?>
                                                    <div class="product_price discount my-2"> ৳ <?php echo e($row->price); ?></div>
                                                <?php else: ?>
                                                    <div class="product_price discount my-2"> ৳ <?php echo e($row->discount_price); ?><span><del><b> ৳ <?php echo e($row->price); ?></b></del></span></div>
                                                <?php endif; ?>
                                                    
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">
                                                        <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                            <?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?>

                                                        </a>
                                                    </div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room"> <?php echo e($row->bedroom); ?> </i> |&nbsp;
                                                        <i class="fas fa-bath" title="Bath Room"> <?php echo e($row->bathroom); ?> </i> |&nbsp;
                                                        <i class="fas fa-car" title="Parking"> <?php echo e($row->parking); ?> </i> |&nbsp;
                                                        <i class="fas fa-home" title="Area"> <?php echo e($row->area); ?> </i>
                                                    </div>
                                                </div>

        <!--------"Check Availability" (niche "Modal" er code ache)-------->
                                                <div class="product_extras product_cart_button more moreFront">
                                                    
        <a class="btn py-2 px-4 mr-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-1"></i> Call </a>
        <a class="btn py-2 px-4 ml-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-1"></i> Email </a>
                                                </div>
                                            </div>

            <!-------'Wishlist' using Toastr--------->
                                            <!-- <a href="<?php echo e(URL::to('add/wishlist/tostr/'.$row->id)); ?>" title="Add to wishlist">
                                                <div class="product_fav">
                                                    <i class="fa fa-heart text-danger"></i>
                                                </div>
                                            </a> -->
            <!--------'wishlist' using ajax (niche JS ache)-------->
                                    <!--  -->

            <!---------(Discount equation)-------->
                                            <!-- <ul class="product_marks">
                                                <?php if($row->discount_price == NULL): ?>
                                                <li class="product_mark product_discount" style="background: #6868cc;">New</li>
                                                <?php else: ?>
                                                <?php
                                                    $price= implode(explode(',',$row->price));
                                                    $discount_price= implode(explode(',',$row->discount_price));
                                                    $amount= $price - $discount_price;
                                                    $discount= $amount/$price * 100;
                                                ?>
                                                <li class="product_mark product_discount" title="Discount Percentage">
                                                    <?php echo e(intval($discount)); ?>%
                                                </li>
                                                <?php endif; ?>
                                            </ul> -->

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>



<!----------------------------Start Rent(Dhaka)------------------------------------------------------------------>
<?php
    $city=DB::table('cities')->skip(1)->first();
    $city_id=$city->id;
    $dhaRent=DB::table('user_properties')->join('cities','user_properties.city_id','cities.id')->join('subcities','user_properties.subcity_id','subcities.id')->select('user_properties.*','cities.city_name','subcities.subcity_name')->where('user_properties.city_id',$city_id)->where('purpose','Rent')->whereIn('status', [1,2])->orderBy('id','desc')->get();   //rent_property(available)
?>

                            <!-- Product Panel -->
                            <div class="product_panel panel">
                                <div class="arrivals_slider slider pb-4 mb-4">

<!-------------------------------------------------------------------->
                                <?php $__currentLoopData = $dhaRent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Slider Item -->
                                    <div class="arrivals_slider_item m-1">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                            <div class="product_image portfolio-item d-flex flex-column align-items-center justify-content-center">
                                                <img src="<?php echo e(asset($row->image_one)); ?>" style="height: 180px; width: 200px;">

                                                <a href="<?php echo e(url('property/details/'.$row->id)); ?>" class="portfolio-item-overlay" title="Click for details">
                                                    <div class="portfolio-item-details text-center">
                                                        <!--item logo-->
                                                        <h3 style="font-size:10px"><?php echo e($row->type); ?> for <?php echo e($row->purpose); ?></h3>
                                                        <!--item strips-->
                                                        <span></span>
                                                        <!--item description-->
                                                        <p style="font-size:12px"><?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?></p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="product_content">
                                                
                                                <?php if($row->discount_price == NULL): ?>
                                                    <div class="product_price discount my-2"> ৳ <?php echo e($row->price); ?></div>
                                                <?php else: ?>
                                                    <div class="product_price discount my-2"> ৳ <?php echo e($row->discount_price); ?><span><del><b> ৳ <?php echo e($row->price); ?></b></del></span></div>
                                                <?php endif; ?>
                                                    
                                                <div class="row mb-0 pb-0">
                                                    <div class="col-md-12 text-primary">
                                                        <a href="<?php echo e(url('property/details/'.$row->id)); ?>" title="Click for details">
                                                            <?php echo e($row->subcity_name); ?>, <?php echo e($row->city_name); ?>

                                                        </a>
                                                    </div>
                                                    <div class="col-md-12 py-1 text-muted">
                                                        <i class="fas fa-bed" title="Bed Room"> <?php echo e($row->bedroom); ?> </i> |&nbsp;
                                                        <i class="fas fa-bath" title="Bath Room"> <?php echo e($row->bathroom); ?> </i> |&nbsp;
                                                        <i class="fas fa-car" title="Parking"> <?php echo e($row->parking); ?> </i> |&nbsp;
                                                        <i class="fas fa-home" title="Area"> <?php echo e($row->area); ?> </i>
                                                    </div>
                                                </div>

        <!--------"Check Availability" (niche "Modal" er code ache)-------->
                                                <div class="product_extras product_cart_button more moreFront">
                                                    
        <a class="btn py-2 px-4 mr-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#call<?php echo e($row->id); ?>"><i class="fas fa-phone pr-1"></i> Call </a>
        <a class="btn py-2 px-4 ml-2 text-white button-pipaluk button--inverted" style="font-size: 16px" roll="button" data-toggle="modal" data-target="#email<?php echo e($row->id); ?>"><i class="far fa-envelope pr-1"></i> Email </a>
                                                </div>
                                            </div>

            <!-------'Wishlist' using Toastr--------->
                                        <!-- <a href="<?php echo e(URL::to('add/wishlist/tostr/'.$row->id)); ?>" title="Add to wishlist"">
                                            <div class="product_fav">
                                                <i class="fa fa-heart text-danger"></i>
                                            </div>
                                        </a> -->
            <!--------'wishlist' using ajax (niche JS ache)-------->
                                    <!--  -->

            <!---------(Discount equation)-------->
                                            <!-- <ul class="product_marks">
                                                <?php if($row->discount_price == NULL): ?>
                                                <li class="product_mark product_discount" style="background: #6868cc;">New</li>
                                                <?php else: ?>
                                                <?php
                                                    $price= implode(explode(',',$row->price));
                                                    $discount_price= implode(explode(',',$row->discount_price));
                                                    $amount= $price - $discount_price;
                                                    $discount= $amount/$price * 100;
                                                ?>
                                                <li class="product_mark product_discount" title="Discount Percentage">
                                                    <?php echo e(intval($discount)); ?>%
                                                </li>
                                                <?php endif; ?>
                                            </ul> -->

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-----------------------------------------End of Showing 'Dhaka'(2st placed City)-------------------------------------->








<?php
    $setting=DB::table('sitesetting')->first();
?>

        <!------------------------------------Stats // We Deliver Services------------------------------------>
 <!-- <section id="stats">
    <div class="container-box-md py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="vertical-heading">
                        <h2>We Deliver <br /> <strong>Excellent</strong> Services</h2>
                    </div>
                </div>
            </div>
            <div class="row wow">
                <div class="col-md-3 col-sm-6 col-6"> -->
                    <!--stats-item 01-->
                    <!-- <div class="stats-item text-center">
                        <i class="far fa-chart-bar"></i>
                        <h3 class="counter"><?php echo e($setting->experience); ?></h3>
                        <p>Years Experiance</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6"> -->
                    <!--stats-item 02-->
                    <!-- <div class="stats-item text-center">
                        <i class="fab fa-codepen"></i>
                        <h3 class="counter"><?php echo e($setting->project); ?></h3>
                        <p>Project Done</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6"> -->
                    <!--stats-item 03-->
                    <!-- <div class="stats-item text-center">
                        <i class="fas fa-trophy"></i>
                        <h3 class="counter"><?php echo e($setting->award); ?></h3>
                        <p>Awards Received</p>
                    </div>
                </div> 
                <div class="col-md-3 col-sm-6 col-6"> -->
                    <!--stats-item 04-->
                    <!-- <div class="stats-item text-center">
                        <i class="fa fa-users"></i>
                        <h3 class="counter"><?php echo e($setting->clients); ?></h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!--------End stats // we deliver services---------------->






<!----------------------------------------Start Reviews----------------------------------------------->
<?php
    $review = DB::table('contacts')->where('review',1)->select('name','message','date')->get();
?>

<div class="reviews" style="background-color: #EFF6FA">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="reviews_title_container">
                    <h3 class="reviews_title">Latest Reviews</h3>
                    <div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
                </div>

                <div class="reviews_slider_container">
                    <!-- Reviews Slider -->
                    <div class="owl-carousel owl-theme reviews_slider">
                        
                        <!-- Reviews Slider Item -->
                        <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div class="review_content">
                                        <div class="review_text"><?php echo e($row->message); ?></div>
                                        <div class="review_rating_container mt-2">
                                            <div class="review_time"><?php echo e($row->date); ?></div>
                                        </div>
                                        <div class="review_name">-<?php echo e($row->name); ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="reviews_dots"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------//--------------//-------------Ends Review---------------//------------//---------->








<!-------------------------------Clients----------------------------->
<!-- <section id="clients">
    <div class="container-box-sm py-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="horizontal-heading text-center">
                        <h4 style="color: #F4C613">Satisfied Clients <br></h4>
                        <h1>Our Happy Clients</h1>
                        <div class="line mt-3"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"> 
                    <div id="clients-details" class="owl-carousel owl-theme"> -->
                        <!--clients 01-->
                        <!-- <div class="clients">
                            <img src="<?php echo e(asset('public/frontend/images/client/client-1.png')); ?>" alt="clients" class="img-fluid">
                        </div> -->
                        <!--clients 02-->
                        <!-- <div class="clients">
                            <img src="<?php echo e(asset('public/frontend/images/client/client-2.png')); ?>" alt="clients" class="img-fluid">
                        </div> -->
                        <!--clients 03-->
                        <!-- <div class="clients">
                            <img src="<?php echo e(asset('public/frontend/images/client/client-3.png')); ?>" alt="clients" class="img-fluid">
                        </div> -->
                        <!--clients 04-->
                        <!-- <div class="clients">
                            <img src="<?php echo e(asset('public/frontend/images/client/client-4.png')); ?>" alt="clients" class="img-fluid">
                        </div> -->
                        <!--clients 05-->
                        <!-- <div class="clients">
                            <img src="<?php echo e(asset('public/frontend/images/client/client-5.png')); ?>" alt="clients" class="img-fluid">
                        </div> -->
                        <!--clients 06-->
                        <!-- <div class="clients">
                            <img src="<?php echo e(asset('public/frontend/images/client/client-6.png')); ?>" alt="clients" class="img-fluid">
                        </div> -->
                        <!--clients 07-->
                        <!-- <div class="clients">
                            <img src="<?php echo e(asset('public/frontend/images/client/client-7.png')); ?>" alt="clients" class="img-fluid">
                        </div> -->
                        <!--clients 08-->
                        <!-- <div class="clients">
                            <img src="<?php echo e(asset('public/frontend/images/client/client-8.png')); ?>" alt="clients" class="img-fluid">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------//-----------//----------Clients_Ends---------//-----------//-------------//----------//------------>








<!-------------------------------------- Newsletter ------------------------------------------->
<!-- <div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                    <div class="newsletter_title_container">
                        <div class="newsletter_icon"><img src="<?php echo e(asset('public/frontend/images/send.png')); ?>" alt=""></div>
                        <div class="newsletter_title">Sign up for Newsletter</div>
                        <div class="newsletter_text"><p>...and get the latest update.</p></div>
                    </div>
                    <div class="newsletter_content clearfix">
                        <form action="<?php echo e(route('store.newsletters')); ?>" class="newsletter_form" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address" name="email">
                            <button class="newsletter_button" type="submit">Subscribe</button>
                        </form>
                        <div class="newsletter_unsubscribe_link"><a href="">unsubscribe</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-----------//-------------//-----------//-----End Newsletter-----------//------------//-------------//------------>






<!----------------------------------------- FAQ ---------------------------------------------------->
<div id="accordion" role="tablist" class="bg-dark py-5 text-light text-center ">
    <div class="container py-4">
        <div class="row text-center">
            <div class="col">
                <h2 class="mb-0">Frequently Asked Questions</h2>
            </div>
        </div>
        <div class="row mt-5">
        <div class="col-md-12">

            <div class="card bg-light text-dark my-2">
                <div class="card-header text-primary" role="tab">
                    <h4 class="mb-0">
                    <div data-toggle="collapse" href="#questionOne"><i class="fa fa-arrow-circle-down pr-2"></i>How do I post a property for sale/rent?</div>
                    </h4>
                </div>
                <div class="collapse" id="questionOne" data-parent="#accordion">
                    <div class="card-body text-left">
                    <p class="mb-0">
                        <ol class="offset-md-3 text-muted" style="font-size: 15px; word-spacing: 4px">
                            <li> At first “Log-in” to your account, then go to your “profile” page.</li>
                            <li> Click “Add My Property” option from the menu to begin creating your listing.</li>
                            <li> Then a “form” will appear in your screens to fill up and submit.</li>
                            <li> Enter basic information about your properties including lease terms and utilities.</li>
                            <li> Upload a few photos too of your properties for rent or sell.</li>
                            <li> The more information you provide, the more likely a renter will find your listing.</li>
                            <li> Preview your listing to make sure everything looks right.</li>
                            <li> “Submit” your listing.</li>
                        </ol>
                    </p>
                    </div>
                </div>
            </div>

            

            <div class="card bg-light text-dark my-2">
                <div class="card-header text-primary" role="tab">
                    <h4 class="mb-0">
                    <div data-toggle="collapse" href="#questionThree"><i class="fa fa-arrow-circle-down pr-2"></i>How can I submit feedback on my experience?</div>
                    </h4>
                </div>
                <div class="collapse" id="questionThree" data-parent="#accordion">
                    <div class="card-body">
                    <p class="mb-0" style="font-size: 15px">We’re always open to feedback that will help us give you the best experience possible. If you’re posting a Room for Rent, send your thoughts and suggestions to <a href="mailto:<?php echo e($setting->email_one); ?>"> <?php echo e($setting->email_one); ?> </a>. For feedback on other types of rentals you can email <a href="mailto:<?php echo e($setting->email_two); ?>"> <?php echo e($setting->email_two); ?> </a>.</p>
                    </div>
                </div>
            </div>

            <div class="card bg-light text-dark my-2">
                <div class="card-header text-primary" role="tab">
                    <h4 class="mb-0">
                    <div data-toggle="collapse" href="#questionFour"><i class="fa fa-arrow-circle-down pr-2"></i>How will I know when a renter is interested in my listing?</div>
                    </h4>
                </div>
                <div class="collapse" id="questionFour" data-parent="#accordion">
                    <div class="card-body">
                    <p class="mb-0" style="font-size: 15px; word-spacing: 2px">How renters contact you is up to you.Normally renters can complete short inquiry form which will be delivered to you as an email. These leads will also be shown in your dashboard for your listings. We don’t display your email address, so you don’t have to worry about spam.</p>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </div>
</div>
<!------------//-------------//----------//-------End_FAQ-----------//----------//-----------//------------->






<!--------//-----------//------------//----------//-------------//-----------//------------//-----------//----------->
                                <!----------------- END ---------------->
<!--------//-----------//------------//----------//-------------//-----------//------------//-----------//----------->






<!--------------------------(JS Code)--------------------------------------->


<script>
$(function () {
    $("#clients-details").owlCarousel({
        items: 6,
        autoplay: true,
        smartSpeed: 500,
        loop: true,
        dots: true,
        nav: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 2
            },
            // breakpoint from 480 up
            480: {
                items: 3
            },
            // breakpoint from 768 up
            768: {
                items: 6
            }
        }

    });
});
</script>

 <!----------------------------------------------------------->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\houserental-mohin\resources\views/pages/index.blade.php ENDPATH**/ ?>