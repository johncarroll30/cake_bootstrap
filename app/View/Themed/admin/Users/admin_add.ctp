<div class="row">
	<div class="col-lg-12">
		<?php echo $this->element('nav_users_groups'); ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-4">
		<h3>New User</h3>
		<hr />

		<?php echo $this->Form->create('User', array(
			'role'=>'form',
			'inputDefaults' => array(
				'label' => false,
				'div' => false
				)
			)
		); 
		?>
		<!-- fake fields are a workaround for chrome autofill getting the wrong fields -->
		<input style="display:none" type="text" name="fakeusernameremembered"/>
		<input style="display:none" type="password" name="fakepasswordremembered"/>

		<div class="form-group">
			<label>Username</label>
			<?php echo $this->Form->input('username', array('class'=>'form-control', 'placeholder' => 'user@email.com')); ?>
		</div>
		<div class="form-group">
			<label>Password</label>
			<?php echo $this->Form->input('passwd', array('class'=>'form-control', 'type'=>'password')); ?>
		</div>
		<div class="form-group">
			<label>Password Repeat</label>
			<?php echo $this->Form->input('passwd_confirm', array('class'=>'form-control', 'type'=>'password')); ?>
		</div>
		<div class="form-group">
			<label>First Name</label>
			<?php echo $this->Form->input('firstname', array('class'=>'form-control')); ?>
		</div>
		<div class="form-group">
			<label>Last Name</label>
			<?php echo $this->Form->input('lastname', array('class'=>'form-control')); ?>
		</div>
		<div class="form-group">
			<label>Group</label>
			<?php echo $this->Form->input('group_id', array('class'=>'form-control')); ?>
		</div>
		<?php 
		echo $this->Form->input('Create user', array('type' => 'button', 'class' => 'btn btn-primary'));
		echo $this->Form->end(); 
		?>

		<br />

	</div>
</div>