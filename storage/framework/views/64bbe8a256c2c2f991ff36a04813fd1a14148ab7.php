
<!----Ekhane FrontEnd tar ekdom "Top Header" then "yield(content)" && Footer tar Code ache --->

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>ToLet - Online House Rental System</title>
<meta charset="utf-8">

<!----------this for ajax ----------->
<meta name="csrf" value="<?php echo e(csrf_token()); ?>">       <!----------this for ajax ----------->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<?php echo e(asset('public/frontend/logo/logo3.jpg')); ?>" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/styles/bootstrap4/bootstrap.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/plugins/OwlCarousel2-2.2.1/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/plugins/slick-1.8.0/slick.css')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('public/frontend/plugins/aos.css')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('public/backend/css/toastr.min.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/styles/main_styles.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/styles/responsive.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/styles/newstyle.css')); ?>">

</head>

<body>

    <div class="super_container">

    <!-- Header -->
    <header class="header smooth-scroll" id="home">


<?php
    $setting=DB::table('sitesetting')->first();
?>


<div class="top_bar">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-row">
                <!--class=top_bar_contact_item(rm)-->
                <div class="more moreApp mt-2 "><div class="top_bar_icon"><a href="<?php echo e(url('/')); ?>" class="button-pipaluk button--inverted px-2"> <img src="<?php echo e(asset('public/frontend/logo/logo3.jpg')); ?>" class="img-fluid rounded-circle" width="65px" height="65px"> <span class="text-primary h5" ><?php echo e($setting->company_name); ?><small style="font-size:12px">.com</small></span></a></div></div>

                <div class="top_bar_contact_item mx-5" title="Call Us"><i class="fa fa-phone pr-1"></i><a href="tel:<?php echo e($setting->phone_one); ?>" style="color:black"> <?php echo e($setting->phone_one); ?> </a></div>

                <div class="top_bar_contact_item" title="Send Us Email"><i class="far fa-envelope pr-1"></i><a href="mailto:<?php echo e($setting->email_two); ?>" style="color:black"> <?php echo e($setting->email_two); ?> </a></div>



                <div class="top_bar_content ml-auto">
                    <div class="top_bar_menu more moreApp"
                    title="Change Language" style="font-size:16px; font-family: Arial, Helvetica, sans-serif;">
    <!------Languaga(bangla/english)------->
                    <!-- <?php
                        $language=session()->get('lang');
                    ?>
                        <?php if(session()->get('lang') == 'bangla'): ?>
                        <a href="<?php echo e(route('language.english')); ?>" class="button-pipaluk button--inverted px-3 py-2 mt-2">English</a>
                        <?php else: ?>
                        <a href="<?php echo e(route('language.bangla')); ?>" class="button-pipaluk button--inverted px-3 py-2 mt-2">Bangla</a>  -->
                        <!--বাংলা-->
                        <!-- <?php endif; ?> -->
                    </div>

<!----User login/Register----->
                    <div class="top_bar_user">
                        <?php if(auth()->guard()->guest()): ?>
                            <div class="more moreApp"><a href="<?php echo e(route('login')); ?>" class="button-pipaluk button--inverted px-4 py-2" style="font-size:16px; color:black;">
                                <div class="user_icon"><img src="<?php echo e(asset('public/frontend/images/user.svg')); ?>"></div>
                                <?php if(session()->get('lang') == 'bangla'): ?>
                                    রেজিস্টার/লগইন
                                <?php else: ?>
                                    Register/Login
                                <?php endif; ?>
                                </a>
                            </div>
                        <?php else: ?>
                            <ul class="standard_dropdown top_bar_dropdown ">
                                <li class="more moreApp"> <a href="#" class="button-pipaluk button--inverted px-4" style="font-size:16px; color:#333333; font-family: Arial, Helvetica, sans-serif;"><div class="user_icon"><img src="<?php echo e(asset('public/frontend/images/user.svg')); ?>"></div>
                                    <?php if(session()->get('lang') == 'bangla'): ?>
                                        প্রোপাইল
                                    <?php else: ?>
                                        Profile
                                    <?php endif; ?>
                                </a>
                                    <ul style="padding-top:2px; padding-bottom:1px;">
                                        <li class="more moreS"><a href="<?php echo e(route('home')); ?>" class="button-pipaluk button--inverted pl-5">Profile</a></li>
                                        <li class="more moreS"><a href="<?php echo e(route('add.property.user')); ?>" class="button-pipaluk button--inverted px-4">Add Property</a></li>
                                        <li class="more moreS"><a href="<?php echo e(route('user.logout')); ?>" class="button-pipaluk button--inverted px-5">Logout</a></li>
                                    </ul>
                                </li>

                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Main -->

