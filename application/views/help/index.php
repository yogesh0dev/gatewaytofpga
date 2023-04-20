<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	 
		<th>S.No.</th>
		<th>Student Name</th>
		<th>Teacher Name</th>
		<th>Subject</th>
		<th>Question</th>
		<th>Answer</th>
		<th>Batch Name</th>
		<th>Course Name</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($help as $c){ 
		// studentid 
		$sid=$this->Users_model->get_users($c['studentid']);
		// trainerid 
		$tid=$this->Users_model->get_users($c['trainerid']);
		// batch_id   
		$batch=$this->Course_schedule_model->get_course_schedule($c['batch_id']);
		// course_id 
		$course=$this->Courses_model->get_courses($c['batch_id']);
		
		?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $sid['first_name'].' '.$sid['last_name']; ?></td>
		<td><?php echo $tid['first_name'].' '.$tid['last_name']; ?></td>
		<td><?php echo $c['subject']; ?></td>
		<td><?php echo $c['quest']; ?></td>
		<td><?php echo $c['answer']; ?></td>
		<td><?php echo $batch['batch_name']; ?></td>
		<td><?php echo $course['title']; ?></td>
		
		<td>
            
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('help/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>

