<?php $__env->startSection('admin_content'); ?>

<?php
  $city=DB::table('cities')->get();
  $subcity=DB::table('subcities')->get();
?>


<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="#">ToLet</a>
    <span class="breadcrumb-item active">Edit Property Section</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">

        <h6 class="card-body-title">Update Property
            <a href="<?php echo e(URL::to('view/property/'.$property->id)); ?>" class="btn btn-sm btn-info" style="float: right;" >View Property</a>
        </h6>


        <form action="<?php echo e(url('update/property/withoutphoto/'.$property->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
        <div class="form-layout">

        

            <div class="form-row mt-4">
                <div class="col-lg-4 mb-3 pr-4">
                  <label for="va">Name : </label>
                  <input type="text" class="form-control" name="name" id="va" value="<?php echo e($property->name); ?>" required>
                </div>
                <div class="col-lg-4 mb-3 pr-4">
                  <label for="vali">Email :</label>
                  <input type="email" class="form-control" name="email" id="vali" value="<?php echo e($property->email); ?>" required>
                </div>
                <div class="col-lg-4 mb-3 pr-4">
                  <label for="va2">Phone No :</label>
                  <input type="text" class="form-control" name="phone" id="va2" value="<?php echo e($property->phone); ?>" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3 pr-4">
                    <label for="vali3">Address :</label>
                    <input type="text" class="form-control" name="address" id="vali3" value="<?php echo e($property->address); ?>" required >
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="v4">City :</label>
                    <select class="form-control" name="city_id" id="v4" required>
                        <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($row->id); ?>" <?php if ($row->id == $property->city_id) {
                                echo "selected";
                            } ?> ><?php echo e($row->city_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                

                <div class="col-md-4 mb-3 pr-4">
                    <label for="vali3">Thana/Sub-city : (<?php echo e($property->subcity); ?>)</label>
                    <select class="form-control select2" name="subcity_id">
                        <option label="Please at first add '<?php echo e($property->subcity); ?>' as a Subcity ***"></option>
                        <?php $__currentLoopData = $subcity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($row->id); ?>|<?php echo e($row->subcity_name); ?>" <?php if ($row->subcity_name == $property->subcity) {
                        echo "selected";
                    } ?> ><?php echo e($row->subcity_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

            </div>


            <div class="form-row">
                <div class="col-md-4 mb-3 pr-4">
                    <label for="bedromm">Bedroom :</label>
                    <input type="number" min="0" class="form-control" name="bedroom" value="<?php echo e($property->bedroom); ?>" id="bedromm" required>
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="bathroom">Bathroom :</label>
                    <input type="number" min="0" class="form-control" name="bathroom" value="<?php echo e($property->bathroom); ?>" id="bathroom" required>
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="kitchen">Kithchen :</label>
                    <input type="number" min="0" class="form-control" name="kitchen" value="<?php echo e($property->kitchen); ?>" id="kitchen" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3 pr-4">
                    <label for="area">Area :</label>
                    <input type="text" class="form-control" name="area" value="<?php echo e($property->area); ?>" id="bedromm" required>
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="price">Price (৳) :</label>
                    <input type="text" class="form-control" name="price" value="<?php echo e($property->price); ?>" id="price" required>
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="price1">Discount Price (৳) :</label>
                    <input type="text" class="form-control" name="discount_price" value="<?php echo e($property->discount_price); ?>" id="price1">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3 pr-4">
                    <label for="parking">Parking Space :</label>
                    <input type="number" min="0" class="form-control" name="parking" value="<?php echo e($property->parking); ?>" id="parking" required>
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="floor">Floor Level :</label>
                    <input type="text" min="0" class="form-control" name="floor" value="<?php echo e($property->floor); ?>" id="floor">
                </div>
                <div class="col-md-4 mb-3 pr-4">
                    <label for="charge">Service Charge :</label>
                    <input type="text" min="0" class="form-control" name="service_charge" value="<?php echo e($property->service_charge); ?>" id="charge">
                </div>
            </div>


            <div class="form-row my-3">
                <div class="col-md-4 mb-3 px-3">
                    <label for="category">Category :</label><div class="ml-4" style="font-size: 15px">
                    <div class="radio">
                        <label>
                          <input type="radio" name="category" id="Rs1" value="Family" required <?php if ("Family" == $property->category) {
                            echo "checked";
                        } ?> >&nbsp; Family
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                          <input type="radio" name="category" id="Rs2" value="Bachelor" <?php if ("Bachelor" == $property->category) {
                            echo "checked";
                        } ?> >&nbsp; Bachelor
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                          <input type="radio" name="category" id="Rs3" value="Sublet" <?php if ("Sublet" == $property->category) {
                            echo "checked";
                        } ?> >&nbsp; Sublet
                        </label>
                    </div></div>
                </div>
                <div class="col-md-4 mb-3 pr-3">
                    <label for="type">Property Type :</label><div class="ml-5" style="font-size: 15px">
                    <div class="radio">
                        <label>
                          <input type="radio" name="type" id="R1" value="Flat" required <?php if ("Flat" == $property->type) {
                            echo "checked";
                        } ?> >&nbsp; Flat
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                          <input type="radio" name="type" id="R2" value="Home" <?php if ("Home" == $property->type) {
                            echo "checked";
                        } ?> >&nbsp; Home
                        </label>
                    </div></div>
                </div>
                <div class="col-md-4 mb-3 pr-3">
                    <label for="purpose">Purpose :</label><div class="ml-4" style="font-size: 15px">
                    <div class="radio">
                        <label>
                          <input type="radio" name="purpose" id="Rads1" value="Sale" required <?php if ("Sale" == $property->purpose) {
                            echo "checked";
                        } ?> >&nbsp; Sale
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                          <input type="radio" name="purpose" id="Rads2" value="Rent" <?php if ("Rent" == $property->purpose) {
                            echo "checked";
                        } ?> >&nbsp; Rent
                        </label>
                    </div></div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Property Details :</label>
                        <textarea class="form-control" id="summernote" name="details" required>
                            <?php echo e($property->details); ?>

                        </textarea>
                    </div>
                </div>
            </div>


            <div class="form-row">
                <div class="col-lg-12">
                    <div class="form-group">
                    <label for="video" class="form-control-label">Video Link :</label>
                        <input class="form-control" placeholder="Enter video link" name="video" id="video" value="<?php echo e($property->video); ?>">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg-12">
                    <div class="form-group">
                    <label for="map_link" class="form-control-label">Map Link :</label>
                        <input class="form-control" placeholder="Enter map_link" name="map_link" id="map_link" value="<?php echo e($property->map_link); ?>">
                    </div>
                </div>
            </div>

        



        <hr>



        <div class="row">

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="trend" value="1" <?php if ($property->trend == 1) {
                    echo "checked";
                    }?> >
                    <span>Trend</span>
                </label>
            </div>
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="best_rated" value="1" <?php if ($property->best_rated == 1) {
                    echo "checked";
                    }?>>
                    <span>Best Rated</span>
                </label>
            </div>
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="hot_new" value="1" <?php if ($property->hot_new == 1) {
                    echo "checked";
                    }?>>
                    <span>Hot New</span>
                </label>
            </div>

        </div>

        <br><hr>
        <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5" type="submit">Update</button>
        </div><!-- form-layout-footer -->


        </div><!-- form-layout -->
        </form>
    </div><!-- card -->
</div><!-- sl-pagebody -->




<!---------- Update Property With Photo ---------------->


       <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
               <h6 class="card-body-title">Update Property With Photo</h6>
               <form action="<?php echo e(url('update/property/photo/'.$property->id)); ?>" method="post" enctype="multipart/form-data">
               	    <?php echo csrf_field(); ?>
               <div class="row">
               	 <div class="col-lg-6 col-sm-6">
               	 	<label>Image One (Main Thumbnail)<span class="tx-danger">*</span></label><br>
              	     <label class="custom-file">
      				  <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);"  accept="image">
      				  <span class="custom-file-control"></span>
      				   <input type="hidden" name="old_one" value="<?php echo e($property->image_one); ?>">
      				  <img src="#" id="one" >
      				</label>
               	 </div>
               	 <div class="col-lg-6 col-sm-6">
               	 	<img src="<?php echo e(URL::to($property->image_one)); ?>" style="height: 80px; width: 80px;">
               	 </div>
               </div>
        	   <div class="row">
               	 <div class="col-lg-6 col-sm-6">
               	 	<label>Image Two <span class="tx-danger">*</span></label><br>
              	     <label class="custom-file">
      				  <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL1(this);"  accept="image">
      				  <input type="hidden" name="old_two" value="<?php echo e($property->image_two); ?>">
      				  <span class="custom-file-control"></span>
      				  <img src="#" id="two" >
      				</label>
               	 </div>
               	 <div class="col-lg-6 col-sm-6">
               	 	<img src="<?php echo e(URL::to($property->image_two)); ?>" style="height: 80px; width: 80px;">
               	 </div>
               </div>
                <div class="row">
               	 <div class="col-lg-6 col-sm-6">
               	 	<label>Image Three <span class="tx-danger">*</span></label><br>
              	     <label class="custom-file">
      				  <input type="file" id="file" class="custom-file-input" name="image_three" onchange="readURL2(this);"  accept="image">
      				  <span class="custom-file-control"></span>
      				  <img src="#" id="three" >
      				   <input type="hidden" name="old_three" value="<?php echo e($property->image_three); ?>">
      				</label>
               	 </div>
               	<div class="col-lg-6 col-sm-6">
               	 	<img src="<?php echo e(URL::to($property->image_three)); ?>" style="height: 80px; width: 80px;">
                </div>

                <br><hr>
               	 <button type="submit" class="btn btn-warning mt-4 ml-3">Update Photo</button>
               </form>

           </div>
       </div>
    </div><!-- sl-mainpanel -->



<!---------------------------------------------------------------------------------------------------------------------------->


<!--------JQ for image--------->
<script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
	function readURL1(input) {                  //------------
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#two')                         //------------
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
	function readURL2(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#three')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\houserental-mohin\resources\views/admin/properties/edit.blade.php ENDPATH**/ ?>