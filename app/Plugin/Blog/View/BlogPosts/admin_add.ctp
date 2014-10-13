<div class="blogPostTags index">
	<div class="row">
		<div class="col-lg-6">
			<?php
			echo $this->element('actions');
			?>
			<h3>New Blog Post</h3>


			<?php echo $this->Form->create('BlogPost', array(
				'enctype'=>'multipart/form-data',
				'role'=>'form',
				'inputDefaults' => array(
					'label' => false,
					'div' => false
					)
				)
			); 
			?>


			<div class="form-group">
				<label>Title</label>
				<?php echo $this->Form->input('title', array('class'=>'form-control', 'placeholder' => '', 'id'=>'title')); ?>
			</div>
			<div class="form-group">
				<label>Slug</label>
				<?php echo $this->Form->input('slug', array('class'=>'form-control', 'placeholder' => 'your-slug-name', 'id'=>'slug')); ?>
			</div>
			<div class="form-group">
				<label>Brief Summary</label>
				<?php echo $this->Form->input('summary', array('class'=>'form-control', 'placeholder' => '')); ?>
			</div>
			<div class="form-group">
				<label>Content</label>
				<?php echo $this->Form->input('body', array('type' => 'textarea', 'rows'=>'25' , 'class'=>'form-control editable', 'placeholder' => '')); ?>

			</div>
			<div class="form-group">
				<label><br />Image</label>
				<?php echo $this->Form->input('image', array('type' => 'file')); ?>
			</div>
			<div class="form-group">
				<p>&nbsp;</p>
				<label>Published</label>
				<?php echo $this->Form->input('published', array('class'=>'checkbox', 'placeholder' => '', 'checked' => true, 'type' => 'checkbox')); ?>
			</div>
			<div class="form-group">
				<label>Sticky</label>
				<?php echo $this->Form->input('sticky', array('class'=>'checkbox', 'placeholder' => '', 'type' => 'checkbox')); ?>
			</div>
			
			<div class="form-group">
				<label>Meta Title</label>
				<?php echo $this->Form->input('meta_title', array('class'=>'form-control', 'placeholder' => '')); ?>
			</div>
			<div class="form-group">
				<label>Meta Description</label>
				<?php echo $this->Form->input('meta_description', array('class'=>'form-control', 'placeholder' => '')); ?>
			</div>
			<div class="form-group">
				<label>Meta Keywords</label>
				<?php echo $this->Form->input('meta_keywords', array('class'=>'form-control', 'placeholder' => '')); ?>
			</div>
			<div class="form-group">
				<label>Blog Post Category</label>
				<?php echo $this->Form->input('BlogPostCategory', array('class'=>'form-control', 'type' => 'select')); ?>
			</div>
			<div class="form-group">
				<label>Blog Post Tag</label>
				<?php echo $this->Form->input('BlogPostTag', array('class'=>'form-control', 'type' => 'select')); ?>
			</div>
			
		</fieldset>
		<?php 
		echo $this->Form->input('Create post', array('type' => 'button', 'class' => 'btn btn-primary'));
		echo $this->Form->end(); 
		?>
	</div>
