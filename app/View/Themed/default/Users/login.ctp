<div class="row">
	<div class="small-24 columns">
		<div class="content-block radius">
			<div class="page-content">
				<h2><?php echo $title_for_layout; ?></h2>
				<fieldset>
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
					<label for="email">Email</label>
					<?php echo $this->Form->input('username', array('class'=>'form-control', 'placeholder' => 'you@youremail.com', 'id'=>'email')); ?>

					<label for="password">Password</label>
					<?php

					echo $this->Form->input('password', array('class'=>'form-control', 'type'=>'password', 'id'=>'password')); 
					echo $this->Form->input('Login', array('type' => 'button', 'class' => 'button'));
					echo $this->Form->end(); 
					?>
					<p><a href="/login/forgotten">I've forgotten my login details</a></p>
				</fieldset>
			</div>
		</div>
	</div>
</div>