<?php
class Page extends PagesAppModel {

/**
 * Name of the model.
 *
 * @var string
 * @access public
 * @link http://book.cakephp.org/view/444/name
 */
	var $name = 'Page';

/**
 * List of behaviors to load when the model object is initialized. Settings can be
 * passed to behaviors by using the behavior name as index. Eg:
 *
 * var $actsAs = array('Translate', 'MyBehavior' => array('setting1' => 'value1'))
 *
 * @var array
 * @access public
 * @link http://book.cakephp.org/view/90/Using-Behaviors
 */
	var $actsAs = array(
			'Seo.FrendlyUrl', // comment this row if you dont need use friendly urls or dont have SEO plugin
			'Translate' => array(
				'title',
				'meta_keyword',
				'meta_description',
				'content'
			)
	);

/**
 * Name of model for translations
 *
 * @var string
 * @access public
 */
	var $translateModel = 'Pages.PageI18n';

/**
 * List of validation rules. Append entries for validation as ('field_name' => '/^perl_compat_regexp$/')
 * that have to match with preg_match(). Use these rules with Model::validate()
 *
 * @var array
 * @access public
 * @link http://book.cakephp.org/view/443/validate
 * @link http://book.cakephp.org/view/125/Data-Validation
 */
	var $validate = array(
		'title' => array(
			'invalid_title' => array(
				'rule'=> array('notEmpty')
			)
		)
	 );

/**
 * Returns an array of fields that have failed validation. On the current model.
 *
 * @param string $options An optional array of custom options to be made available in the beforeValidate callback
 * @return array Array of invalid fields
 * @see Model::validates()
 * @access public
 * @link http://book.cakephp.org/view/410/Validating-Data-from-the-Controller
 */
	function invalidFields($options = array()) {
		parent::invalidFields($options);
		if (is_array($this->validationErrors) && count($this->validationErrors) > 0) {
			foreach ($this->validationErrors as $key => $value) {
				switch ($value) {
					case 'invalid_title':
						$this->validationErrors[$key] = __d('pages', 'This field can not be empty.', true);
						break;
				}
			}
		}
		return $this->validationErrors;
	}

}
?>