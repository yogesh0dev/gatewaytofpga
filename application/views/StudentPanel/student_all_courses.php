<div class="col-xl-9 col-lg-8 col-md-12">
 <div class="row">
	<div class="col-md-12">
	   <div class="settings-widget">
		  <div class="settings-inner-blk p-0">
			 <div class="sell-course-head comman-space">
				<h3>All Courses</h3>
				<p>Select Your Batch for a course, as per timing that suits you or talk to admin for more clearity.</p>
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
  <table class="table table-nowrap mb-0">
                        <thead class="table-light">
                           <tr>
                              <th style="width: 200px !important;">COURSES</th> 
                              <th style="width: 125px !important;">Batch Name</th>
                              <th>Starting Date</th>
                              <th>Timings</th>
                              <th>AMOUNT</th>
                              <th>ACTION</th>
                           </tr>
                        </thead><tbody>
                        
		<?php foreach($course_schedule as $css){
				$cst = $this->Mycourses_model->get_mycourses_bid($css['id']);
				$cs = $this->Courses_model->get_courses($css['course_id']);
				
	  	$cs = $this->Courses_model->get_courses($css['course_id']);
		$ctitle=str_replace("-","---",$cs['title']);
		$ctitle=str_replace(" ","-",$ctitle);
		$ctitle=str_replace("/","--",$ctitle);
					if($cst){
						
						if($cst['purchased']!='9'){
							continue;
						}
					}
					if($cs['title']==''){
							continue;
						}
					
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
            </div>
         </td>
         <td><?=$css['batch_name'];?></td>
         <td><?php $date=date_create($css['bdate']);echo date_format($date,"d M, Y");?></td>
         <td><b>Weekends:</b><br><?=$css['weekends'];?><br>
				<b>Weekdays:</b><br><?=$css['weekdays'];?></td>
         <td><span class="badge info-inter">Rs.<?=$cs['price'];?></span></td>
         <td><a href="<?=site_url()."purchase/".$css['id'].'-'.$css['course_id'];?>"><span class="badge info-inter">Enroll Now</span></a></td>
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
               
	</div>
</div>
