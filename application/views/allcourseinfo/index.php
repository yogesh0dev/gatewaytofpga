<table border="1" width="100%">
    <tr>
	<th>S.No.</th>
	<th>Categ</th>
		<th>Title</th>
		<th>Price</th>
		<th>Duration</th>
		<th>Img</th>
		<th>Tutorid</th>
		<th>Module count</th>
		<th>Course id</th>
		<th>Description</th>
		<th>Whoattend</th>
		<th>Prerequ</th>
		<th>Skills</th>
		<th>Course duration</th>
		<th>Batch size</th>
		<th>Class time end</th>
		<th>Class time days</th>
		<th>Tools</th>
		<th>Training mode</th>
		<th>Certis</th>
		
		<th>Actions</th>
    </tr>
	<?php $sno=0;
		foreach($allcourseinfo as $c){ ?>
    <tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $c['categ']; ?></td>
		<td><?php echo $c['title']; ?></td>
		<td><?php echo $c['price']; ?></td>
		<td><?php echo $c['duration']; ?></td>
		<td><?php echo $c['img']; ?></td>
		<td><?php echo $c['tutorid']; ?></td>
		<td><?php echo $c['module_count']; ?></td>
		<td><?php echo $c['course_id']; ?></td>
		<td><?php echo $c['description']; ?></td>
		<td><?php echo $c['whoattend']; ?></td>
		<td><?php echo $c['prerequ']; ?></td>
		<td><?php echo $c['skills']; ?></td>
		<td><?php echo $c['course_duration']; ?></td>
		<td><?php echo $c['batch_size']; ?></td>
		<td><?php echo $c['class_time_end']; ?></td>
		<td><?php echo $c['class_time_days']; ?></td>
		<td><?php echo $c['tools']; ?></td>
		<td><?php echo $c['training_mode']; ?></td>
		<td><?php echo $c['certis']; ?></td>
		
		<td>
            <a href="<?php echo site_url('allcourseinfo/edit/'.$c['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('allcourseinfo/remove/'.$c['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
