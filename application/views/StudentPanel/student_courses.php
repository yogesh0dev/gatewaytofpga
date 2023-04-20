
	<div class="col-xl-9 col-lg-8 col-md-12">


   
   <div class="row">
      <div class="col-md-12">
         <div class="settings-widget">
            <div class="settings-inner-blk p-0">
               <div class="sell-course-head comman-space">
                  <h3>My Courses</h3>
               </div>
               <div class="comman-space pb-0">
			   <div class="instruct-search-blk" style="display:none;">
                                       <div class="show-filter choose-search-blk">
                                          <form action="#">
                                             <div class="row gx-2 align-items-center">
                                                <div class="col-md-6 col-item">
                                                   <div class=" search-group">
                                                      <i class="feather-search"></i>
                                                      <input type="text" class="form-control" placeholder="Search our courses">
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-item">
                                                   <div class="form-group select-form mb-0">
										  <select class="form-select select" name="sellist1">
											 <option value="">Choose</option>
										   <?php foreach($catregr as $categ){
											$category=str_replace("-","---",$categ['category']);
											$category=str_replace(" ","-",$category);
											$category=str_replace("/","--",$category);
											?>
											
											 
											 <option value="<?=$categ['id'];?>"><?=$categ['icons'];?>
												<?=$categ['category'];?></option>
											
											</a>
										<?php }?>
										  </select>
                                                   </div>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                  <div class="settings-tickets-blk course-instruct-blk table-responsive">
                     
						<table class="table table-nowrap mb-2">
   <thead class="table-light">
      <tr>
         <th>Course Name</th>
         <th>Batch Name</th>
         <th>Started On</th>
         <th>Weekdend Timings</th>
         <th>Weekdays Timings</th>
         <th>STATUS</th>
      </tr>
   </thead><tbody>
   
  <?php foreach($mycourses as $cst){
	  	
		$cs = $this->Courses_model->get_courses_id($cst['course_id']);
		$bs = $this->Course_schedule_model->get_course_schedule($cst['batch_id']);
		$ctitle=str_replace("-","---",$cs['title']);
		$ctitle=str_replace(" ","-",$ctitle);
		$ctitle=str_replace("/","--",$ctitle);
	// <?php echo site_url().'/course-details/'.$ctitle;? >
	  ?>
      <tr>
         <td>
            <div class="sell-table-group d-flex align-items-center">
               <div class="sell-group-img">
                  <a href="<?php echo site_url().'/course-details/'.$ctitle;?>">
                  <img src="<?=site_url().'uploads/courses/'.$cs['img'];?>" class="img-fluid " alt="">
                  </a>
               </div>
               <div class="sell-tabel-info">
                  <p><a href="<?php echo site_url().'/course-details/'.$ctitle;?>"><?=$cs['title'];?></a></p>
                  <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                     <div class="rating-img d-flex align-items-center">
                        <img src="assets/img/icon/icon-01.svg" alt="">
                        <p><?=$cs['course_duration'];?> Lesson</p>
                     </div>
               </div>
				<!--
                  <div class="course-stip progress-stip">
                     <div class="progress-bar bg-success progress-bar-striped" style="width: 50%;"></div>
                  </div>
				  -->
            </div>
         </td>
         <td><?php $date=date_create($bs['bdate']);echo date_format($date,"d M, Y");?></td>
         <td><?=$bs['batch_name'];?></td>
         <td><?=$bs['weekends'];?></td>
         <td><?=$bs['weekdays'];?></td>
         <td>
			<?php
			if($cst['completed']=='0'){
				echo '<span class="badge info-inter">Running</span>';
			}else{
				echo '<span class="badge sinfo-inter">Completed</span>';
			}
			
			?>
		 </td>
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
