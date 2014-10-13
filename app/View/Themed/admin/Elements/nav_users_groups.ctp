		<ul class="nav nav-pills">
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('class' => 'btn btn-outline btn-success')); ?></li>
			<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add'),array('class' => 'btn btn-outline btn-success')); ?> </li>
			<li>&nbsp;</li>
			<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('class' => 'btn btn-outline btn-primary')); ?></li>
			<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index'),array('class' => 'btn btn-outline btn-primary')); ?> </li>
		</ul>
		<br />
