  <div class="col-xl-9 col-lg-8 col-md-12">
                     <div class="tak-instruct-group">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="settings-widget">
                                 <div class="settings-inner-blk p-0">
                                    <div class="sell-course-head comman-space">
                                       <h3>Payouts Detail</h3>
                                    </div>
                                 </div>
                              </div>
                              <div class="settings-widget">
                                 <div class="settings-inner-blk p-0">
                                    <div class="comman-space pb-0">
                                       <div class="sell-course-head withdraw-history-head border-bottom-0">
                                          <h3>Payment History</h3>
                                       </div>
                                       <div class="instruct-search-blk mb-0">
                                          <div class="show-filter all-select-blk">
                                             <form action="#">
                                                <div class="row gx-2 align-items-center">
                                                   <div class="col-md-6 col-lg-3 col-item">
                                                      <div class="form-group select-form mb-0">
                                                         <select class="form-select select" name="sellist1">
                                                            <option>30 days</option>
                                                            <option>20 days</option>
                                                            <option>10 days</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6 col-lg-3 col-item">
                                                      <div class="form-group select-form mb-0">
                                                         <select class="form-select select" name="sellist1">
                                                            <option>Oct 2020</option>
                                                            <option>Nov 2020</option>
                                                            <option>Jan 2021</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6 col-lg-3 col-item">
                                                      <div class="form-group select-form mb-0">
                                                         <select class="form-select select" name="sellist1">
                                                            <option>Transaction Type</option>
                                                            <option>Cash</option>
                                                            <option>Card</option>
                                                            <option>Online</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6 col-lg-3 col-item">
                                                      <div class="download-widra">
                                                         <a href="javascript:;"><i class="ri-download-2-line"></i></a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="comman-space pb-0">
                                       <div class="settings-referral-blk course-instruct-blk  table-responsive">
                                          <table class="table table-nowrap mb-0">
                                             <thead class="table-light">
                                                <tr>
                                                   <th>
                                                      <div class="form-check instruct-check-list">
                                                         <input class="form-check-input" type="checkbox" name="option1">
                                                      </div>
                                                   </th>
                                                   <th>ID</th>
                                                   <th>COURSE</th>
                                                   <th>DATE</th>
                                                   <th>STATUS</th>
                                                   <th>AMOUNT</th>
                                                   <th>&nbsp;</th>
                                                </tr>
                                             </thead><tbody> dates pstatus sid amount  
                                             
											 <?php foreach($payments as $py){
												 $crs= $this->Courses_model->get_courses($py['courseid']);
												 ?>
                                                <tr>
                                                   <td>
                                                      <div class="form-check instruct-check-list">
                                                         <input class="form-check-input" type="checkbox" name="option1">
                                                      </div>
                                                   </td>
                                                   <td><a href="view-invoice.html"><?=$crs['title'];?></a></td>
                                                   <td><a href="view-invoice.html">#00<?=$py['id'];?></a></td>
                                                   <td><?=$py['dates'];?></td>
                                                   <td><span class="badge info-low"><?=$py['pstatus'];?></span></td>
                                                   <td><?=$py['amount'];?></td>
                                                   <td><a href="javascript:;"><i class="ri-more-2-fill"></i></a></td>
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
