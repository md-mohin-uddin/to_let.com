
<!-----Ekkhane Frontend er Navbar + nav er sathe joint 'Main-Slide' ta royeche ---->
<nav class="main_nav py-0 my-0">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="main_nav_content d-flex flex-row">

                    <!-- Categories Menu -->

                    <div class="cat_menu_container">
                        <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                            <div class="cat_burger"><span></span><span></span><span></span></div>
                            <div class="cat_menu_text" style=""><?php if(session()->get('lang') == 'bangla'): ?> জায়গা পছন্দ করুন <?php else: ?> Choose Places <?php endif; ?></div>
                            
                        </div>


    <?php
    $city=DB::table('cities')->get();
    ?>
                    <ul class="cat_menu pb-2 pt-2">
                        <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="hassubs more moreNav">
                                <a href="<?php echo e(url('city/properties/'.$cat->id)); ?>" class="button-pipaluk button--inverted pl-5"><?php echo e($cat->city_name); ?><i class="fas fa-arrow-circle-right pr-3"></i></a> 
                                <!-- button-pipaluk button--inverted px-5 my-1 -->
                                <ul class="py-1">
                                    <?php
                                        $subcity=DB::table('subcities')->where('city_id',$cat->id)->get();
                                    ?>
                                    <?php $__currentLoopData = $subcity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="more moreNav">
                                        <a href="<?php echo e(url('properties/'.$row->id)); ?>" class="button-pipaluk button--inverted" style="padding-left:70px;"><?php echo e($row->subcity_name); ?><i class="fas fa-arrow-circle-right z-index-100"></i></a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>



                    <!-- Main Nav Menu -->

                    <div class="main_nav_menu ml-auto">
                        <ul class="standard_dropdown main_nav_dropdown pb-3">

                            <li><a href="<?php echo e(url('/')); ?>"><?php if(session()->get('lang') == 'bangla'): ?> হোম <?php else: ?> Home <?php endif; ?></a></li>

                            

                            <!-- <li><a href="<?php echo e(route('blog.post')); ?>"><?php if(session()->get('lang') == 'bangla'): ?> ব্লগ <?php else: ?> Blog <?php endif; ?> </a></li> -->
                            <li><a href="#contact_nav"><?php if(session()->get('lang') == 'bangla'): ?> যোগাযোগ <?php else: ?> Contact <?php endif; ?> </a></li>
                            <li><a href="#"><?php if(session()->get('lang') == 'bangla'): ?> আমাদের সম্পর্কে <?php else: ?> About Us <?php endif; ?> </a></li>
                        </ul>
                    </div>

                    <!-- Menu Trigger -->

                    <div class="menu_trigger_container ml-auto">
                        <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                            <div class="menu_burger">
                                <div class="menu_trigger_text">menu</div>
                                <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>


<!--------------- Menu mobile screen------------>

<div class="page_menu">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page_menu_content">

                    <div class="page_menu_search">
                        <form action="#">
                            <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                        </form>
                    </div>
                    <ul class="page_menu_nav">
                        <li class="page_menu_item has-children">
                            <a href="#">Language<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item">
                            <a href="#">Home<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children">
                            <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection">
                                <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                    </ul>

                    <div class="menu_contact">
                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="https://colorlib.com/cdn-cgi/l/email-protection#fd9b9c8e898e9c91988ebd9a909c9491d39e9290"><span class="__cf_email__" data-cfemail="5f393e2c2b2c3e333a2c1f38323e3633713c3032">[email&#160;protected]</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</header>


 <!---------------------------Main Slider-Carousal-(Nav) --------------------------->

<section id="showcase">
    <div id="slider" class="carousel slide" data-ride="carousel"> <!--.carousel-fade-->
      <ol class="carousel-indicators">
         <li class="active" data-target="#slider" data-slide-to="0"></li>
         <li data-target="#slider" data-slide-to="1"></li>
         <li data-target="#slider" data-slide-to="2"></li>
      </ol>
        <div class="carousel-inner">
          <div class="carousel-item carousel-img-1 active">
            <div class="container">
                <div class="col-lg-8 offset-lg-2 pt-5" data-aos="flip-right">
                    <div class="shadow-lg rounded" style="background:#AC5488; opacity: .8; margin-top:120px;">
                        <h1 class="text-light p-3" style=""><?php if(session()->get('lang') == 'bangla'): ?>বাংলাদেশে বিক্রয় এবং ভাড়ার জন্য প্রপার্টি খুঁজে দেখুন <?php else: ?> Search properties for sale and rent in Bangladesh <?php endif; ?> </h1>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item carousel-img-2">
             <div class="container">
                <div class="col-lg-8 offset-lg-2 pt-5" data-aos="flip-right">
                    <div class="shadow-lg rounded" style="background:#AC5488; opacity: .8; margin-top:120px;">
                    <h1 class="text-light p-3" style=""><?php if(session()->get('lang') == 'bangla'): ?>বাংলাদেশে বিক্রয় এবং ভাড়ার জন্য প্রপার্টি খুঁজে দেখুন <?php else: ?> Search properties for sale and rent in Bangladesh <?php endif; ?></h1>
                </div>
                </div>
               </div>
               </div>
               <div class="carousel-item carousel-img-3">
                  <div class="container">
                    <div class="col-lg-8 offset-lg-2 pt-5" data-aos="flip-right">
                        <div class="shadow-lg rounded" style="background:#AC5488; opacity: .8; margin-top:120px;">
                            <h1 class="text-light p-3" style=""><?php if(session()->get('lang') == 'bangla'): ?>বাংলাদেশে বিক্রয় এবং ভাড়ার জন্য প্রপার্টি খুঁজে দেখুন <?php else: ?> Search properties for sale and rent in Bangladesh <?php endif; ?></h1>
                        </div>
                    </div>
                    </div>
               </div>
          </div>
          <a href="#slider" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a href="#slider" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
          </a>
      </div>
  </section>
<?php /**PATH C:\xampp\htdocs\ToLet\resources\views/layouts/menubar.blade.php ENDPATH**/ ?>