<div class="header_main" style="height: 128px;">
    <div class="container">
        <div class="row">

            <!-- Logo -->
            <div class="col-lg-2 col-sm-3 col-3 order-1" data-aos="fade-up-right">
                <div class="logo_container">
                <div class="logo">
                    <a href="<?php echo e(url('/')); ?>" class="text-primary">
                        <?php if(session()->get('lang') == 'bangla'): ?>
                            বাড়ি ভাড়া
					    <?php else: ?>
                            <?php echo e($setting->company_name); ?>

					    <?php endif; ?>
                    </a>
                </div>
                </div>
            </div>



<?php
    $city=DB::table('cities')->get();
?>

<!-------------- Search ----------------->
    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
        <div class="header_search">
            <div class="header_search_content" style="left: 81px;">
                <div class="header_search_form_container">
                    <form action="<?php echo e(route('property.search')); ?>" class="header_search_form clearfix" method="GET">
                        <?php echo csrf_field(); ?>
                        <input type="search" required="required" class="header_search_input" placeholder="Search by city, state or property-code" name="search">
                        <div class="custom_dropdown">
                            <div class="custom_dropdown_list">
                                <span class="custom_dropdown_placeholder clc">All Cities</span>
                                <i class="fas fa-chevron-down"></i>
                                <ul class="custom_list clc">
                                    <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a class="clc" href="<?php echo e(url('city/properties/'.$row->id)); ?>"><?php echo e($row->city_name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <!-- <button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?php echo e(asset('public/frontend/images/search.png')); ?>" alt=""></button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!------------ Wishlist ------------------->
        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
            <!-- <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                <?php if(auth()->guard()->guest()): ?>
                <?php else: ?>
                    <?php
                    $wishlistCount=DB::table('wishlists')
                            ->join('user_properties','wishlists.property_id','user_properties.id')
                            ->join('cities','user_properties.city_id','cities.id')
                            ->join('subcities','user_properties.subcity_id','subcities.id')
                            ->join('users','wishlists.user_id','users.id')
                            ->select('user_properties.*','wishlists.*','cities.city_name','subcities.subcity_name','users.*')
                            ->where('wishlists.user_id',Auth::id())
                            ->whereIn('status', [1,2])
                            ->get();
                    ?>
                <div class="wishlist d-flex flex-row align-items-center justify-content-end" data-aos="fade-up-left">
                    <a href="<?php echo e(route('user.wishlist')); ?>" style="width: 28px;">
                    <div class="wishlist_icon"><img src="<?php echo e(asset('public/frontend/images/heart.png')); ?>"></div>
                    <div class="wishlist_content">
                    <div class="wishlist_text"><a href="<?php echo e(route('user.wishlist')); ?>">Wishlist</div>
                        <div class="wishlist_count text-primary"><?php echo e(count($wishlistCount)); ?></div>
                    </a>
                    </div>
                </div>
                <?php endif; ?> -->


                <!-- Cart -->
                
            </div>
        </div>
    </div>
</div>

</div> <!-- End super_container -->
</header>


            <!-- Main Navigation -->



    <?php echo $__env->yieldContent('content'); ?>






    <!--------------------- Contact/Get in Touch ----------------------->
    <section id="contact">
        <div class="container-box-md" id="contact_nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <!--contact left-->
                        <div id="contact-left">
                            <div class="vertical-heading">
                                <h5>Who We Are</h5>
                                <h2 style="color: blue"><b>GET <br> In<strong> Touch</strong></b></h2>
                                <p style="font-size: 15px">Got Question? Call Us 24/7</p>
                            </div>

                            <div id="branch">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="branch">
                                            <h4 style="color: blue">Chittagong</h4>
                                            <ul class="brance-details">
                                                <li><i class="fa fa-phone"></i><a href="tel:<?php echo e($setting->phone_one); ?>" style="color:black"> <?php echo e($setting->phone_one); ?> </a></li>
                                                <li><i class="far fa-envelope"></i><a href="mailto:<?php echo e($setting->email_one); ?>" style="color:black"> <?php echo e($setting->email_one); ?> </a></li>
                                                <li><i class="fas fa-map-marker-alt"></i><?php echo e($setting->address_one); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="branch">
                                            <h4 style="color: blue">Dhaka</h4>
                                            <ul class="brance-details">
                                                <li><i class="fa fa-phone"></i><a href="tel:<?php echo e($setting->phone_two); ?>" style="color:black"> <?php echo e($setting->phone_two); ?> </a></li>
                                                <li><i class="far fa-envelope"></i><a href="mailto:<?php echo e($setting->email_two); ?>" style="color:black"> <?php echo e($setting->email_two); ?> </a></li>
                                                <li><i class="fas fa-map-marker-alt"></i><?php echo e($setting->address_two); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <ul class="social-links">
                                    <li title="Follow us on Facebook"><a href="<?php echo e($setting->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li title="Follow us on Linkedin"><a href="<?php echo e($setting->linkedin); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li title="Follow us on Twitter"><a href="<?php echo e($setting->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
                                    <li title="Follow us on Youtube"><a href="<?php echo e($setting->youtube); ?>"><i class="fab fa-youtube"></i></a></li>
                                    <li title="Follow us on Instagram"><a href="<?php echo e($setting->instagram); ?>"><i class="fab fa-instagram"></i></a></li>
                                    <li title="Follow us on Pinterest"><a href="<?php echo e($setting->pinterest); ?>"><i class="fab fa-pinterest"></i></a></li>
                                    <li title="Follow us on Whatsapp"><a href="<?php echo e($setting->whatsapp); ?>"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

<div class="col-md-6">

    <!--contact right-->
    <div id="contact-right">
        <form action="<?php echo e(route('store.contact')); ?>" method="post">
                <?php echo csrf_field(); ?>
            <h4 style="color: blue">Send Feedback</h4>
            <p>Feel free to contact with us at any moment...</p>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone No" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <textarea class="form-control" rows="3" cols="4" name="message" placeholder="Your Message Will Go Here" required></textarea>
            </div>

            <div id="submit-btn" class="more">
                <button class="btn bg-transparent btn-block text-light button-pipaluk button--inverted" style="font-size: 17px; padding:8px;" role="button">Submit</button>
            </div>

        </form>
    </div>

</div>
                </div>
            </div>
        </div>
    </section>
<!---------------------------------Ends_Contact-------------------------------->



    <!--footer2-->
    <div class=" footer2 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Copyright &copy; 2023 All Rights Reserved By : <span><a href="https://facebook.com/umdmohin" target="_blank"> Md Mohin Uddin </a> & <a href="https://www.facebook.com/M.A.S.Rakib" target="_blank"> Akram Shah Rakib </a></span>
                    </p>
                    <a href="<?php echo e(url('terms/privacy')); ?>" class="text-light small" style="opacity: .7">Terms & Privacy Policy</a>
                </div>
            </div>
        </div>

        <!---------back to top---------->
        <a href="#home" id="back-to-top" class="btn btn-primary" title="Back to Top" role="button">
            <i class="fa fa-angle-up"></i>
        </a>

    </div>
    <!--footer Ends-->




<!---------//-----------//------------//------------//--------------//------------//--------------//----------//-------->




<!----------- for applying ajax in wishlist -------------->

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <!---   OR----////------>
    <script src="<?php echo e(asset('public/frontend/js/jquery.min.js')); ?>"></script>



<!--=====================================================
        *------Featured_Modal_(Call & Email)-------*
======================================================--->
<?php
    $featured=DB::table('user_properties')->select('user_properties.property_code','user_properties.id')->whereIn('status', [1,2])->orderBy('id','desc')->get();   //sob_property(available)
?>

<!------------------Start_Modal_(Call)---------------------->
<?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="call<?php echo e($row->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle">Contact Agent</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pb-4">
          <div class="text-center" style="font-size: 18px">to-let.com Listings</div>
          <a style="font-size: 18px; margin-left:110px" roll="button" href="tel:<?php echo e($setting->phone_one); ?>"><i class="fas fa-phone-volume p-4"></i> <?php echo e($setting->phone_one); ?> </a>
          <p class="text-center mt-3 mb-0 pb-0">Please quote property reference when calling us.</p>
          <span style="font-size: 15px;margin-left:185px;margin-top:0px;" class="text-primary"><?php echo e($row->property_code); ?></span>
        </div>
        
      </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!------------------End_Modal_(Call)---------------------->


<!------------------Start_Modal_(Email)---------------------->
<?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="email<?php echo e($row->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle">Contact Agent</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(route('store.modal.email')); ?>" method="post">
            <?php echo csrf_field(); ?>
                <div class="container">
                    <?php
                        $userid=Auth::id();
                        $userr=DB::table('users')->where('id',$userid)->first();
                    ?>

                <?php if(Auth::check()): ?>
                    <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" class="form-control is-invalid" name="name" id="name" placeholder="Enter Your Name" value="<?php echo e($userr->name); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email :</label>
                        <input type="email" class="form-control is-invalid" name="email" id="Email" placeholder="Enter Your Email" value="<?php echo e($userr->email); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone :</label>
                        <input type="text" class="form-control is-invalid" name="phone" id="phone" placeholder="Enter Your Phone" value="<?php echo e($userr->phone); ?>" required>
                    </div>
                <?php else: ?>
                    <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" class="form-control is-invalid" name="name" id="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email :</label>
                        <input type="email" class="form-control is-invalid" name="email" id="Email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone :</label>
                        <input type="text" class="form-control is-invalid" name="phone" id="phone" placeholder="Enter Your Phone" required>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea class="form-control" name="message" id="message" rows="3">I would like to inquire about your property <?php echo e($row->property_code); ?>. Please contact me at your earliest convenience.</textarea>
                </div>

                <input type="hidden" name="property_code"  value="<?php echo e($row->property_code); ?>">

                
                <div class="more more2">
                    <button type="submit" class="btn btn-block text-white bg-transparent button-pipaluk button--inverted" style="font-size: 17px; padding:8px;">Send Email</button>
                </div>
            </form>
        </div>
        <div class="modal-footer mt-0 pt-1">
          <span class="text-muted text-justify" style="font-size: 10px;">You agree to ToLet's Terms of Use & Privacy Policy By choosing to contact a property, Property managers may call,text or email you about any inquiries you submit through our services, which may involve use of automated means and prerecorded/artificial voices. You don't need to consent as a condition of renting any property, or buying any other goods or services. Message/data rates may apply.</span>
        </div>
        </div>
      </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!------------------End_Modal_(Email)_Featured---------------------->






<!-------------------------------------JS files--------------------------------------------------->
<script src="<?php echo e(asset('public/frontend/js/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/styles/bootstrap4/popper.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/styles/bootstrap4/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/plugins/greensock/TweenMax.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/plugins/greensock/TimelineMax.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/plugins/scrollmagic/ScrollMagic.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/plugins/greensock/animation.gsap.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/plugins/greensock/ScrollToPlugin.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/plugins/slick-1.8.0/slick.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/plugins/easing/easing.js')); ?>"></script>
<!----------newly added-------->
<script src="<?php echo e(asset('public/frontend/js/jquery.nicescroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/js/aos.js')); ?>"></script>

<!-----------//for ajax //-------->

<script src="<?php echo e(asset('public/frontend/js/sweetalert2@8.js')); ?>"></script>

<script src="<?php echo e(asset('public/frontend/js/sweetalert.min.js')); ?>"></script>

<script src="<?php echo e(asset('public/backend/js/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/js/custom.js')); ?>"></script>





<!-------------------------JS for Wishlist_(ajax)-------------------------->
<script type="text/javascript">
    $(document).ready(function() {
          $('.addwishlist').on('click', function(){     //--from add_to_'wishlist' button/name //-->(.addwishlist)
            var id = $(this).data('id');
            if(id) {
               $.ajax({
                   url: "<?php echo e(url('/add/wishlist/')); ?>/"+id,
                   type:"GET",
                   dataType:"json",
                   success:function(data) {
                     const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                      })

                     if($.isEmptyObject(data.error)){
                          Toast.fire({
                            type: 'success',
                            title: data.success
                          })
                     }else{
                           Toast.fire({
                              type: 'error',
                              title: data.error
                          })
                     }
                   },
               });
           } else {
               alert('danger');
           }
            e.preventDefault();
       });
   });
