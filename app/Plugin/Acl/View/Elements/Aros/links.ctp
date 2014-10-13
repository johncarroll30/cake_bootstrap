<h1>ACL Permissions</h1>
<div id="aros_link" class="acl_links">
<?php
$selected = isset($selected) ? $selected : $this->params['action'];

$links = array();
$links[] = $this->Html->link(__d('acl', 'Build missing AROs'), '/admin/acl/aros/check', array('class' => ($selected == 'admin_check' )? 'btn btn-primary active' : 'btn btn-primary'));
/*$links[] = $this->Html->link(__d('acl', 'Users roles'), '/admin/acl/aros/users', array('class' => ($selected == 'admin_users' )? 'btn btn-primary active' : 'btn btn-primary'));*/

if(Configure :: read('acl.gui.roles_permissions.ajax') === true)
{
    $links[] = $this->Html->link(__d('acl', 'Role permissions'), '/admin/acl/aros/ajax_role_permissions', array('class' => ($selected == 'admin_role_permissions' || $selected == 'admin_ajax_role_permissions' )? 'btn btn-primary active' : 'btn btn-primary'));
}
else
{
    $links[] = $this->Html->link(__d('acl', 'Role permissions'), '/admin/acl/aros/role_permissions', array('class' => ($selected == 'admin_role_permissions' || $selected == 'admin_ajax_role_permissions' )? 'btn btn-primary active' : 'btn btn-primary'));
}
$links[] = $this->Html->link(__d('acl', 'User permissions'), '/admin/acl/aros/user_permissions', array('class' => ($selected == 'admin_user_permissions' )? 'btn btn-primary active' : 'btn btn-primary'));

echo $this->Html->nestedList($links, array('class' => 'nav nav-pills'));
?>
</div>
<br />