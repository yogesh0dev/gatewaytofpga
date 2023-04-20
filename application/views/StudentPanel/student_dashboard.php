
	<div class="col-xl-9 col-lg-8 col-md-12">

  <!-- 
  
   
  
  	<div onclick="thevid=document.getElementById('thevideo'); thevid.style.display='block'; this.style.display='none'">
<img style="cursor: pointer;" alt="" src="http://oi59.tinypic.com/33trpyo.jpg" />
</div>
<div id="thevideo" style="display: none;">
<embed width="631" height="466" type="application/x-shockwave-flash" src="https://www.youtube.com/v/26EpwxkU5js?version=3&amp;hl=en_US&amp;autoplay=1" allowFullScreen="true" allowscriptaccess="always" allowfullscreen="true" />
</div>
  
  
  <div class="row">
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
				<?php foreach($videos as $v) {?>
				<div class="col-sm-4">
					<div class="local-video-container" style="margin-bottom:25px;">
						<video controls width="300" height="240"  controlsList="nodownload">
							<source src="<?=site_url();?>uploads/videos/<?php echo @$v['youtube']; ?>" 
							type="video/mp4">
							<!--type="video/<?=$v['extns'];?>">-->
							Your browser does not support the video tag.
						</video>
						
					</div>
				</div>
				<?php }?>
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
                  <h3>Courses In Bucket To Buy</h3>
               </div>
               <div class="comman-space pb-0">
                  <div class="settings-tickets-blk course-instruct-blk table-responsive">
                    
				  
						<table class="table table-nowrap mb-2">
   <thead class="table-light">
      <tr>
         <th>COURSES</th>
         <th>Batch Name</th>
         <th>Weekend Timings</th>
         <th>Weekdays Timings</th>
         <th>Status</th>
      </tr>
   </thead><tbody>
   
  <?php 
		// echo '<pre>';
		// var_dump($mycourses);
		
		foreach($mycourses as $cst){
	  	// $cs = $this->Courses_model->get_courses_id_all($cst['course_id']);
	  	$bs = $this->Course_schedule_model->get_course_schedule($cst['batch_id']);	  
		
	  	$cs = $this->Courses_model->get_courses($cst['course_id']);
		$ctitle=str_replace("-","---",$cs['title']);
		$ctitle=str_replace(" ","-",$ctitle);
		$ctitle=str_replace("/","--",$ctitle);
	// 
		if($cst['purchased']==1 && $cst['pstatus']==1){
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
                  <p><a href="<?php echo site_url().'/course-details/'.$ctitle;?>"><?=$ctitle;?></a></p>
                  <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                     <div class="rating-img d-flex align-items-center">
                        <img src="assets/img/icon/icon-01.svg" alt="">
                        <p><?=$cs['module_count'];?> Module</p>
                     </div>
               </div>
				<!--
                  <div class="course-stip progress-stip">
                     <div class="progress-bar bg-success progress-bar-striped" style="width: 50%;"></div>
                  </div>
				-->
            </div>
         </td>
         <td><?=$bs['batch_name'];?></td>
         <td><?=$bs['weekends'];?></td>
         <td><?=$bs['weekdays'];?></td>
         <td>
		 <?php if($cst['purchased']==0){?>
			<?php if($cst['pstatus']==0){?>
				<span class="badge info-medium">Inactive</span><br><br>
				<span class="badge info-medium">Payment Pending</span><br><br>
				<a href="<?=site_url();?>student-paydetails/<?=$bs['id'];?>"><span class="badge info-inter">Pay Now</span></a>
				
		<?php }else{?>
				<span class="badge info-medium">Payment Pending</span><br><br>
				<a href="<?=site_url();?>student-paydetails/<?=$bs['id'];?>"><span class="badge info-inter">Pay Now</span></a>
		<?php }}else{?>
			<span class="badge info-medium">Payment Pending</span><br><br>
				<a href="<?=site_url();?>student-paydetails/<?=$bs['id'];?>"><span class="badge info-inter">Pay Now</span></a>
		<?php }?>
		
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
                        <p><?=$cs['module_count'];?> Module</p>
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
