<div class="col-xl-9 col-lg-8 col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="settings-widget">
                              <div class="settings-inner-blk p-0">
                                 <div class="sell-course-head comman-space">
                                    <h3>All Queries</h3>
                                    <p>Manage your queries and its update like live, draft and insight.</p>
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
                                              
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                    <table class="table table-nowrap mb-0">
                        <thead class="table-light">
                           <tr>
                            <th width="200px">Course / Batch Name</th>
                            <th>Subject</th>
                            <th>Your Query</th>
							<th>Answer</th>
                           </tr>
                        </thead><tbody>
                        
		<?php foreach($myhelp as $cst){
			$cs = $this->Course_schedule_model->get_course_schedule($cst['batch_id']);
			$css = $this->Courses_model->get_courses_id($cst['course_id']);
			$ctitle=str_replace("-","---",$css['title']);
			$ctitle=str_replace(" ","-",$ctitle);
			$ctitle=str_replace("/","--",$ctitle);
			
		?>
      <tr>
         <td>
		 <b><?=$css['title'];?></b><br>
		 <?=$cs['batch_name'];?>
		 </td>
         <td>
			<?=$cst['subject'];?>    
         </td>
         <td><?=$cst['quest'];?></td>
         <td><?=$cst['answer'];?></td>
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
