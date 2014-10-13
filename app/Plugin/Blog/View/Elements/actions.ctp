
	<ul class="nav nav-pills">	
		<li><?php echo $this->Html->link(__('Posts'),  array('controller' => 'blog_posts', 'action' => 'index'), array('class'=>'btn btn-outline btn-primary')); ?></li>
		<li><?php echo $this->Html->link(__('Categories'), array('controller' => 'blog_post_categories', 'action' => 'index'), array('class'=>'btn btn-outline btn-primary')); ?></li>
		<li><?php echo $this->Html->link(__('Tags'), array('controller' => 'blog_post_tags', 'action' => 'index'), array('class'=>'btn btn-outline btn-primary')); ?></li>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('Add Post'), array('controller' => 'blog_posts', 'action' => 'add'), array('class'=>'btn btn-outline btn-success')); ?></li> 
		<li><?php echo $this->Html->link(__('Add Category'), array('controller' => 'blog_post_categories', 'action' => 'add'), array('class'=>'btn btn-outline btn-success')); ?></li>
		<li><?php echo $this->Html->link(__('Add Tag'), array('controller' => 'blog_post_tags', 'action' => 'add'), array('class'=>'btn btn-outline btn-success')); ?></li>
	</ul>
	<br />



