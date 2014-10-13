<?php
if(isset($javascript)): 
      
        echo $javascript->link('jquery.imgareaselect-0.4.2.min.js'); 

endif; 

$this->JqImgcrop->cropImage(151, 
	$this->data['BlogPost']['x1'], 
	$this->data['BlogPost']['y1'], 
	$this->data['BlogPost']['x2'], 
	$this->data['BlogPost']['y2'], 
	$this->data['BlogPost']['w'], 
	$this->data['BlogPost']['h'], 
	$this->data['BlogPost']['imagePath'], 
	$this->data['BlogPost']['imagePath']) 