<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/styles/blog_styles.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend/styles/blog_responsive.css')); ?>">



<section id="homeBlog" class="text-left text-light" style="background-image:url(<?php echo e(asset('public/frontend/images/Cover/blog5.jpg')); ?>)">
    <div class="primary-overlay1">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 offset-lg-1 pt-5 mt-5" data-aos="zoom-in">
            <div class="shadow-lg rounded" style=" background:#AC5488; opacity: .8; color:white">
                <h1 class="home_title text-center p-5 mt-5 shadow-lg">
                    <?php if(session()->get('lang') == 'bangla'): ?>
                        আমাদের ব্লগে আপনাকে স্বাগতম
                    <?php else: ?>
                        Welcome to Our Blog
                    <?php endif; ?>
                </h1>
            </div>
        </div>

        </div>
      </div>
    </div>
</section>



<!-- Blog -->

<div class="blog" style="background-color: #F5F5FA;">
	<div class="container" data-aos="fade-right">
		<div class="row">
			<div class="col">
				<div class="blog_posts d-flex flex-row align-items-start justify-content-between">

					<?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<!-- Blog post -->
					<div class="blog_post bg-white"><a class="text-dark" href="<?php echo e(url('blog/description/'.$row->id)); ?>">
						<div class="blog_image" style="background-image:url(<?php echo e(asset($row->post_image)); ?>)"></div>
						<div class="blog_text">
                                <?php if(session()->get('lang') == 'bangla'): ?>
                                    <?php echo e($row->post_title_bn); ?>

                                <?php else: ?>
                                    <?php echo e($row->post_title_en); ?>

                                <?php endif; ?>
                            </a>
						</div>
						<div class="blog_button"><a href="<?php echo e(url('blog/description/'.$row->id)); ?>">
							 <?php if(session()->get('lang') == 'bangla'): ?>
						    	বিস্তারিত পড়ুন...
							<?php else: ?>
						        Continue Reading...
						    <?php endif; ?>
					    </a></div>
					</div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</div>
			</div>
		</div>
    </div>
    <!--------------------Pagination--------------------->
            <div class="p-5" style="margin-left:600px; font-size: 20px;">
                <?php echo e($post->links()); ?>

            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\houserental-mohin\resources\views/pages/blog.blade.php ENDPATH**/ ?>