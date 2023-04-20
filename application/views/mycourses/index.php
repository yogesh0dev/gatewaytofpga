<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	
	<th>S.No.</th>
		<th>Student Name</th>
		<th>Course Name</th>
		<th>Batch Name</th>
		<th>Status</th>
		<th>Purchase Status</th>
		<th>Payment Status</th>
		<th>Actions</th>
    </tr>
	</thead><tbody> 
	<?php $sno=0;
		foreach($mycourses as $c){ 
			$cid=$c['course_id']; 
			$cid=$this->Courses_model->get_courses($cid);
			$sid= $c['studentid']; 
			$sid=$this->Users_model->get_users($sid);
			$tid= $c['tid']; 
			$tid=$this->Users_model->get_users($tid);
			$bid= $c['module_id']; 
			$bid=$this->Curriculam_model->get_Curriculam($bid);
			$csid=$this->Course_schedule_model->get_course_schedule($c['batch_id']);	
	?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $sid['first_name'].' '.$sid['first_name']; ?></td>
		<td><?php echo $cid['title']; ?></td>
		<td><?php echo $csid['batch_name']; ?></td>
		
		<td><?php $rty=$c['completed']; 
				if($rty=='0'){echo '<span class="badge bg-light-info text-info w-100">Running</span>';}elseif($rty=='1'){echo '<span class="badge bg-light-success text-success w-100">Completed</span>';}
			?></td>
		
		<td><?php $rty=$c['purchased']; 
				if($rty=='0'){echo '<span class="badge bg-light-warning text-warning w-100">Pending</span>';}elseif($rty=='1'){echo '<span class="badge bg-light-success text-success w-100">Purchased</span>';}
			?></td>   
		<td><?php $rty=$c['pstatus']; 
				if($rty=='0'){echo '<span class="badge bg-light-warning text-warning w-100">Pending</span>';}elseif($rty=='1'){echo '<span class="badge bg-light-success text-success w-100">Paid</span>';}elseif($rty=='2'){echo '<span class="badge bg-light-info text-info w-100">Partially Paid</span>';}
			?></td>
		
		<td>
		
			<div class="btn-group">
			  <a type="button" href="<?php echo site_url('mycourses/edit/'.$c['id']); ?>" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
			  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="<?php echo site_url('mycourses/status/mpr/'.$c['id']); ?>">Payment Pending</a>
				</li>
				
				<li><a class="dropdown-item" href="<?php echo site_url('mycourses/status/pr/'.$c['id']); ?>">Partially Paid</a>
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('mycourses/status/mp/'.$c['id']); ?>">Paid</a>
				</li>
				<li>
				  <hr class="dropdown-divider">
				</li>
				
				
				<li><a class="dropdown-item" href="<?php echo site_url('mycourses/status/ppr/'.$c['id']); ?>">Purchase Pending</a>
				</li>
				
				<li><a class="dropdown-item" href="<?php echo site_url('mycourses/status/pp/'.$c['id']); ?>">Purchased</a>
				</li>
				<li>
				  <hr class="dropdown-divider">
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('mycourses/status/cmp/'.$c['id']); ?>">Completed</a>
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('mycourses/status/cmpn/'.$c['id']); ?>">Running</a>
				</li>
				
			  </ul>
			</div>
           
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
