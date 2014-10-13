<div class="row">
	<div class="small-24 columns">
		<h2><?php echo $title_for_layout; ?></h2>
		<div class="content-block radius">
			<div class="page-content">
				<fieldset>
					<?php echo $this->Form->create('User', array(
						'role'=>'form',
						'inputDefaults' => array(
							'label' => false,
							'div' => false
							)
						)
					); 
					echo $this->Session->flash();
					if(@$reset==false) {
						?>
						<label for="username">Please enter the email address you signed up with</label>
						<?php echo $this->Form->input('username', array('class'=>'form-control', 'placeholder' => 'you@youremail.com', 'id' => 'username')); 
						echo $this->Form->input('Reset my password', array('type' => 'button', 'class' => 'button'));
						echo $this->Form->end(); 
					}
					?>
				</fieldset>
			</div>
		</div>
	</div>
</div>