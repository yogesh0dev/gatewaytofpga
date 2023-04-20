<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	<th>S.No.</th>
	<th>Course Name</th>
		<th>Student Name</th>
		<th>Trainer Name</th>
		<th>Batch</th>
		<th>Day</th>
		<th>Attendence date</th>
		<th>Status</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($assign as $c){ 
			$cid=$c['course_id']; 
			$cid=$this->Courses_model->get_courses($cid);
			$sid= $c['studentid']; 
			$sid=$this->Users_model->get_users($sid);
			$tid= $c['trainerid']; 
			$tid=$this->Users_model->get_users($tid);
			$bid= $c['batch']; 
			$bid=$this->Curriculam_model->get_Curriculam($bid);
	?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php 
				
				echo $cid['title'];
			?></td>
		<td><?php 
				echo $sid['first_name'].' '.$sid['last_name'];
			?></td>
		<td><?php 
				echo $tid['first_name'].' '.$tid['last_name'];	
		?></td>
		<td><?php 
				echo $bid['topic'];
		?></td>
		<td><?php echo $c['day']; ?></td>
		<td><?php echo $c['adate']; ?></td>
		<td><?php echo $c['attendence']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('assign/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('assign/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
