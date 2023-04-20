<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	<th>S.No.</th>
	<th>Course id</th>
		<th>Title</th>
		<th>Description</th>
		<th>Docsa</th>
		<th>Docsb</th>
		<th>Docsc</th>
		<th>Docsd</th>
		<th>Docse</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($tests as $c){ ?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $c['course_id']; ?></td>
		<td><?php echo $c['title']; ?></td>
		<td><?php echo $c['description']; ?></td>
		<td><?php echo $c['docsa']; ?></td>
		<td><?php echo $c['docsb']; ?></td>
		<td><?php echo $c['docsc']; ?></td>
		<td><?php echo $c['docsd']; ?></td>
		<td><?php echo $c['docse']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('tests/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('tests/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
