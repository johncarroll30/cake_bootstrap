<?php
class TinyMceHelper extends AppHelper {
/**
 * Included helpers.
 *
 * @var array
 */
	 var $helpers = array('Html', 'Js', 'Form');

/**
 * Default options
 *
 * @var array
 */
	 var $_default_options =  array(
		"theme" => "advanced",
		"plugins" => "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
		"theme_advanced_buttons1" => "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		"theme_advanced_buttons2" => "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		"theme_advanced_buttons3" => "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		"theme_advanced_buttons4" => "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		"theme_advanced_toolbar_location" => "top",
		"theme_advanced_toolbar_align" => "left",
		"theme_advanced_statusbar_location" => "bottom",
		"theme_advanced_resizing" => true,
		"extended_valid_elements" => "style"
		);

/**
 * Adds the tiny_mce.js file and constructs the options
 *
 * @param string $fieldName Name of a field, like this "Modelname.fieldname", "Modelname/fieldname" is deprecated
 * @param array $tinyOptions Array of TinyMCE attributes for this textarea
 * @return string JavaScript code to initialise the TinyMCE area
 */
	function _build($fieldName, $tinyOptions = array()) {
		$lang = Configure::read('Config.language');
		//$tinyOptions['language'] = ife(strlen($lang) === 2, $lang, ClassRegistry::init('L10n', 'Core')->map($lang));
		$prefix = !empty($this->params['plugin']) ? $this->params['plugin'].'/' : '';
		$this->Html->script("/{$prefix}js/tiny_mce/tiny_mce.js", array('inline' => false, 'once' => true));
		$tinyOptions['mode'] = 'textareas';
		$tinyOptions['elements'] = $this->_name($fieldName);
		return $this->Html->scriptBlock('tinyMCE.init(' . $this->Js->object($tinyOptions) . ');');
	 }

/**
 * Creates a TinyMCE textarea.
 *
 * @param string $fieldName Name of a field, like this "Modelname.fieldname"
 * @param array $options Array of HTML attributes.
 * @param array $tinyOptions Array of TinyMCE attributes for this textarea
 * @return string An HTML textarea element with TinyMCE
 */
	 function input($fieldName, $options = array(), $tinyOptions = array()) {
		  $tinyOptions = (count($tinyOptions) > 0) ? am($this->_default_options, $tinyOptions) : $this->_default_options;
		  $options['type'] = 'textarea';
		  return $this->Form->input($fieldName, $options) . $this->_build($fieldName, $tinyOptions);
	 }
}
?>