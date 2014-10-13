<?php
echo $this->Html->script('/acl/js/jquery');
echo $this->Html->script('/acl/js/acl_plugin');

echo $this->element('design/header');
?>

<?php
echo $this->element('Aros/links');
?>

<?php
if(isset($users))
{
    
    echo '<p>';
    echo __d('acl', 'This page allows to manage users specific rights');
    echo '</p><br />';
    ?>
    <?php
    echo $this->Form->create('User');
    ?>
    <h4>Username</h4>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group input-group">
                <?php
                echo $this->Form->input($user_display_field, array('label' => false, 'div' => false, 'class' => 'form-control', 'required' => false));
                ?>
                <span class="input-group-btn">
                 <?php
                 echo $this->Form->end(array('label' =>__d('acl', 'Filter'), 'div' => false, 'class' => 'btn btn-primary'));
                 ?>
             </span>
         </div>
     </div>
 </div>
 <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-group"></i> Users</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                        <tr>
                         <?php
                         $column_count = 1;

                         $headers = array($this->Paginator->sort(__d('acl', 'user'), $user_display_field));

                       //  echo $this->Html->tableHeaders($headers);
                         ?>
                     </tr>
                   </thead>
                   <tbody>
                     <?php
                     foreach($users as $user)
                     {
                        echo '<tr>';
                        echo '  <td>' . $user[$user_model_name][$user_display_field] . '</td>';
                        $title = __d('acl', 'Manage user specific rights');

                        $link = '/admin/acl/aros/user_permissions/' . $user[$user_model_name][$user_pk_name];
                        if(Configure :: read('acl.gui.users_permissions.ajax') === true)
                        {
                         $link .= '/ajax:true';
                     }

                     echo '  <td>' . $this->Html->link($this->Html->image('/acl/img/design/lock.png'), $link, array('alt' => $title, 'title' => $title, 'escape' => false)) . '</td>';

                     echo '</tr>';
                 }
                 ?>
                

          </tbody>
      </table>
  </div>
</div>
</div>
<div class="col-lg-12">

    
    <?php
    echo $this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>  </p>
        
        <ul class="pagination pagination-lg">
            <?php
            echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
            echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>


    </div>
</div>
<?php
}
else
{
    ?>
    <h1><?php echo  __d('acl', $user_model_name) . ' : ' . $user[$user_model_name][$user_display_field]; ?></h1>
     <!-- 
    <h2><?php echo __d('acl', 'Role'); ?></h2>
    
   <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-group"></i> Users</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                        <tr>
                         <?php
                         foreach($roles as $role)
                         {
                             echo '<td>';

                             echo $role[$role_model_name][$role_display_field];
                             if($role[$role_model_name][$role_pk_name] == $user[$user_model_name][$role_fk_name])
                             {
                                 echo $this->Html->image('/acl/img/design/tick.png');
                             }
                             else
                             {
                              $title = __d('acl', 'Update the user role');
                              echo $this->Html->link($this->Html->image('/acl/img/design/tick_disabled.png'), array('plugin' => 'acl', 'controller' => 'aros', 'action' => 'update_user_role', 'user' => $user[$user_model_name][$user_pk_name], 'role' => $role[$role_model_name][$role_pk_name]), array('title' => $title, 'alt' => $title, 'escape' => false));
                          }

                          echo '</td>';
                      }
                      ?>
                    </tr>
                </thead>
            </table>
    </div>
</div>
</div>-->

<h2><?php echo __d('acl', 'Permissions'); ?></h2>

<?php
if($user_has_specific_permissions)
{
 echo '<div class="separator"></div>';
 echo $this->Html->image('/acl/img/design/bulb24.png') . __d('acl', 'This user has specific permissions');
 echo ' (';
     echo $this->Html->link($this->Html->image('/acl/img/design/cross2.png', array('style' => 'vertical-align:middle;')) . ' ' . __d('acl', 'Clear'), '/admin/acl/aros/clear_user_specific_permissions/' . $user[$user_model_name][$user_pk_name], array('confirm' => __d('acl', 'Are you sure you want to clear the permissions specific to this user ?'), 'escape' => false));
     echo ')';
echo '<div class="separator"></div>';
}
?>

  <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-group"></i> Users</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                    
	<tr>
     <?php

     $column_count = 1;

     $headers = array(__d('acl', 'action'), __d('acl', 'authorization'));

     echo $this->Html->tableHeaders($headers);
     ?>
 </tr>

            </thead>
        <tbody>

 <?php
 $previous_ctrl_name = '';

	//debug($actions);
 if(isset($actions['app']) && is_array($actions['app']))
 {
     foreach($actions['app'] as $controller_name => $ctrl_infos)
     {
      if($previous_ctrl_name != $controller_name)
      {
       $previous_ctrl_name = $controller_name;

       $color = (isset($color) && $color == 'color1') ? 'color2' : 'color1';
   }

   foreach($ctrl_infos as $ctrl_info)
   {
    			//debug($ctrl_info);

      echo '<tr class="' . $color . '">
      ';

      echo '<td>' . $controller_name . '->' . $ctrl_info['name'] . '</td>';

      echo '<td>';
      echo '<span id="right__' . $user[$user_model_name][$user_pk_name] . '_' . $controller_name . '_' . $ctrl_info['name'] . '">';

      if($ctrl_info['permissions'][$user[$user_model_name][$user_pk_name]] == 1)
      {
          $this->Js->buffer('register_user_toggle_right(true, "' . $this->Html->url('/') . '", "right__' . $user[$user_model_name][$user_pk_name] . '_' . $controller_name . '_' . $ctrl_info['name'] . '", "' . $user[$user_model_name][$user_pk_name] . '", "", "' . $controller_name . '", "' . $ctrl_info['name'] . '")');

          echo $this->Html->image('/acl/img/design/tick.png', array('class' => 'pointer'));
      }
      elseif($ctrl_info['permissions'][$user[$user_model_name][$user_pk_name]] == 0)
      {
          $this->Js->buffer('register_user_toggle_right(false, "' . $this->Html->url('/') . '", "right__' . $user[$user_model_name][$user_pk_name] . '_' . $controller_name . '_' . $ctrl_info['name'] . '", "' . $user[$user_model_name][$user_pk_name] . '", "", "' . $controller_name . '", "' . $ctrl_info['name'] . '")');

          echo $this->Html->image('/acl/img/design/cross.png', array('class' => 'pointer'));
      }
      elseif($ctrl_info['permissions'][$user[$user_model_name][$user_pk_name]] == -1)
      {
          echo $this->Html->image('/acl/img/design/important16.png');
      }

      echo '</span>';

      echo ' ';
      echo $this->Html->image('/acl/img/ajax/waiting16.gif', array('id' => 'right__' . $user[$user_model_name][$user_pk_name] . '_' . $controller_name . '_' . $ctrl_info['name'] . '_spinner', 'style' => 'display:none;'));

      echo '</td>';
      echo '</tr>
      ';
  }
}
}
?>
<?php
if(isset($actions['plugin']) && is_array($actions['plugin']))
{
 foreach($actions['plugin'] as $plugin_name => $plugin_ctrler_infos)
 {
     echo '<tr class="title"><td colspan="2">' . __d('acl', 'Plugin') . ' ' . $plugin_name . '</td></tr>
     ';

     foreach($plugin_ctrler_infos as $plugin_ctrler_name => $plugin_methods)
     {
         if($previous_ctrl_name != $plugin_ctrler_name)
         {
           $previous_ctrl_name = $plugin_ctrler_name;

           $color = (isset($color) && $color == 'color1') ? 'color2' : 'color1';
       }

       foreach($plugin_methods as $method)
       {
         echo '<tr class="' . $color . '">
         ';

         echo '<td>' . $plugin_ctrler_name . '->' . $method['name'] . '</td>';
    	            //debug($method['name']);

         echo '<td>';
         echo '<span id="right_' . $plugin_name . '_' . $user[$user_model_name][$user_pk_name] . '_' . $plugin_ctrler_name . '_' . $method['name'] . '">';

         if($method['permissions'][$user[$user_model_name][$user_pk_name]] == 1)
         {
            $this->Js->buffer('register_user_toggle_right(true, "' . $this->Html->url('/') . '", "right_' . $plugin_name . '_' . $user[$user_model_name][$user_pk_name] . '_' . $plugin_ctrler_name . '_' . $method['name'] . '", "' . $user[$user_model_name][$user_pk_name] . '", "' . $plugin_name . '", "' . $plugin_ctrler_name . '", "' . $method['name'] . '")');

            echo $this->Html->image('/acl/img/design/tick.png', array('class' => 'pointer'));
        }
        elseif($method['permissions'][$user[$user_model_name][$user_pk_name]] == 0)
        {
            $this->Js->buffer('register_user_toggle_right(false, "' . $this->Html->url('/') . '", "right_' . $plugin_name . '_' . $user[$user_model_name][$user_pk_name] . '_' . $plugin_ctrler_name . '_' . $method['name'] . '", "' . $user[$user_model_name][$user_pk_name] . '", "' . $plugin_name . '", "' . $plugin_ctrler_name . '", "' . $method['name'] . '")');

            echo $this->Html->image('/acl/img/design/cross.png', array('class' => 'pointer'));
        }
        elseif($method['permissions'][$user[$user_model_name][$user_pk_name]] == -1)
        {
          echo $this->Html->image('/acl/img/design/important16.png');
      }
      else
      {
          echo '?';
      }

      echo '</span>';

      echo ' ';
      echo $this->Html->image('/acl/img/ajax/waiting16.gif', array('id' => 'right_' . $plugin_name . '_' . $user[$user_model_name][$user_pk_name] . '_' . $plugin_ctrler_name . '_' . $method['name'] . '_spinner', 'style' => 'display:none;'));

      echo '</td>';
      echo '</tr>
      ';
  }
}
}
}
?>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php
echo $this->Html->image('/acl/img/design/tick.png') . ' ' . __d('acl', 'authorized');
echo '&nbsp;&nbsp;&nbsp;';
echo $this->Html->image('/acl/img/design/cross.png') . ' ' . __d('acl', 'blocked');
?>
<?php
}
?>
<?php
echo $this->element('design/footer');
?>