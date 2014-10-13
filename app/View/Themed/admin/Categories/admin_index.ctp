<div class="row">
	<div class="col-lg-6">
		<div class="well">
		
		<?php 
		echo $this->Form->create('Category', array('action' => 'admin_create_category'));
		?>
		<div class="form-group">
			<label>Choose Pillar</label>
			<select name='category' class='form-control'>
				<option value="">+ New Root Pillar +</option>
				<?php echo $this->AdminTree->selectList($selectCategories); ?>
			</select>
		</div>
		<div class="form-group">
			<label>Pillar Name</label>
			<?php
			echo $this->Form->input('category_name', array('label'=>false,'type' => 'text', 'class' => 'form-control')); 
			?>
		</div>
		<div class="form-group">
			<label>Pillar (End user label)</label>
			<p></p>
			<?php
			echo $this->Form->input('category_label', array('label'=>false,'type' => 'text', 'class' => 'form-control')); 
			?>
		</div>
		<div class="form-group">
			<?php  
			echo $this->Form->input('Create pillar', array('label'=>false, 'type' => 'button', 'class' => 'btn btn-primary'));
			echo $this->Form->end(); 
			?>
		</div>
	</div>
<div class="panel panel-info">
	<div class="panel-heading">Pillars</div>
	<div class="panel-body">
		
		<?php echo $this->AdminTree->renderMenu($categories, true, false); ?>
	</div>
</div>
</div>
</div>


