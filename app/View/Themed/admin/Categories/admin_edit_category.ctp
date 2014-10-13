<div class="row">
	<div class="col-lg-6">

		<h3>Edit Pillar</h3>
		<div class="well">
			<?php echo $this->Form->create('Category', array(
			'role'=>'form',
			'inputDefaults' => array(
				'label' => false,
				'div' => false
				)
			)
		); 
		?>
			<fieldset>
				<div class="form-group">
					<label>Pillar Name</label>
					<?php
					echo $this->Form->input('name', array('value'=>$category_name,'class'=>'form-control'));
					?>
				</div>
				<div class="form-group">
					<label>Pillar (End user label)</label>
					<?php
					echo $this->Form->input('label', array('value'=>$category_label,'class'=>'form-control'));
					?>
				</div>
			</fieldset>
			<?php 
			echo $this->Form->input('Update Pillar', array('type' => 'button', 'class' => 'btn btn-primary'));
			echo $this->Form->end(); 
			?>
		</div>
	</div>
</div>
