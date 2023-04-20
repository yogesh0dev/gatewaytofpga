<div class="col-xl-9 col-lg-8 col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="settings-widget">
                              <div class="settings-inner-blk p-0">
                                 <div class="sell-course-head comman-space">
                                    <h3>Student Query Section</h3>
                                  
                                 </div>
                                 <div class="comman-space pb-0">
                                    <div class="instruct-search-blk">
                                       <div class="show-filter choose-search-blk" style="display:none">
                                          <form action="#">
                                             <div class="row gx-2 align-items-center">
                                                <div class="col-md-6 col-item">
                                                   <div class=" search-group">
                                                      <i class="feather-search"></i>
                                                      <input type="text" class="form-control" placeholder="Search our courses">
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
                            <th>Batch Name</th>
                            <th>Subject</th>
                            <th>Your Query</th>
							<th>Answer</th>
							<th>Action</th>
                           </tr>
                        </thead><tbody>
                        
		<?php foreach($myhelp as $cst){
			$cs = $this->Course_schedule_model->get_course_schedule($cst['batch_id']);
		?>
      <tr>
         <td><?=$cs['batch_name'];?></td>
         <td>
			<?=$cst['subject'];?>    
         </td>
         <td><?=$cst['quest'];?></td>
         <td><?=$cst['answer'];?></td>
         <td><a href="<?=site_url();?>trainers-helpanswer/<?=$cst['id'];?>  " class="default-btn three btn-right" style="padding: 7px 15px;border-radius: 5px;">Reply <span></span></a></td>
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
