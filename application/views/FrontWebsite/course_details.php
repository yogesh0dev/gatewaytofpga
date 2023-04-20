<?php
	$curriculam = $this->Curriculam_model->get_curriculam_cid($courses['course_id']);
	$tr = $this->Trainers_model->get_Trainers($courses['tutorid']);
	
	 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
?>
 <div class="inner-banner inner-banner-bg2">
   <div class="container">
      <div class="inner-title">
         <h3><?=$courses['title'];?></h3>
         <div class="rating">
            <i class="ri-star-fill"></i>4k+ rating
         </div>
         <div class="inner-banner-content">
            <a href="instructors-details.html" class="user-area">
               <img src="<?=site_url();?>assets/img/user/teacher.png" width="30px" alt="Instructors">
               <h3><?=$tr['name'];?></h3>
            </a>
            <ul class="course-list">
               <li><i class="ri-time-fill"></i> 10 hr 07 min</li>
               <li><i class="ri-vidicon-fill"></i> 67 lectures</li>
            </ul>
         </div>
         <ul>
            <li>
               <a href="<?=site_url();?>">Home</a>
            </li>
            <li><a href="<?=site_url();?>course-details">Courses details</a></li>
            <li><?=$courses['title'];?></li>
         </ul>
      </div>
   </div>
