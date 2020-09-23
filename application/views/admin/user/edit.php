<div class="card-header">
	<h3><?php echo empty($user->id) ? 'Add new user' : 'Edit user ' . $user->name; ?></h3>
</div>
<div class="card-body"> 
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>

<table class="table">
	<tr>
		<td>Name</td>
		<td><?php echo form_input('name','','class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo form_input('email','','class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><?php echo form_password('password','','class="form-control"'); ?></td>
	</tr>
	<tr>
		<td>Confirm password</td>
		<td><?php echo form_password('password_confirm','','class="form-control"'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close(); ?>
</div>