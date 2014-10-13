<div class="blogPostCategories index">
	<div class="row">
		<div class="col-lg-12">

			<?php
			echo $this->element('actions');
			?>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Categories</h3>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped tablesorter">
						<thead>

							<tr>
								<th><?php echo $this->Paginator->sort('id');?></th>
			<!--<th><?php echo $this->Paginator->sort('parent_id');?></th>
			<th><?php echo $this->Paginator->sort('lft');?></th>
			<th><?php echo $this->Paginator->sort('rght');?></th>-->
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('slug');?></th>
			<th><?php echo $this->Paginator->sort('blog_post_count');?></th>
			<th><?php echo $this->Paginator->sort('under_blog_post_count');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 0;
		foreach ($blogPostCategories as $blogPostCategory):
			$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr<?php echo $class;?>>
		<td><?php echo h($blogPostCategory['BlogPostCategory']['id']); ?>&nbsp;</td>
		<!--<td><?php echo h($blogPostCategory['BlogPostCategory']['parent_id']); ?>&nbsp;</td>
		<td><?php echo h($blogPostCategory['BlogPostCategory']['lft']); ?>&nbsp;</td>
		<td><?php echo h($blogPostCategory['BlogPostCategory']['rght']); ?>&nbsp;</td>-->
		<td><?php echo h($blogPostCategory['BlogPostCategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($blogPostCategory['BlogPostCategory']['slug']); ?>&nbsp;</td>
		<td><?php echo h($blogPostCategory['BlogPostCategory']['blog_post_count']); ?>&nbsp;</td>
		<td><?php echo h($blogPostCategory['BlogPostCategory']['under_blog_post_count']); ?>&nbsp;</td>
		<td><?php echo h($blogPostCategory['BlogPostCategory']['created']); ?>&nbsp;</td>
		<td><?php echo h($blogPostCategory['BlogPostCategory']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $blogPostCategory['BlogPostCategory']['id'])); ?> 
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blogPostCategory['BlogPostCategory']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $blogPostCategory['BlogPostCategory']['id']), null, __('Are you sure you want to delete # %s?', $blogPostCategory['BlogPostCategory']['id'])); ?>
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