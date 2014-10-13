<?php
var_dump($_SESSION);
var_dump(Configure::read('Config.sys_COMPANY_NAME'));
$__root_dir = WWW_ROOT;
//Site root dir
define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT'].'/app/webroot');
//Images dir (root relative)
define('DIR_IMAGES', '/img/content/images'); //Z:/home/localhost/www/app/webroot/img 
//Files dir (root relative)
define('DIR_FILES', '/img/content/files'); //  '/app/webroot/images/files');
//var_dump(WWW_ROOT);
//Width and height of resized image
define('WIDTH_TO_LINK', 500);
define('HEIGHT_TO_LINK', 500);

//Additional attributes class and rel
define('CLASS_LINK', 'lightview');
define('REL_LINK', 'lightbox');

?>