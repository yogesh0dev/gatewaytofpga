 <!-- Blog Area -->
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center mb-45">
                    <div class="col-lg-8 col-md-9">
                        <div class="section-title mt-rs-20">
                            <h2>Latest from our blogs</h2>
                           
                        </div>
                    </div>
                    
                </div>
                <div class="row justify-content-center">
				<?php foreach($blogs as $b){
						$ctitle=str_replace("-","---",$b['title']);
						$ctitle=str_replace(" ","-",$ctitle);
						$ctitle=str_replace("/","--",$ctitle);
					$tyu=$this->Category_model->get_category($cors['categ'])
					?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="<?=site_url().'blogs-details/'.$ctitle;?>"  style="display: flex;justify-content: center;">
                                <img src="<?=site_url().'uploads/blogs/'.$b['image'];?>" alt="Blog">
                            </a>
                            <div class="content">
                                <ul>
                                    <li><i class="ri-calendar-todo-fill"></i> <?=$b['bdate'];?> </li>
                                    <li><i class="ri-price-tag-3-fill"></i> 
									<a href="#"><?=$tyu['category'];?></a></li>
                                </ul>
                                <h3><a href="<?=site_url().'blogs-details/'.$ctitle;?>"><?=$b['title'];?></a></h3>
                                <p><?=substr($b['description'], 0, 100);?>.</p>
                                <a href="<?=site_url().'blogs-details/'.$ctitle;?>" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>
				<?php }?>
                    <div class="col-lg-12 col-md-12 text-center">
				
                        <div class="pagination-area2">
							<?php echo $this->pagination->create_links(); ?>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->