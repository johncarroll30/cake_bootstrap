<div class="row">
	<div class="col-lg-12">
		<?php echo $this->element('admin/submenu_1'); ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-4">

		<h2><?php echo h($user['User']['firstname']); ?> <?php echo h($user['User']['lastname']); ?> <?php 
		echo $this->Html->link(
			'Edit',
			array('controller' => 'users', 'action' => 'edit', $user['User']['id']),
			array('class' => 'btn btn-primary')
			);

			?></a></h2>
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped tablesorter">
					<tbody>
						<tr>
							<th>Username</th>
							<td><?php echo h($user['User']['username']); ?></td>
						</tr>
						<tr>
							<th>Group</th>
							<td><?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?></td>
						</tr>
						<tr>
							<th>First name</th>
							<td><?php echo h($user['User']['firstname']); ?></td>
						</tr>
						<tr>
							<th>Last name</th>
							<td><?php echo h($user['User']['lastname']); ?></td>
						</tr>
						<tr>
							<th>Status</th>
							<td><?php echo h($user['User']['status']); ?></td>
						</tr>
						<tr>
							<th>Created</th>
							<td><?php echo h($user['User']['created']); ?></td>
						</tr>
					</tbody>
				</table>
				

			</div>
		</div>

	</div>