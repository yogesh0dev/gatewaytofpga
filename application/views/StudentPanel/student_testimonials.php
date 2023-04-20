
	<div class="col-xl-9 col-lg-8 col-md-12">

 <div class="row">
   <div class="col-md-12">
      <div class="settings-widget">
         <div class="settings-inner-blk p-0">
            <div class="sell-course-head comman-space">
               <h3>Testimonials</h3>
               <p>You have full control to manage your own account setting.</p>
            </div>
            <div class="comman-space pb-0">
               <div class="instruct-search-blk mb-0" style="display:none;">
                  <div class="show-filter all-select-blk">
                     <form action="#">
                        <div class="row gx-2 align-items-center">
                           <div class="col-md-6 col-lg-3 col-item">
                              <div class="form-group select-form mb-1">
                                 <select class="form-select select" name="sellist1">
                                    <option>All</option>
                                    <option>review 1</option>
                                    <option>review 2</option>
                                    <option>review 3</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-3 col-item">
                              <div class="form-group select-form mb-1">
                                 <select class="form-select select" name="sellist1">
                                    <option>Rating</option>
                                    <option>5</option>
                                    <option>4</option>
                                    <option>3</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-3 col-item">
                              <div class="form-group select-form mb-1">
                                 <select class="form-select select" name="sellist1">
                                    <option>Sort</option>
                                    <option>Sort 1</option>
                                    <option>Sort 2</option>
                                    <option>Sort 3</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
			
			<?php 
			foreach($testimony as $tes){
				$crs= $this->Courses_model->get_courses($tes['course_id']);
				$yur=$this->Users_model->get_users($tes['studentid']);
				?>
            <div class="comman-space bdr-bottom-line">
               <div class="instruct-review-blk ">
                  <div class="review-item">
                     <div class="instructor-wrap border-0 m-0">
                        <div class="about-instructor">
                           <div class="abt-instructor-img">
                              <a href="#">
							  
							  <img src="<?=site_url().'uploads/avatar/'.$yur['simg'];?>" alt="img" class="img-fluid"></a>
                           </div>
                           <div class="instructor-detail">
                              <h5><a href="#"><?=$yur['first_name'];?> <?=$yur['last_name'];?></a></h5>
                              <p><?=$crs['title'];?></p>
                           </div>
                        </div>
                        <div class="rating">
                           <?php
							for($k=0;$k<$tes['star'];$k++){
								echo '<i class="ri-star-fill"></i>';
								// <i class="ri-star-line"></i>
								
							}
							?>
                        </div>
                     </div>
                     <p class="rev-info">“ <?=$tes['msg'];?>. “</p>
                     
                  </div>
               </div>
            </div>
           <?php }?>
         </div>
      </div>
   </div>
</div>

 
 </div>

	</div>
</div>
