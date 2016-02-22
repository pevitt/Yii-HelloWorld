<h1>View Details of Country</h1>
<table class="table">
	<tr>
		<td><strong>id</strong></td>
		<td><strong>Country</strong></td>
		<td><strong>Status</strong></td>
	</tr>
	<tr>
		<td><?php echo $model->id; ?></td>
		<td><?php echo $model->name; ?></td>
		<td><span class="label label-<?php echo $model->status==1?"info":"warning"; ?>"</span><?php echo $model->status==1?"Enabled":"Disabled"; ?></td>
	</tr>
</table>