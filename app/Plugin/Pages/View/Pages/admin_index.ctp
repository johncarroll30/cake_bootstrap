<div class="row">
<div class="col-lg-12">
<p>
		<?php //echo $this->Form->button(__d('pages', 'New page', true), array('type' => 'button', 'onclick' => "window.location='{$this->Html->url(array('action' => 'add'))}'")); ?>

		<?php echo $this->Html->link(__('Add a new page'), array('action' => 'add'),array('class'=>'btn btn-primary')); ?>

	</p>
	<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><?php echo $page_title; ?> <?php echo $page_subtitle; ?></h3>
				</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped tablesorter">
			<thead>
				<tr>

	<?php //echo $this->element('admin/paginator_counter'); ?>

				<th nowrap="nowrap">
					<?php echo __d('pages', 'Title', true); ?>
				</th>
				<th nowrap="nowrap">
					<?php echo __d('pages', 'Slug', true); ?>
				</th>
				<th nowrap="nowrap">
					<?php echo __d('pages', 'Layout', true); ?>
				</th>
				<!--<th style="text-align: center;">
					<?php //echo $paginator->sort(__d('pages', 'Status', true), 'status'); ?>
				</th>-->
				<th style="text-align: center;">
					<?php echo __d('pages', 'Action', true); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php	
//debug($pages);
			foreach($pages as $key => $page): 

			?>
			<tr class="<?php echo ($key % 2) ? 'even' : 'odd'; ?>">
				<td>
					<?php echo $page['Page']['title']; ?>
				</td>
				<td>
					<?php $prefix = (isset($page['Page']['slug'])) ? $page['Page']['slug'] : $page['Page']['id']; ?>
					<?php $url = $this->Html->url('/page/'.$prefix); ?>
					<?php echo $this->Html->link($url, $url, array('target' => '_blank', 'title' => __d('pages', 'Click to the view this page', true))); ?>
				</td>
				<td>
					<?php echo $layout = (empty($page['Page']['layout']) ? "Default" : ucfirst($page['Page']['layout'])); ?>
				</td>
				<!--<td align="center" width="1%">
					<?php echo $this->Html->link(
						$page['Page']['status'] ? __d('pages', 'Disable', true) : __d('pages', 'Enable', true),
						array('action' => 'changestatus', $page['Page']['id']),
						array('title' => $page['Page']['status'] ? __d('pages', 'Enabled. Click to disable.' ,true) : __d('pages', 'Disable. Click to enable.' ,true), 'class' => $page['Page']['status'] ? 'link-enable' : 'link-disable')
					); ?>
				</td>-->
				<td align="center" width="9%">
					<?php echo $this->Html->link(
						__d('pages', 'Edit', true),
						array('action' => 'edit', $page['Page']['id']),
						array('escape' => false, 'title' => __d('pages', 'Click to edit', true), 'class' => 'link-edit')
					); ?> | 
					<?php echo $this->Html->link(
						__d('pages', 'Delete', true),
						array('action' => 'delete', $page['Page']['id']),
						array('title' => __d('pages', 'Click to delete', true), 'class' => 'link-delete'),
						sprintf(__d('pages', 'Are you sure you want to delete the page "% s"?' ,true), $page['Page']['title'])
					); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
		</table>
	</div>
</div>
	<?php echo $this->element('admin/paginator'); ?>
	<br /><br />
</div>
</div>