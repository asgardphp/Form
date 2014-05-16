<?php
namespace Asgard\Form\Fields;

class CaptchaField extends \Asgard\Form\Fields\Field {
	public function __construct(array $options=array()) {
		parent::__construct($options);
		$this->options['validation']['captcha_check'] = array($this, 'error');

		$this->default_render = function($field, $options) {
			return '<img src="'.\Asgard\Core\App::get('url')->to('captcha').'">'.
				\Asgard\Form\Widgets\HTMLWidget::text($field->getName(), $field->getValue(), $options)->render();
		};
	}

	public function error() {
		if($this->value != \Session::get('captcha'))
			return __('Captcha is invalid.');
	}
}