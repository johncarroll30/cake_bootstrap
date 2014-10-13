<div class="row">
	<div class="col-lg-12">
		<?php echo $this->element('nav_users_groups'); ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-4">
		<div class="form-group input-group">
			<?php echo $this->Form->create('User', array(
				'role'=>'form',
				'inputDefaults' => array(
					'label' => false,
					'div' => false
					)
				)
			); 
			?>
			<span class="input-group-btn">
				<?php 
				echo $this->Form->input('search', array('class'=>'form-control')); 
				echo $this->Form->input('Search', array('type' => 'button', 'class' => 'btn btn-primary'));
				echo $this->Form->end(); 
				?>
			</span>
		</div>
		<?php 
		echo $this->Form->end(); 
		?>
	</div>
</div>
<div class="row">
<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-group"></i> Users</h3>
		</div>

		<div class="table-responsive">

			<table class="table table-bordered table-hover table-striped tablesorter">
				<thead>
					<tr>
						<th>ID <i class="fa fa-sort"></i></th>
						<th>Username <i class="fa fa-sort"></i></th>
						<th>Name <i class="fa fa-sort"></i></th>
						<th>Status <i class="fa fa-sort"></i></th>
						<th>Created <i class="fa fa-sort"></i></th>
						<th>Group <i class="fa fa-sort"></i></th>
						<th>Actions <i class="fa fa-sort"></i></th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($users as $user): ?>
					<tr>
						<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['status']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
						<td><?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?></td>
						<td class="actions">

							<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?> | 
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?> | 
							<?php 
							$active_status = ($user['User']['active'] == 1 ? 0 : 1);
							$active_text = ($user['User']['active'] == 1 ? "Disable" : "Enable");
							echo $this->Form->postLink(__( $active_text ), array('action' => 'change_status', $user['User']['id'], $active_status), null, __('Are you sure you want to disable # %s?', $user['User']['id'])); 
							?> | 
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>


			</tbody>
		</table>
	</div>
</div>
</div>



<div class="col-lg-12">

	
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	</p>
		
		<ul class="pagination pagination-lg">
			<?php
			echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
			echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
			echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
			?>
		</ul>


	</div>
</div>

	
