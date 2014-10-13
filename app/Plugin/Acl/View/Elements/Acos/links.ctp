<h1>ACL Actions</h1>
<div id="acos_link" class="acl_links">
<?php
$selected = isset($selected) ? $selected : $this->params['action'];

$links = array();
$links[] = $this->Html->link(__d('acl', 'Synchronize actions ACOs'), '/admin/acl/acos/synchronize', array(array('confirm' => __d('acl', 'are you sure ?')), 'class' => ($selected == 'admin_synchronize' ) ? 'btn btn-primary active' : 'btn btn-primary'));
$links[] = $this->Html->link(__d('acl', 'Clear actions ACOs'),       '/admin/acl/acos/empty_acos',  array(array('confirm' => __d('acl', 'are you sure ?')), 'class' => ($selected == 'admin_empty_acos' )  ? 'btn btn-primary active' : 'btn btn-primary'));
$links[] = $this->Html->link(__d('acl', 'Build actions ACOs'),       '/admin/acl/acos/build_acl',                                                     array('class' => ($selected == 'admin_build_acl' )   ? 'btn btn-primary active' : 'btn btn-primary'));
$links[] = $this->Html->link(__d('acl', 'Prune actions ACOs'),       '/admin/acl/acos/prune_acos',  array(array('confirm' => __d('acl', 'are you sure ?')), 'class' => ($selected == 'admin_prune_acos' )  ? 'btn btn-primary active' : 'btn btn-primary'));

echo $this->Html->nestedList($links, array('class' => 'nav nav-pills'));
?>
</div>
<br />