</script>



<!--------------------- Toastr --------------------->
<script>
    <?php if(Session::has('message')): ?>
    var type="<?php echo e(Session::get('alert-type','info')); ?>"
    switch (type) {
        case 'info':
            toastr.info("<?php echo e(Session::get('message')); ?>")
            break;
        case 'success':
            toastr.success("<?php echo e(Session::get('message')); ?>")
            break;
        case 'warning':
            toastr.warning("<?php echo e(Session::get('message')); ?>")
            break;
        case 'error':
            toastr.error("<?php echo e(Session::get('message')); ?>")
            break;
    }
    <?php endif; ?>
</script>


<!--==================================
        ----Nice Scroll bar----
====================================--->
    <script>
        $(function() {
        $("body").niceScroll({
        cursorborder: "1px solid yellow",
        });
    });
    </script>
    <!-- eta "Nice Scroll bar" er jquery code -->


<!--==================================
        ----AOS----
====================================--->
    <script>
        AOS.init({
            duration: 1300
        });
    </script>
    <!-- eta "AOS" er jquery code -->


<!--==================================
        -----back-to-top------
======================================--->
<script>
//show and hide white nav
$(function () {

$(window).scroll(function () {

    if ($(window).scrollTop() > 80) {
        //show back top button
        $("#back-to-top").fadeIn();
    }else {
        //hide back top button
        $("#back-to-top").fadeOut();
    }
});
});
</script>




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>



</body>
</html>
<?php /**PATH C:\xampp\htdocs\ToLet\resources\views/layouts/app.blade.php ENDPATH**/ ?>