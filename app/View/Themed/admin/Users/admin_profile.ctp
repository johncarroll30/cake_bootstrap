<?php
echo $this->Form->create('User', array(
	'role'=>'form',
	'inputDefaults' => array(
		'label' => false,
		'div' => false
		)
	)
); 
?>
<div class="row">
	<div class="col-lg-4 col-sm-4 columns">
		<fieldset>
			<div class="form-group">
			<label>Name</label>
			<?php
			echo $this->Form->input('name', array('class'=>'form-control'));
			?>
			</div>
			<div class="form-group">
				<label>Login Email</label>
				<p>(Note: Changing your email address will change your login also)</p>
				<?php
				echo $this->Form->input('username', array('class'=>'form-control', 'placeholder' => 'user@email.com'));
				?>
			</div>
			<div class="form-group">
				<?php
				echo $this->Form->input('Save', array('type' => 'button', 'class' => 'btn btn-primary'));
				echo $this->Form->end(); 
				?>
			</div>
	</fieldset>
	</div>
</div>