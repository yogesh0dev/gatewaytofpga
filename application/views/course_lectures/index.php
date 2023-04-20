<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
		<th>S.No.</th>
		<th>Course</th>
		<th>Student</th>
		<th>Batch</th>
		<th>Schedule Of Lectures</th>
		<th>Trainer</th>
		<th>Attendance</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($course_lectures as $c){ ?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $c['course_id']; ?></td>
		<td><?php echo $c['studentid']; ?></td>
		<td><?php echo $c['batch_id']; ?></td>
		<td><?php echo $c['datetimeof']; ?></td>
		<td><?php echo $c['tid']; ?></td>
		<td><?php echo $c['attendance']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('course_lectures/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('course_lectures/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
