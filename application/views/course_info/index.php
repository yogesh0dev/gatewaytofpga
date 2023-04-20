<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	<th>S.No.</th>
	<th>Course Name</th>
	<th>Course duration</th>
		<th>Batch size</th>
		<th>Weekends Timing</th>
		<th>Weekdays Timing</th>
		<th>Tools</th>
		<th>Training mode</th>
		<th>Certis</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($course_info as $c){ 
		$cid=$c['course_id']; 
		$cid=$this->Courses_model->get_courses($cid);
		?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $cid['title']; ?></td>
		<td><?php echo $c['course_duration']; ?></td>
		<td><?php echo $c['batch_size']; ?></td>
		<td><?php echo $c['class_time_end']; ?></td>
		<td><?php echo $c['class_time_days']; ?></td>
		<td><?php echo $c['tools']; ?></td>
		<td><?php echo $c['training_mode']; ?></td>
		<td><?php echo $c['certis']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('course_info/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('course_info/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
