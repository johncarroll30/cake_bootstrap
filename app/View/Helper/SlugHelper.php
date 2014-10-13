<?php


App::uses('AppHelper', 'View/Helper');

/**
 * Helper to convert a string to slug
 *
 */
class SlugHelper extends AppHelper {

	public $helpers = array('Html');

	public function convert($string) {
		$string = Inflector::slug($string, $replacement = '-');
		$string = strtolower($string);
		return $string;
	}
}