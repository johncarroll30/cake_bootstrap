<div class="row">
	<div class="col-lg-12">
		<?php echo $this->element('nav_users_groups'); ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-4">

		<h2><?php echo h($group['Group']['name']); ?> <?php 
		echo $this->Html->link(
			'Edit',
			array('controller' => 'groups', 'action' => 'edit', $group['Group']['id']),
			array('class' => 'btn btn-primary')
			);

			?></a></h2>
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped tablesorter">
					<tbody>
						
						<tr>
							<th>Name</th>
							<td><?php echo h($group['Group']['name']); ?></td>
						</tr>
						<tr>
							<th>Created</th>
							<td><?php echo h($group['Group']['created']); ?></td>
						</tr>
						<tr>
							<th>Modified</th>
							<td><?php echo h($group['Group']['modified']); ?></td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>

	</div>

</div>
