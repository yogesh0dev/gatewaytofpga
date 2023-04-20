  <!-- Checkout Area -->
		<section class="checkout-area pt-100 pb-70 inner-title">
			<div class="container">
                <div class="row">
					 
   <div class="row">
      <div class="col-md-12">
         <div class="settings-widget">
            <div class="settings-inner-blk p-0">
               <div class="sell-course-head comman-space">
                  <h3>Upcoming Batches</h3>
               </div>
               <div class="comman-space pb-0">
                  <div class="settings-tickets-blk course-instruct-blk table-responsive">
                     <table class="table table-nowrap mb-0">
                        <thead class="table-light">
                           <tr>
                              <th>Courses</th>
                              <th>Batch Name</th>
                              <th>Weekdend Timings</th>
								<th>Weekdays Timings</th>
                              <th>AMOUNT</th>
                              <th>ACTION</th>
                           </tr>
                        </thead><tbody>
                        
		<?php foreach($courses as $cs){
			$cids=$cs['course_id']; 
			$cid=$this->Courses_model->get_courses($cids);
						$ctitle=str_replace("-","---",$cid['title']);
						$ctitle=str_replace(" ","-",$ctitle);
						$ctitle=str_replace("/","--",$ctitle);
			$cin=$this->Course_info_model->get_course_info_cid($cs['course_id']);
			// var_dump($cin);

		?>
      <tr>
         <td>
            <div class="sell-table-group d-flex align-items-center">
               <div class="sell-group-img">
                  <a href="<?=site_url().'/course-details/'.$ctitle;?>">
                  <img src="<?=site_url().'uploads/courses/'.$cid['img'];?>" class="img-fluid " alt="">
                  </a>
               </div>
               <div class="sell-tabel-info">
                  <p><a href="<?=site_url().'/course-details/'.$ctitle;?>"><?=$cid['title'];?></a></p>
                  <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                     <div class="rating-img d-flex align-items-center">
                        <img src="assets/img/icon/icon-01.svg" alt="">
                        <p><?=$cs['course_duration'];?> Lesson</p>
                     </div>

               </div>
            </div>
         </td>
         <td><?=$cs['batch_name'];?></td>
         <td><?=$cin['class_time_end'];?></td>
         <td><?=$cin['class_time_days'];?></td>
         <td><span class="badge info-inter">Rs.<?=$cid['price'];?></span></td>
         <td><a href="<?=site_url()."purchase/".$cs['id'].'-'.$cids;?>"><span class="badge info-inter">Enroll Now</span></a></td>
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
          
		</section>
		<!-- Checkout Area End -->

        <!-- Newsletter Area -->
        
        <!-- Newsletter Area End -->