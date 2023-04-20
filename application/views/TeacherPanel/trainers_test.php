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
                  <h3>My Tests</h3>
               </div>
               <div class="comman-space pb-0">
			   <div class="instruct-search-blk">
                                       <div class="show-filter choose-search-blk">
                                          <form action="#">
                                             <div class="row gx-2 align-items-center">
                                                
                                                <div class="col-md-6 col-lg-6 col-item">
                                                   <div >
														<a href="<?=site_url();?>addtest" class="default-btn three border-radius-5">Add Tests</a>
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
         <th>Batch</th>
         <th>Test Title</th>
         <th>Test Remarks</th>
         <th>Study Assignments </th>
      </tr>
   </thead><tbody>
   
  <?php foreach($batches as $m){
	  $material = $this->Tests_model->get_tests_bid($m['id']);
	  if(empty($material['id'])){
		continue;
	  }
	?>
      <tr>
         <td>
            <?=$m['batch_name'];?>
         </td>
         <td>
            <?=$material['title'];?>
         </td>
         <td>
            <?=$material['description'];?>
         </td>
         
         
         <td><?php $ty= json_decode($material['docsa']);
			$doc=0;
			if(!empty($ty)){
			foreach($ty as $d){
				$doc=$doc+1;
				$d=encrypto($d);
				$d=str_replace("-","---",$d);
				$d=str_replace(" ","-",$d);
				$d=str_replace("/","--",$d);
				$d=str_replace("+","----",$d);
				$d=str_replace("=","-----",$d);
				echo '<a href="'.site_url().'student/studentdocs/tests/'.$d.'"
					onclick="return !window.open(this.href, \'Gateway To FPGA\', \'width=1000px,height=700px\')"
					target="_blank"><span class="badge info-medium"> Document '.$doc.'</span></a>';
			}}
		?></a></td>
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
