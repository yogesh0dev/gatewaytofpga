<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
		<th width="25%">Course Name</th>
		<th width="25%">Batch Name</th>
		<th width="15%">Title</th>
		<th width="35%">Description</th>
		<th width="25%">Documents</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php

	foreach($assignments as $c){
		$cs = $this->Courses_model->get_courses_id($c['course_id']);
		$bs = $this->Course_schedule_model->get_course_schedule($c['batch_id']);
		?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?=$cs['title'];?></td>
		<td><?=$bs['batch_name'];?></td>
		<td><?php echo $c['title']; ?></td>
		<td><?php echo $c['description']; ?></td>
		<td><?php $ty= json_decode($c['docsa']);
			$doc=0;
			if(!empty($ty)){
			foreach($ty as $d){
				$doc=$doc+1;
echo '<a class="server_name_file_name" href="#" 
 id="'.site_url().'uploads/assignments/'.$d.'"> Document'.$doc.'</a><br>';
			}}
		?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" 
			href="<?php echo site_url('assignments/edit/'.$c['id']); ?>" 
			title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | <a data-bs-toggle="tooltip" data-bs-placement="bottom"
			href="<?php echo site_url('assignments/remove/'.$c['id']); ?>" 
			title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
			
			
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
