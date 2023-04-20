<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	<th>S.No.</th>
	<th>Email</th>
		<th>First name</th>
		<th>Last name</th>
		<th>Last login</th>
		<th>Banned users</th>
		
		<th>Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($users as $c){
		if($c['role']=='teacher'){
	?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>
		<td><?php echo $c['email']; ?></td>
		<td><?php echo $c['first_name']; ?></td>
		<td><?php echo $c['last_name']; ?></td>
		<td><?php echo $c['last_login']; ?></td>
		<td><?php echo $c['banned_users']; ?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('users/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('users/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
		<?php } }?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
