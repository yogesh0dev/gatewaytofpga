<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	<th>S.No.</th>
	<th>Status</th>
	<th>Course id</th>
		<th>Student Name</th>
		<th>Test. Date</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Star</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($testimony as $c){ 
			$cid=$c['course_id']; 
			$cid=$this->Courses_model->get_courses($cid);
			$sid= $c['studentid']; 
			$sid=$this->Users_model->get_users($sid);
	
	?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php $tyr=$c['status']; 
		// Accepted Rejected Under Review
		if($tyr=='Y'){
			echo '<span class="badge bg-light-success text-success w-100">Active</span>';
		}elseif($tyr=='N'){
			echo '<span class="badge bg-light-danger text-danger w-100">Inactive</span>';
		}
		
		?></td>
		<td><?php echo $cid['title']; ?></td>
		<td><?php echo $sid['first_name'].' '.$sid['last_name']; ?></td>
		<td><?php echo $c['tdate']; ?></td>
		<td><?php echo $c['subject']; ?></td>
		<td><?php echo $c['msg']; ?></td>
		<td><?php echo $c['star']; ?></td>
		
		<td>
          <div class="btn-group">
			  <a type="button" href="" class="btn btn-primary">Status</a>
			  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="<?php echo site_url('testimony/status/N/'.$c['id']); ?>">Inactive</a>
				</li>
				
				<li>
				  <hr class="dropdown-divider">
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('testimony/status/Y/'.$c['id']); ?>">Active</a>
				</li>
			  </ul>
			</div>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
