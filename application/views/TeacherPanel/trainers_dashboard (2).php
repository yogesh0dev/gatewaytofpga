
	<div class="col-xl-9 col-lg-8 col-md-12">
  <!-- <div class="row">
      <div class="col-md-4 d-flex">
         <div class="card instructor-card w-100">
            <div class="card-body">
               <div class="instructor-inner">
                  <h6>REVENUE</h6>
                  <h4 class="instructor-text-success">$467.34</h4>
                  <p>Earning this month</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-4 d-flex">
         <div class="card instructor-card w-100">
            <div class="card-body">
               <div class="instructor-inner">
                  <h6>STUDENTS ENROLLMENTS</h6>
                  <h4 class="instructor-text-info">12,000</h4>
                  <p>New this month</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-4 d-flex">
         <div class="card instructor-card w-100">
            <div class="card-body">
               <div class="instructor-inner">
                  <h6>COURSES RATING</h6>
                  <h4 class="instructor-text-warning">4.80</h4>
                  <p>Rating this month</p>
               </div>
            </div>
         </div>
      </div>
   </div>-->
   <div class="row">
      <div class="col-md-12">
         <div class="card instructor-card">
            <div class="card-header">
               <h4>Introductory Videos</h4>
            </div>
            <div class="card-body">
			 <div class="row">
				<div class="col-sm-4">
				  <div class="video_thumbnail">
				  <img class="img-responsive" src="https://dreamslms.dreamguystech.com/assets/img/video.jpg">
					<span class="play-btn"></span>
				  </div>
				</div><div class="col-sm-4">
				  <div class="video_thumbnail">
				  <img class="img-responsive" src="https://dreamslms.dreamguystech.com/assets/img/video.jpg">
					<span class="play-btn"></span>
				  </div>
				</div>
				<div class="col-sm-4">
				  <div class="video_thumbnail">
				  <img class="img-responsive" src="https://dreamslms.dreamguystech.com/assets/img/video.jpg">
					<span class="play-btn"></span>
				  </div>
				</div>
				
			 </div>
				
            </div>
			
         </div>
      </div>
   </div>
   
   <div class="row">
      <div class="col-md-12">
         <div class="settings-widget">
            <div class="settings-inner-blk p-0">
               <div class="sell-course-head comman-space">
                  <h3>Running Classes</h3>
               </div>
               <div class="comman-space pb-0">
                  <div class="settings-tickets-blk course-instruct-blk table-responsive">
                     
						<table class="table table-nowrap mb-2">
   <thead class="table-light">
      <tr>
         <th>COURSES</th>
         <th>Weekdend Timings</th>
         <th>Weekdays Timings</th>
         <th>STATUS</th>
      </tr>
   </thead><tbody>
   
  <?php foreach($mycourses as $cst){
	  	$cs = $this->Courses_model->get_courses_all_byid($cst['course_id']);
	  ?>
      <tr>
         <td>
            <div class="sell-table-group d-flex align-items-center">
               <div class="sell-group-img">
                  <a href="course-details.html">
                  <img src="<?=site_url().'uploads/courses/'.$cs['img'];?>" class="img-fluid " alt="">
                  </a>
               </div>
               <div class="sell-tabel-info">
                  <p><a href="course-details.html"><?=$cs['title'];?></a></p>
                  <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                     <div class="rating-img d-flex align-items-center">
                        <img src="assets/img/icon/icon-01.svg" alt="">
                        <p><?=$cs['course_duration'];?> Lesson</p>
                     </div>
               </div>

                  <div class="course-stip progress-stip">
                     <div class="progress-bar bg-success progress-bar-striped" style="width: 50%;"></div>
                  </div>
            </div>
         </td>
         <td><?=$cs['class_time_end'];?></td>
         <td><?=$cs['class_time_days'];?></td>
         <td><span class="badge info-inter">Running</span></td>
      </tr>
  <?php }?>
  

   </tbody>
</table>

					 
				</div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <div class="row">
      <div class="col-md-12">
         <div class="settings-widget">
            <div class="settings-inner-blk p-0">
               <div class="sell-course-head comman-space">
                  <h3>Upcoming Courses</h3>
               </div>
               <div class="comman-space pb-0">
                  <div class="settings-tickets-blk course-instruct-blk table-responsive">
                     <table class="table table-nowrap mb-0">
                        <thead class="table-light">
                           <tr>
                              <th>COURSES</th>
                              <th>Weekdend Timings</th>
								<th>Weekdays Timings</th>
                              <th>AMOUNT</th>
                              <th>ACTION</th>
                           </tr>
                        </thead><tbody>
                        
		<?php foreach($courses as $cs){
				
		?>
      <tr>
         <td>
            <div class="sell-table-group d-flex align-items-center">
               <div class="sell-group-img">
                  <a href="course-details.html">
                  <img src="<?=site_url().'uploads/courses/'.$cs['img'];?>" class="img-fluid " alt="">
                  </a>
               </div>
               <div class="sell-tabel-info">
                  <p><a href="course-details.html"><?=$cs['title'];?></a></p>
                  <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                     <div class="rating-img d-flex align-items-center">
                        <img src="assets/img/icon/icon-01.svg" alt="">
                        <p><?=$cs['course_duration'];?> Lesson</p>
                     </div>

               </div>
            </div>
         </td>
         <td><?=$cs['class_time_end'];?></td>
         <td><?=$cs['class_time_days'];?></td>
         <td><span class="badge info-inter">Rs.<?=$cs['price'];?></span></td>
         <td><span class="badge info-inter">Enroll Now</span></td>
      </tr>
  <?php }?>

					  </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

	</div>
</div>
