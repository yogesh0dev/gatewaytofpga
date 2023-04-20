
	<div class="col-xl-9 col-lg-8 col-md-12">
    <style>			
.containerz{
	z-index:10;
	position: revert !important;
}

</style>			
				<?php
        //for warning -> flash_message
        //for info -> success_message
        
        $arr = $this->session->flashdata();
        if(!empty($arr['flash_message'])){
            $html = '<div class="containerz" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-warning alert-dismissible" role="alert">';
            // $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['flash_message'];
            $html .= '</div>';
            $html .= '</div>';
        }else if (!empty($arr['success_message'])){
            $html = '<div class="containerz" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-success alert-dismissible" role="alert">';
            // $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['success_message'];
            $html .= '</div>';
            $html .= '</div>';
        }else if (!empty($arr['danger_message'])){
            $html = '<div class="containerz" style="margin-top: 10px;">';
            $html .= '<div class="alert alert-danger alert-dismissible" role="alert">';
            // $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            $html .= $arr['danger_message'];
            $html .= '</div>';
            $html .= '</div>';
        }
		echo $html;
    ?>

   
   <div class="row">
      <div class="col-md-12">
         <div class="settings-widget">
            <div class="settings-inner-blk p-0">
               <div class="sell-course-head comman-space">
                  <h3>My Courses</h3>
               </div>
               <div class="comman-space pb-0">
			   <div class="instruct-search-blk" style="display:none">
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
         <th>Batch Name</th>
         <th>COURSES</th>
         <th>Started On</th>
         <th>Weekend Timings</th>
         <th>Weekdays Timings</th>
         <th>Attendance</th>
         <th>Certificate</th>
      </tr>
   </thead><tbody>
   
  <?php foreach($batches as $cst){
		$cs = $this->Courses_model->get_courses_id($cst['course_id']);
		$ctitle=str_replace("-","---",$cs['title']);
		$ctitle=str_replace(" ","-",$ctitle);
		$ctitle=str_replace("/","--",$ctitle);
	// <?php echo site_url().'/course-details/'.$ctitle;? >
	  ?>
      <tr>
         <td><?=$cst['batch_name'];?>
         </td>
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
		 <td><?php $date=date_create($cst['bdate']);echo date_format($date,"d M, Y");?></td>
         <td><?=$cst['weekends'];?></td>
         <td><?=$cst['weekdays'];?></td>
         <td><a href="<?=site_url().'tattendance/'.$cst['id'];?>"><span class="badge info-inter">Take Attendance</span></a></td>
		  <td><a href="<?=site_url().'gcertificate/'.$cst['id'];?>"><span class="badge info-medium">Generate Certificate</span></a></td>
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
