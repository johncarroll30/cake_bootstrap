<div class="blogSettings index">
	<!--<h2><?php echo __('Blog Settings');?></h2>-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Settings</h3>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped tablesorter">
						<thead>
							<tr>
								<th><?php echo $this->Paginator->sort('id');?></th>
								<th><?php echo $this->Paginator->sort('setting_text');?></th>
								<th><?php echo $this->Paginator->sort('value');?></th>
								<th><?php echo $this->Paginator->sort('modified');?></th>
								<th class="actions"><?php echo __('Actions');?></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 0;
							foreach ($blogSettings as $blogSetting):
								$class = null;
							if ($i++ % 2 == 0) {
								$class = ' class="altrow"';
							}
							?>
							<tr<?php echo $class;?>>
							<td><?php echo h($blogSetting['BlogSetting']['id']); ?>&nbsp;</td>
							<td><?php echo h($this->Text->truncate($blogSetting['BlogSetting']['setting_text'], 100)); ?>&nbsp;</td>
							<td><?php echo h($this->Text->truncate($blogSetting['BlogSetting']['value'], 100)); ?>&nbsp;</td>
							<td><?php echo $this->Time->nice($blogSetting['BlogSetting']['modified']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('action' => 'view', $blogSetting['BlogSetting']['id'])); ?> |
								<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blogSetting['BlogSetting']['id'])); ?>
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
		?>  </p>

		<ul class="pagination pagination-lg">
			<?php
			echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
			echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
			echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
			?>
		</ul>


	</div>
</div>



