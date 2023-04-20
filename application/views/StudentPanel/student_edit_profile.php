
	<div class="col-xl-9 col-lg-8 col-md-12">
<div class="settings-widget profile-details">
   <div class="settings-menu p-0">
      <div class="profile-heading">
         <h3>Profile Details</h3>
         <p>You have full control to manage your own account setting.</p>
		  
      </div>
      <div class="course-group mb-0 d-flex">
         <div class="course-group-img d-flex align-items-center">
            <a href="student-edit-profile"><img src="<?=site_url().'uploads/avatar/'.$userinfo['simg'];?>" alt="" class="img-fluid"></a>
            <div class="course-name">
               <h4><a href="student-edit-profile"><?=$userinfo['first_name'];?> <?=$userinfo['last_name'];?></a></h4>
               <!-- <p>PNG or JPG no bigger than 800px wide and tall.</p>-->
            </div>
         </div>
         <!--
		 <div class="profile-share d-flex align-items-center justify-content-center">
            <a href="javascript:;" class="btn btn-success">Update</a>
            <a href="javascript:;" class="btn btn-danger">Delete</a>
         </div>
		 -->
      </div>

      <div class="checkout-form personal-address add-course-info">
         <div class="personal-info-head">
            <h4>Personal Details</h4>
            <p>Edit your personal information and address.</p>
			
			<div class="alertz" id="alertz" ></div>
         </div>
         <form id="formdata" action="<?=site_url();?>student-edits" onsubmit="submitForm(this)"> 
            <div class="row">
               <div class="col-lg-6">
                  <div class="form-group">  
                     <label class="form-control-label">First Name</label>
                     <input name="first_name" value="<?=$userinfo['first_name'];?>" type="text" class="form-control"  placeholder="Enter your first Name">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label class="form-control-label">Last Name</label>
                     <input name="last_name" value="<?=$userinfo['last_name'];?>" type="text" class="form-control" placeholder="Enter your last Name">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label class="form-control-label">Phone</label>
                     <input name="phone" value="<?=$userinfo['phone'];?>" type="text" class="form-control" placeholder="Enter your Phone">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label class="form-control-label">Email</label>
                     <input name="email" value="<?=$userinfo['email'];?>" type="text" class="form-control" placeholder="Enter your Email">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label class="form-control-label">Birthday</label>
                     <input name="dob" value="<?=$userinfo['dob'];?>" type="date" class="form-control" placeholder="Birth of Date">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label class="form-label">State</label>
                     <input name="state" value="<?=$userinfo['state'];?>" type="text" class="form-control" placeholder="Your State">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label class="form-control-label">Contact Address</label>
                     <input name="caddress" value="<?=$userinfo['caddress'];?>" type="text" class="form-control" placeholder="Address">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label class="form-control-label">Permanent Address</label>
                     <input name="paddress" value="<?=$userinfo['paddress'];?>" type="text" class="form-control" placeholder="Address">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label class="form-control-label">City</label>
                     <input name="city" value="<?=$userinfo['city'];?>" type="text" class="form-control" placeholder="Enter your City">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form-group">
                     <label class="form-control-label">Pincode</label>
                     <input name="pincode" value="<?=$userinfo['pincode'];?>" type="text" class="form-control" placeholder="Enter your Zipcode">
                  </div>
               </div>
               <div class="update-profile">
                  <button type="submit" class="default-btn one border-radius-5">Update Profile</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

 </div>

	</div>
</div>