</div>

 <!-- Courses Details Area -->
        <div class="courses-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="courses-details-contact">
                            <div class="tab courses-details-tab">
                                <ul class="tabs">
							
                                    <li>
                                        Overview
                                    </li>
                                    
                                    <li>
                                        Curriculum
                                    </li>

                                    <li>
                                        Testimonials
                                    </li>
                                </ul>
                                <div class="tab_content current active">
                                    <div class="tabs_item current">
                                        <div class="courses-details-tab-content">
                                            <div class="courses-details-into">
                                               <h3>Description</h3>     
											    <?=$courses['description'];?>
                                            </div>
                                            
											<div class="courses-details-into">
                                               <h3>Who Should Attend?</h3>
											    <?=$courses['whoattend'];?>
                                                
                                            </div>
                                            
											<div class="courses-details-into">
                                               <h3>Prerequisites</h3>
											    <?=$courses['prerequ'];?>
                                                
                                            </div>
                                            
											<div class="courses-details-into">
                                               <h3>Skills Gained</h3>
											    <?=$courses['skills'];?>
											    
                                                
                                            </div>
                                            
											
                                        </div>
                                    </div>

                                    <div class="tabs_item">
                                        <div class="courses-details-tab-content">
                                            <div class="courses-details-accordion">
                                                <ul class="accordion">
	<?php 
	foreach($curriculam as $clm){
	?>
                                                    <li class="accordion-item">
                                                        <a class="accordion-title" href="javascript:void(0)">
                                                            <i class="ri-add-fill"></i>
                                                          <?=$clm['topic'];?>
                                                        </a>
                                                        <div class="accordion-content">
                                                            <div class="accordion-content-list">
                                                                <div class="accordion-content-left">
                                                                    <i class="ri-file-text-line"></i>
                                                                    <?=$clm['description'];?>
                                                                </div>
                                                                <div class="accordion-content-right">
                                           <!-- <div class="tag">3 question</div>-->
                                                                    <div class="tag2"><?=$clm['timeline'];?> min</div>
                                                                    
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </li>
	<?php }?>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="tabs_item">
                                        <div class="courses-details-tab-content">
                                            <div class="courses-details-review-form">
                                                <h3>Testimonials</h3>
												
                                                <div class="review-title">
                                                    <div class="rating">
													<?php
														$tc=count($testimonials);
														$y=0;
														foreach($testimonials as $t){
															$y=$y+$t['star'];
														}
														if($tc!=0){
															$star=$y/$tc;
														}
														
													?>
													<?php
													if($tc!=0){
													for($k=0;$k<$star;$k++){
														echo '<i class="ri-star-fill"></i>';
														// echo "<i class="ri-star-half-fill"></i>";
													}
													}
													
													?>
                                                        
                                                        
                                                    </div>
                                                    <p>Based on  review/s</p>
                                                    <a href="<?=site_url();?>student-leave-testimony" class="default-btn btn-right">Write a Review <span></span></a>
                                                </div>
												
							<?php foreach($testimonials as $test){
								$yur=$this->Users_model->get_users($test['studentid']);
								
								?>
                                                <div class="review-comments">
                                                    <div class="review-item">
                                                        <div class="content">
                                      <img src="<?=site_url().'uploads/avatar/'.$yur['simg'];?>" alt="Images">
								
									  
                                                            <div class="content-dtls">
                                                                <h4><?=$yur['first_name'].' '.$yur['last_name'];?></h4>
                                                                <span><?=$test['tdate'];?></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating">
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star'></i>
                                                            <i class='bx bxs-star-half'></i>
                                                        </div>
                                                        <h3><?=$test['subject'];?></h3>
                                                        <p>
                                                           <?=$test['msg'];?>
                                                        </p>
                                                        <a href="shop-details.html" class="review-report-link">Report as Inappropriate</a>
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
                    <div class="col-lg-4">
                        <div class="courses-details-sidebar">
                            <img src="<?=site_url().'uploads/courses/'.$courses['img'];?>" alt="Courses" />
                            <div class="content">
                                <h3>&#8377;<?=$courses['price'];?></h3>

	  <a href="#listcourses" class="default-btn">Buy Now</a>

                                <ul class="social-link">

                                    <li class="social-title">Share this course:</li>
                                    <li>
                                        <a href="http://www.facebook.com/sharer.php?u=<?=$url;?>" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://twitter.com/share?url=<?=$url;?>&text=<?=$courses['title'];?>&hashtags=gatewaytofpga" target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?=$url;?>" target="_blank">
                                            <i class="ri-linkedin-line"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
							<div class="content">
  <ul class="class-details">
									<li>
										<div class="name"><i class="la la-file"></i>Course Name</div>
										<div class="info"><?=$courses['title'];?></div>
									</li>
									<li>
										<div class="name"><i class="la la-calendar-o"></i>Upcoming Batch</div>
										<div class="info">23 July 2022</div>
									</li>
									<li>
										<div class="name"><i class="la la-history"></i>Coures Duration</div>
										<div class="info"><?=$courses['course_duration'];?></div>
									</li>
									<li>
										<div class="name"><i class="la la-group"></i>Batch Size</div>
										<div class="info"><?=$courses['batch_size'];?></div>
									</li>
									<li>
										<div class="name"><i class="la la-clock-o"></i>Class Time (Weekends)</div>
										<div class="info"><?=$courses['class_time_end'];?></div>
									</li>
									<li>
										<div class="name"><i class="la la-clock-o"></i>Class Time (Weekdays)</div>
										<div class="info"><?=$courses['class_time_days'];?></div>
									</li>
									<li>
										<div class="name"><i class="la la-rupee"></i>Fees</div>
										<div class="info">&#8377;<?=$courses['price'];?> + GST</div>
									</li>
									<li>
										<div class="name"><i class="la la-user"></i>Trainer</div>
										<div class="info">8+ years of industry level rich experience</div>
									</li>
									<li>
										<div class="name"><i class="la la-cog"></i>Tool</div>
										<div class="info"><?=$courses['tools'];?></div>
									</li>
									<li>
										<div class="name"><i class="la la-wifi"></i>Mode of Training</div>
										<div class="info"><?=$courses['training_mode'];?></div>
									</li>
									<li>
										<div class="name"><i class="la la-mortar-board"></i>Certificate</div>
										<div class="info"><?=$courses['certis'];?></div>
									</li>
								
									<li>
										<div class="name"><i class="la la-star-o"></i>Rating</div>
										<div class="info rating">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										</div>
									</li>
									
								</ul>
</div>
							</div>
                    </div>
					
					
                </div>
			<div  id="listcourses" style="padding-top: 15%;">
			&nbsp;
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
													  <th>Courses</th>
													  <th>Batch Name</th>
													  <th>Weekdend Timings</th>
														<th>Weekdays Timings</th>
													  <th>AMOUNT</th>
													  <th>ACTION</th>
												   </tr>
												</thead><tbody>
												
								<?php foreach($related_courses as $cs){
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
								<td>
								
								<?php if(!empty($_SESSION['role'])){
	
									$myid = $this->Mycourses_model->get_mycourses_bybid($cs['id'],$_SESSION['id']);
									 
									if(count($myid)>0){?>
										<a href="<?=site_url();?>student-dashboard" class="default-btn">Check Your Dashboard</a>
								<?php }else{?>
									<a href="<?=site_url()."purchase/".$cs['id'].'-'.$cids;?>">
										<span class="badge info-inter">Enroll Now</span>
									</a>
								<?php }}?>
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
        </div>
        <!-- Courses Details Area End -->

        <!-- Newsletter Area -->
        
        <!-- Newsletter Area End -->