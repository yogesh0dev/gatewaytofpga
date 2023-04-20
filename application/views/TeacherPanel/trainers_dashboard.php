
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
                  <h3>Running Batches</h3>
               </div>
               <div class="comman-space pb-0">
                  <div class="settings-tickets-blk course-instruct-blk table-responsive">
                     
						<table class="table table-nowrap mb-2">
   <thead class="table-light">
      <tr>
         <th>Batch Name</th>
         <th>COURSES</th>
         <th>Starting Date</th>
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
   
   <div class="row">
      <div class="col-md-12">
         <div class="settings-widget">
            <div class="settings-inner-blk p-0">
               <div class="sell-course-head comman-space">
                  <h3>Your Student Lists</h3>
               </div>
			   <div class="row" style="padding: 25px;">
			<div class="col-md-12">
			   <div id="alertz" ></div>
			
				<div class="form-group">
               <label class="form-label">Batch</label>
               
			   <select  name='batch_id' class="form-select single-select batch_id" id="select1" aria-label="Example select with button addon" onchange="fetchvalue('batch_id','fcourse')">
                  <option value="">-- Search Batch --</option>
                  <?php foreach($batches as $cs){?>
						<option value="<?=$cs['id'];?>"><?=$cs['batch_name'];?></option>
						</a>
					<?php }?>
                 
               </select>
              <span class="text-danger"><?php echo form_error('batch_id');?></span>
            </div>
           
	</div>
            </div>
               <div class="comman-space pb-0">
                  <div class="settings-tickets-blk course-instruct-blk table-responsive">
                     <table class="table table-nowrap mb-0">
                        <thead class="table-light">
                           <tr>
                              <th>Batch Name</th>
                              <th>Student Names</th>
                           </tr>
                        </thead><tbody>
                        
		<?php 
		foreach($batches as $cst){
				$tu=explode(',',$cst['student']);
				
		?>
      <tr>
        
         <td><?=$cst['batch_name'];?></td>
         <td>
		  <table class="table table-nowrap mb-0">
				<thead class="table-light">
				   <tr>

					  <th>Student Names</th>
					  <th>EMail ID</th>
					  <th>Phone Number</th>
				   </tr>
				</thead><tbody>
		 <?php
		 foreach($tu as $t){
			 
			$ty=$this->Users_model->get_users($t);
			?>
			
			   
				<tr>
					<td><?=$ty['first_name'].' '.$ty['last_name'];;?></td>
					<td><?=$ty['email'];?></td>
					<td><?=$ty['phone'];?></td>
				</tr>
		<?php  }?></tbody></table></td>
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
