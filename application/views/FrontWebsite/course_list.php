

<!-- Courses Area -->
<div class="courses-area pt-100 pb-70">
	<div class="container">
	<div class="product-topper mb-45">
		<div class="row align-items-center">
			<div class="col-lg-8 col-md-6">
				<div class="product-title">
					<h3>We found <span> <?=count($courses);?> </span>courses available for you</h3>
				</div>
			</div>

		</div>
	</div>
		<div class="row">
			
			<div class="col-lg-12">
				<div class="row">
		<?php 
		if(count($courses)!=0){
		foreach($courses as $cors){
				$tyu=$this->Category_model->get_category($cors['categ']);
				$testimonials=$this->Testimony_model->get_all_testimony_id($cors['id']);
				$ctitle=str_replace("-","---",$cors['title']);
				$ctitle=str_replace(" ","-",$ctitle);
				$ctitle=str_replace("/","--",$ctitle);
				//////////////
					$tc=count($testimonials);
					$y=0;
					foreach($testimonials as $t){
						$y=$y+$t['star'];
					}
					if($tc!=0){
						$star=$y/$tc;
					}
				//////////////////////////
				
			?>
		<div class="col-lg-4 col-md-4">
			<div class="courses-item">
				<a href="<?php echo site_url().'/course-details/'.$ctitle;?>">
					<img src="<?=site_url().'uploads/courses/'.$cors['img'];?>" alt="Courses" />
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
					<?php
						if($star!=0){
							if($tc!=0){
							?>
						<div class="rating2">
						<?php
							for($k=0;$k<$star;$k++){
								echo '<i class="ri-star-fill"></i>';
								// echo "<i class="ri-star-half-fill"></i>";
							}
						?>
							<?=round($star,2);?> (<?=count($testimonials);?>+ rating)
						</div>
						<?php }}else{?>
							<div class="rating2">
								<i class="ri-star-line"></i>
								<i class="ri-star-line"></i>
							<?=round($star,2);?> (<?=count($testimonials);?>+ rating)
							</div>
						<?php }?>
						<div class="bottom-price">&#8377; <?=$cors['price'];?></div>
						
					</div>
				</div>
			</div>
		</div>
		<?php }}else{
			
				echo '<div class="container" style="margin-top: 10px;"><div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>No Results Found.</div></div>';
		}?>
		
		 <div class="pagination-area2">
			<?php echo $this->pagination->create_links(); ?>
		</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Courses Area End -->

<!-- Newsletter Area -->

<!-- Newsletter Area End -->
