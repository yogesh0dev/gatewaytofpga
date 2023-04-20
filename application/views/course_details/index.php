<div>
	<table id="example" class="table">
		<thead class="table-light">

    <tr>
	<th>S.No.</th>
	<th>Course</th>
		<th>Description</th>
		<th>Who-Attend</th>
		<th>Requirements</th>
		<th>Skills</th>
		<th>Course Syllabus</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($course_details as $c){ 
		$cid=$c['course_id']; 
		$cid=$this->Courses_model->get_courses($cid);
	
	?> 
	
    <tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $cid['title']; ?></td>
		<td><?php echo $c['description']; ?></td>
		<td><?php echo $c['whoattend']; ?></td>
		<td><?php echo $c['prerequ']; ?></td>
		<td><?php echo $c['skills']; ?></td>
		<td><?php echo $c['course_syl']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('course_details/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('course_details/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	
	<?php } ?></tbody>
</table>
		</div>
