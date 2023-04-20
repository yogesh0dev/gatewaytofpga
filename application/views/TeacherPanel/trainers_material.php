<?php

function encrypto($simple_string){
	$ciphering = "AES-128-CTR";
	$options = 0;
	$encryption_iv = '1234567891011121';
	$encryption_key = "infotonicsMedia";
	return $encrypted = openssl_encrypt($simple_string, $ciphering,
				$encryption_key, $options, $encryption_iv);
}
?>
	<div class="col-xl-9 col-lg-8 col-md-12">
  <style>
  .sell-tabel-info .course-info {
		margin: 7px 0px;
		width: 525px;
	}
  </style>
   <div class="row">
      <div class="col-md-12">
         <div class="settings-widget">
            <div class="settings-inner-blk p-0">
               <div class="sell-course-head comman-space">
                  <h3>My Study Material</h3>
               </div>
               <div class="comman-space pb-0">
			   <div class="instruct-search-blk">
                                       <div class="show-filter choose-search-blk">
                                          <form action="#">
                                             <div class="row gx-2 align-items-center">
                                               
                                                <div class="col-md-6 col-lg-6 col-item">
                                                   <div class="form-group select-form mb-0">
                                                      
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
         <th>COURSES</th>
         <th>Study Material </th>
      </tr>
   </thead><tbody>
   
  <?php foreach($batches as $cst){
		$cs = $this->Courses_model->get_courses_id($cst['course_id']);
		$material = $this->Course_material_model->get_Course_material($cs['id']);
		$ctitle=str_replace("-","---",$cs['title']);
		$ctitle=str_replace(" ","-",$ctitle);
		$ctitle=str_replace("/","--",$ctitle);
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
                  <p><a href="<?php echo site_url().'/course-details/'.$ctitle;?>"><?=$cst['course_id'];?><?=$cs['title'];?></a></p>
                  <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
                     <div class="rating-img d-flex align-items-center">
                        <img src="assets/img/icon/icon-01.svg" alt="">
                        <p><?=$material['descr'];?></p>
                     </div>
                     
                  </div>
                 
               </div>
            </div>
         </td>
         
         <td>
		 <?php 
		 if(!empty($material)){
		 $ty= json_decode($material['download_link']);
			$doc=0;
			//10_Embedded_System_Design_with_Xilinx_ZYNQ_SoC_cmaterial_0.pdf
			if(!empty($ty)){
			foreach($ty as $d){
				$doc=$doc+1;
				$d=encrypto($d);
				$d=str_replace("-","---",$d);
				$d=str_replace(" ","-",$d);
				$d=str_replace("/","--",$d);
				$d=str_replace("+","----",$d);
				$d=str_replace("=","-----",$d);
				echo '<a href="'.site_url().'student/studentdocs/cmaterial/'.$d.'"
					onclick="return !window.open(this.href, \'Gateway To FPGA\', \'width=1000px,height=700px\')"
					target="_blank"><span class="badge info-medium"> Document '.$doc.'</span></a>';
				
			}}}else{ echo 'No Records Found';}
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
</div>
