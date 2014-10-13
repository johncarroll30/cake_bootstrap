<?php
/* /app/View/Helper/LinkHelper.php */
App::uses('AppHelper', 'View/Helper');

class AdminTreeHelper extends AppHelper {
	public $helpers = array('Html','Form');
    public function renderMenu($array,$root=true,$hasChildren=false) { 
         if (count($array)) { 
            echo "\n<ul>\n"; 
            foreach ($array as $vals) { 
                echo "<li id=\"".$vals['Category']['id']."\"><a href='/categories/".$vals['Category']['tree']."' target='_blank'>".$vals['Category']['name']."</a>"; 
                echo '<!--<a href="categories/moveup/'.$vals['Category']['id'].'/1" title="Move up"><i class="fa fa-arrow-up"></i></a> 
                <a href="categories/movedown/'.$vals['Category']['id'].'/1" title="Move down"><i class="fa fa-arrow-down"></i></a>-->
                &nbsp;&nbsp;
                <a href="categories/edit_category/'.$vals['Category']['id'].'" title="Edit"><i class="fa fa-pencil"></i></a>

                '.$this->Form->postLink(__('<i class="fa fa-times"></i>'), 
                    array('action' => 'delete_category', $vals['Category']['id']), 
                    array('escape' => false), __('Are you sure you want to delete Pillar #%s?', $vals['Category']['id'])).'
                </li>';  
                if (count($vals['children'])) { 
                    $this->renderMenu($vals['children']); 
                } 
                ?>
                <?php
               
            } 
            echo "</ul>\n"; 
        } 
    }

    public function selectList($array) { 
         if (count($array)) { 
            foreach ($array as $key => $val) { 
                echo "<option value=".$key.">"; 
                echo $val;
                echo '</option>';  
            } 
        } 
    }
}