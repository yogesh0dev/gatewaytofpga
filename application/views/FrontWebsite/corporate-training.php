 <!-- Enrolled Area -->
        <div class="enrolled-area-two pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="enrolled-img-three mb-30 pr-20">
                            <img src="<?=site_url();?>assets/images/pages/corporate-training.png" alt="Enrolled"><div class="enrolled-img-content">
                                <i class="flaticon-discount"></i>
                                <div class="content">
                                    <h3>Get 10% off</h3>
                                    <p>Every course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-6">
                        <div class="enrolled-content mb-30">
                            <div class="section-title">
                                <span>Corporate Training</span>
                                <h2>Highlights!</h2>
                               
                            </div>
                            
							 <div class="courses-details-tab-content">
                                             <p>
                                  <ul>
									<li>Courses focused on all the aspects of FPGA design and Embedded systems.</li>
									<li>Courses customized for the target audience</li>
									<li>Short-term and long-term courses as per client requirements</li>
									<li> Option for complete support in hiring to training.</li>
                                  <ul>
                                </p>
                                        </div>
                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Enrolled Area End -->
		 <!-- Counter Area -->
        <div class="counter-area-two   pt-100 pb-100  section-bg">
            <div class="container">
			<div class="section-title mb-45">
                    <h2>What makes our Corporate Training courses<b> unique?</b></h2>
                </div>
                <div class="counter-max">
                    <div class="row">
                        <div class="col-lg-3 col-6 col-md-3">
                            <div class="counter-content">
                                <img style="width: 75px;" src="<?=site_url();?>assets/images/icons/experts.png" >
                                <p>Delivered by Industry Experts - Train with courses designed & delivered by highly experienced  industry vetrans.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 col-md-3">
                            <div class="counter-content">
                                <img style="width: 75px;" src="<?=site_url();?>assets/images/icons/training.png" >
                                <p>Effective learning paths - Training in latest technologies with a co-created and co-curated curriculum.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 col-md-3">
                            <div class="counter-content">
                               <img style="width: 75px;" src="<?=site_url();?>assets/images/icons/learning.png" >
                               <p>Learning experience platform - Diverse elements to support hands-on learning.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 col-md-3">
                            <div class="counter-content">
                                <img style="width: 75px;" src="<?=site_url();?>assets/images/icons/customize.png" >
                                <p>Flexible & Customizable - A melangeof Infrastructure as a service, Platform as a service and Learning as a service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End -->
 <!-- Courses Area -->
        <div class="courses-area courses-area-rs pt-100 pb-70">
            <div class="container">
                <div class="section-title mb-45">
                    <h2>Find popular <b>courses</b></h2>
                </div>
                <div class="course-slider owl-carousel owl-theme">
				<?php foreach($courses as $cors){
						$tyu=$this->Category_model->get_category($cors['categ']);
						$ctitle=str_replace("-","---",$cors['title']);
						$ctitle=str_replace(" ","-",$ctitle);
						$ctitle=str_replace("/","--",$ctitle);
					?>
                    <div class="courses-item">
                        <a href="<?php echo site_url().'/course-details/'.$ctitle;?>">
                            <img  src="<?=site_url().'uploads/courses/'.$cors['img'];?>" alt="Courses" />
                        </a>
                        <div class="content">
                            
                            <a href="<?php echo site_url().'/categoryinfo/'.str_replace(" ","-",$tyu['category']);?>" class="tag-btn">
								<?=$tyu['category'];?>
							</a>
                            <h3><a href="<?php echo site_url().'/course-details/'.$ctitle;?>">
							<?=$cors['title'];?>
							</a></h3>
                            <ul class="course-list">
                                <li><i class="ri-time-fill"></i><?=$cors['duration'];?> Hr</li>
                                <li><i class="ri-vidicon-fill"></i><?=$cors['module_count'];?> Lectures</li>
                            </ul>
                            <div class="bottom-content">
                                <div class="rating2">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    5 (30+ rating)
                                </div>
                                <div class="bottom-price">&#8377; <?=$cors['price'];?></div>
                            </div>
                        </div>
                    </div>
				<?php }?>
                </div>
            </div>
        </div>
        <!-- Courses Area End -->
		
		
