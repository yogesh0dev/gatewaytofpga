<div>
	<table id="example" class="table">
		<thead class="table-light">
    <tr>
		<th>Title</th>
		<th>Slug</th>
		<th>Description</th>
		<th>Image</th>
		<th>Publish Date</th>
		<th>Categ</th>
		<th>Page Type</th>
		
		<th>Actions</th>
    </tr>
	</thead>
	<tbody>
	<?php foreach($blogs as $c){ ?>
    <tr>
		<td><?php echo $c['title']; ?></td>
		<td><?php echo $c['slug']; ?></td>
		<td><?php echo substr($c['description'],0,150); ?></td>
		<td><img src="<?=site_url();?>/uploads/blogs/<?=$c['image']; ?>" width="100px"/></td>
		<td><?php echo $c['bdate']; ?></td>
		<td><?php echo $c['categ']; ?></td>
		<td><?php $t=$c['types'];
				if($t=='1'){
					echo 'Blog';
				}elseif($t=='2'){
					echo 'Page';
				}
		?></td>
		
		<td>
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('blogs/edit/'.$c['id']); ?>" title="Edit" class="text-warning" ><i class="bi bi-pencil-fill"></i></a> | 
            <a data-bs-toggle="tooltip" data-bs-placement="bottom" href="<?php echo site_url('blogs/remove/'.$c['id']); ?>" title="Delete" class="text-danger" ><i class="bi bi-trash-fill"></i></a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
</table>
</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
