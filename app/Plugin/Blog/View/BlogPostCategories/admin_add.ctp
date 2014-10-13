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
			<h3>New Category</h3>
			<?php echo $this->Form->create('BlogPostCategory', array(
				'role'=>'form',
				'inputDefaults' => array(
					'label' => false,
					'div' => false
					)
				)
			); 
			?>
			<!--<div class="form-group">
				<label>Parent</label>
				<?php
				echo $this->Form->input('parent_id', array('class'=>'form-control', 'empty' => true));
				?>
			</div>-->
			<div class="form-group">
				<label>Name</label>
				<?php
				echo $this->Form->input('name', array('class'=>'form-control','placeholder' => 'your-slug-name', 'id'=>'title'));
				?>
			</div>
			<div class="form-group">
				<label>Slug</label>
				<?php
				echo $this->Form->input('slug', array('class'=>'form-control', 'id'=>'slug'));
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
				//echo $this->Form->input('rss_channel_title');
				//echo $this->Form->input('rss_channel_description');
			?>
			<?php 
			echo $this->Form->input('Create category', array('type' => 'button', 'class' => 'btn btn-primary'));
			echo $this->Form->end(); 
			?>

			<br />
		</div>

	</div>

</div>


