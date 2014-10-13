<div class="row">
	<div class="col-lg-12">
			<?php echo $this->element('nav_users_groups'); ?>
	</div>
</div>
<div class="row">
<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-group"></i> Groups</h3>
		</div>

		<div class="table-responsive">

			<table class="table table-bordered table-hover table-striped tablesorter">
				<thead>
					<tr>
						<th>ID <i class="fa fa-sort"></i></th>
						<th>Name <i class="fa fa-sort"></i></th>
						<th>Created <i class="fa fa-sort"></i></th>
						<th>Modified <i class="fa fa-sort"></i></th>
						<th>Actions <i class="fa fa-sort"></i></th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($groups as $group): ?>
					<tr>
						<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
						<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
						<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
						<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
						<td class="actions">

							<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id'])); ?> | 
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?> |
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>


			</tbody>
		</table>
	</div>
</div>

