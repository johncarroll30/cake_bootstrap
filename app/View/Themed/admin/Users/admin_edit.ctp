<div class="row">
	<div class="col-lg-12">
		<?php echo $this->element('nav_users_groups'); ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-4">
		<h3>Edit User</h3>

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
		<?php echo $this->Form->hidden('id'); ?>
		<div class="form-group">
			<label>Username</label>
			<?php
			echo $this->Form->input('username', array('class'=>'form-control', 'placeholder' => 'user@email.com')); 
			//echo $user['User']['username'];
			?>
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
		<div class="form-group">
			<label>Status</label>
			<?php echo $this->Form->input('status',array('type'=>'select','options'=>$statuses, 'values'=>$statuses, 'selected' => $user['User']['status'], 'class'=>'form-control')); ?>
		</div>

		<?php 
		echo $this->Form->input('Update user', array('type' => 'button', 'class' => 'btn btn-primary'));
		echo $this->Form->end(); 
		?>

		<br />

	</div>
</div>
<!--<div class="col-lg-12">
	<?php echo $this->element('admin/submenu_1'); ?>
</div>
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('role');
		echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
