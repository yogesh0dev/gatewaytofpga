<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
	<th>S.No.</th>
		<th>Status</th>
		<th>Banned users</th>
	<th>Email</th>
		<th>First name</th>
		<th>Message</th>
		<th>Degree</th>
		<!--<th>College</th>
		<th>Designation</th>-->
		<th>Last login</th>
		<th width="15%">Actions</th>
    </tr>
	</thead><tbody>
	<?php $sno=0;
		foreach($users as $c){ 
		if($c['role']=='student'){
		?>
	
	<tr>
		<td><?php echo $sno=$sno+1;?></td>

		<td><?php $rty=$c['status']; 
				if($rty=='Pending'){echo '<span class="badge bg-light-warning text-warning w-100">Pending</span>';}elseif($rty=='Approved'){echo '<span class="badge bg-light-success text-success w-100">Approved</span>';}
			?></td> 
			
		<td><?php $rty=$c['banned_users']; 
				if($rty=='Banned'){echo '<span class="badge bg-light-warning text-warning w-100">Banned</span>';}elseif($rty=='UnBan'){echo '<span class="badge bg-light-success text-success w-100">UnBan</span>';}
			?></td> 
		<td><?php echo $c['email']; ?></td>
		<td><?php echo $c['first_name']; ?> <?php echo $c['last_name']; ?></td>
		<td><?php echo $c['message']; ?></td>
		<td><?php echo $c['degree']; ?></td>
		<!--
		<td><?php echo $c['college']; ?></td>
		<td><?php echo $c['designation']; ?></td>-->
		<td><?php echo $c['last_login']; ?></td>
		 


 
		<td>
		   
			<div class="btn-group">
			  <a type="button" href="<?php echo site_url('users/edit/'.$c['id']); ?>" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
			  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="<?php echo site_url('users/status/p/'.$c['id']); ?>">Pending</a>
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('users/status/a/'.$c['id']); ?>">Approved</a>
				</li>
				<li>
				  <hr class="dropdown-divider">
				</li>
				<li><a class="dropdown-item" href="<?php echo site_url('users/status/u/'.$c['id']); ?>">Unban</a>
				</li>
				
				<li><a class="dropdown-item" href="<?php echo site_url('users/status/b/'.$c['id']); ?>">Banned</a>
				</li>
			  </ul>
			</div>
		
        
        </td>
    </tr>
		<?php } }?></tbody>
</table>
		</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
