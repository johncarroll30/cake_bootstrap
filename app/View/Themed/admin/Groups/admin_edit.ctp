<div class="row">
	<div class="col-lg-12">
			<?php echo $this->element('nav_users_groups'); ?>
	</div>
</div>

<div class="row">
	<div class="col-lg-4">
		<h3>Edit Group</h3>
		<?php echo $this->Form->create('Group', array(
			'role'=>'form',
			'inputDefaults' => array(
				'label' => false,
				'div' => false
				)
			)
		); 
		?>

		<?php echo $this->Form->hidden('id'); ?>
		<div class="form-group">
			<label>Group name</label>
			<?php
			echo $this->Form->input('name', array('class'=>'form-control', 'placeholder' => 'group name')); 
			//echo $user['User']['username'];
			?>
		</div>
		<?php 
		echo $this->Form->input('Update group', array('type' => 'button', 'class' => 'btn btn-primary'));
		echo $this->Form->end(); 
		?>

    </div>
</div>
<br />
<!--<div class="groups form">
<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Edit Group'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Group.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Group.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
