<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
		<th>S.No.</th>
		<th>Course</th>
		<th>Batch</th>
		<th>Student</th>
		<th>Teacher</th>
		<th>Cert issue</th>
		<th>Down link</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($certifications as $c){ 
			$cid=$c['course_id']; 
			$cid=$this->Courses_model->get_courses($cid);
			$bid=$this->Course_schedule_model->get_course_schedule($c['batch_id']);
			$sid= $c['sid']; 
			$sid=$this->Users_model->get_users($sid);
			$tid= $c['tid']; 
			$tid=$this->Users_model->get_users($tid);
	
	?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $cid['title']; ?></td>
		<td><?php echo $bid['batch_name']; ?></td>
		<td><?php echo $sid['first_name'].' '.$sid['last_name']; ?></td>
		<td><?php echo $tid['first_name'].' '.$tid['last_name']; ?></td>

		<td><?php echo $c['cert_issue']; ?></td>
		<td><?php echo $c['down_link']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('certifications/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('certifications/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
