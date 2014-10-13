<div class="blogPostCategories form">
	<div class="row">
		<div class="col-lg-12">
			<?php
			echo $this->element('actions');
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<h3>New Tag</h3>
			<?php echo $this->Form->create('BlogPostTag', array(
				'role'=>'form',
				'inputDefaults' => array(
					'label' => false,
					'div' => false
					)
				)
			); 
			?>
			<div class="form-group">
				<label>Tag Name</label>
				<?php
				echo $this->Form->input('name', array('class'=>'form-control','id'=>'title'));
				?>
			</div>
			<div class="form-group">
				<label>Slug</label>
				<?php
				echo $this->Form->input('slug', array('class'=>'form-control','placeholder' => 'your-slug-name', 'id'=>'slug'));
				?>
			</div>
			<div class="form-group">
				<label>Meta Title</label>
				<?php
				echo $this->Form->input('meta_title', array('class'=>'form-control'));
				?>
			</div>
			<div class="form-group">
				<label>Meta Description</label>
				<?php
				echo $this->Form->input('meta_description', array('class'=>'form-control'));
				?>
			</div>
			<div class="form-group">
				<label>Meta Keywords</label>
				<?php
				echo $this->Form->input('meta_keywords', array('class'=>'form-control'));
				?>
			</div>

			<?php
               // echo $this->Form->input('rss_channel_title');
               // echo $this->Form->input('rss_channel_description');
			?>


			<?php 
			echo $this->Form->input('Create Tag', array('type' => 'button', 'class' => 'btn btn-primary'));
			echo $this->Form->end(); 
			?>

			<br />
		</div>
	</div>
</div>
