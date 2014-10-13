<p>Fields marked with an asterix * are required</p>
<?php 
echo $this->Form->input('text', array('name'=>'fakeusernameremembered','style'=>'display:none'));
echo $this->Form->input('password', array('name'=>'fakepasswordremembered','style'=>'display:none'));
?>
<label for="name">Name *</label>
<?php
echo $this->Form->input('name', array('id'=>'name'));
?>
<label for="email">Email *</label>
<?php
echo $this->Form->input('username', array('id'=>'email', 'placeholder' => 'user@email.com'));
?>
<label>Password *</label>
<?php
echo $this->Form->input('passwd', array('type'=>'password')); 
?>
<label>Password Repeat *</label>
<?php
echo $this->Form->input('passwd_confirm', array('type'=>'password')); 
?>
<label for="marketing">
	<?php
	echo $this->Form->checkbox('marketing', array('id'=>'marketing', 'checked')); ?> Subscribe to newsletter</label>
	<?php
	echo $this->Form->input('Register', array('type' => 'button', 'class' => 'btn btn-primary'));
	echo $this->Form->end(); 
?>
