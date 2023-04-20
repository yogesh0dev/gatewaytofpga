
<div class="col-xl-9 col-lg-8 col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="settings-widget">
                              <div class="settings-inner-blk p-0">
                                 <div class="sell-course-head comman-space">
                                    <h3>Download Your Certificate</h3>
                                    <p>You can search for old courses too.</p>
                                 </div>
                                 <div class="comman-space pb-0">
								 <div class="instruct-search-blk">
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
                                                      <select class="form-select select" name="sellist1">
                                                         <option>Choose</option>
                                                         <option>Angular</option>
                                                         <option>React</option>
                                                         <option>Node</option>
                                                      </select>
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
                                                <th>COURSE</th>
                                                <th>Over All Marks</th>
                                                <th>Certificate</th>
                                               
                                             </tr>
                                          </thead><tbody>
                                          
<?php foreach($mycourses as $m){
	 $cs = $this->Courses_model->get_courses_info_bytid($m['tutorid'],$m['course_id']);
	 $material = $this->Certifications_model->get_certifications($cs['id']);
	?>
                                             <tr>
                                                <td class="instruct-orders-info">
                                                   <p><a href="index.php?page=course-details">
												   <?=$cs['title'];?></a></p>
                                                </td>
                                                <td><?=$material['total_marks'];?></td>
                                                <td><a href="<?=$material['down_link'];?>"><span class="badge info-medium">Download Certificate</span></a></td>
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
