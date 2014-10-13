<div class="row">
	<div class="col-lg-8">

	<p>
		<?php echo __d('pages', 'Use the form below to create a new page.') ?>
	</p>


	<?php echo $this->Form->create('Page', array('url' => $this->here, 'inputDefaults' => array('label' => false)));?>
	<?php echo $this->Form->input('id'); ?>
		<fieldset>
			<div class="well">

						<div class="form-group">
							<label>Title</label>
							<?php echo $this->Form->input('title', array('size' => 50, 'class'=>'form-control')); ?>
						</div>

						<div class="form-group">
							<label>Slug</label>
							<?php echo $this->Form->input('slug', array('size' => 50, 'class'=>'form-control')); ?>
						</div>
						
						<div class="form-group">
							<label>Layout</label>
							<?php echo $this->Form->input('layout', array('empty' => __d('pages', 'Default', true), 'class'=>'form-control')); ?>
						</div>
						
						<div class="form-group">
							<label>Content</label>
							<?php echo $this->Form->input('content', array('type' => 'textarea', 'rows'=>'20' , 'class'=>'form-control', 'placeholder' => '')); ?>
						</div>
						
						<div class="form-group">

							<label>
								<br />Short Description</label>
							<?php echo $this->Form->input('meta_description', array('type' => 'textarea', 'class'=>'form-control')); ?>
						</div>
			

			</div>
		</fieldset>
		<?php
		echo $this->Form->input('Save page', array('type' => 'button', 'class' => 'btn btn-primary'));
		echo $this->Form->end(); 
		?>


</div>
</div>