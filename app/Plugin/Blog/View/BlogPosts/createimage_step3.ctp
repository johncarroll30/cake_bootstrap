<?php
if(isset($javascript)): 
      
        echo $javascript->link('jquery.imgareaselect-0.4.2.min.js'); 

endif; 

echo $form->create('BlogPost', array('action' => 'createimage_step3',"enctype" => "multipart/form-data"));     
        echo $form->input('id'); 
        echo $form->hidden('name'); 
        echo $cropimage->createForm($uploaded["imagePath"], 151, 151); 
        echo $form->submit('Done', array("id"=>"save_thumb")); 
echo $form->end();