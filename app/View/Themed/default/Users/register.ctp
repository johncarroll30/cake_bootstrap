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
	<div class="small-12 columns">
		<?php echo $this->Session->flash(); ?>
	</div>
</div>
<div class="row">
	<div class="small-12 columns">
		<div class="panel">
			<?php if(!$registered) : 
 			echo $this->element('register/'.$type."-form"); 
			else : ?>
			<h1>Thank you for registering</h1>
			<?php endif; ?>
		</div>
	</div>
</div>