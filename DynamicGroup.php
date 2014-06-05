<?php
namespace Asgard\Form;

class DynamicGroup extends Group {
	protected $cb;
	protected $default_render;

	public function __construct($cb, $default_render=null) {
		$this->cb = $cb;
		$this->default_render = $default_render;
	}

	public function setDefaultRender($default_render) {
		$this->default_render = $default_render;
	}

	public function setData(array $data) {
		$this->data = array_values($data);
		
		foreach($data as $name=>$data)
			$this->newField($name, $data);
		
		$this->updateChilds();

		return $this;
	}

	public function def($field=null) {
		$default_render = $this->default_render;
		if($default_render === null)
			return $field->def();
		else
			return $default_render($field);
	}

	public function renderTemplate($offset='') {
		$randstr = \Asgard\Utils\Tools::randstr(10);
		$jq = $this->renderNew('{{'.$randstr.'}}');
		$jq = addcslashes($jq, "'");
		$jq = str_replace("\r\n", "\n", $jq);
		$jq = str_replace("\n", "\\\n", $jq);
		$jq = str_replace('{{'.$randstr.'}}', $offset, $jq);
		return $jq;
	}

	protected function newField($name=null, $data=null) {
		if($name !== null && isset($this[$name]))
			return;
		$cb = $this->cb;
		$newelement = $cb($data);
		if(!$newelement)
			return;
		$this->addField($newelement, $name);
		return $newelement;
	}

	protected function renderNew($offset=null) {
		$default_render = $this->default_render;

		if($offset === null)
			$offset = $this->size();

		if(!isset($this[$offset]))
			$field = $this->newField($offset);
		else
			$field = $this[$offset];
		if(!$field)
			return;

		if($default_render === null)
			$r = $field->def();
		else
			$r = $default_render($field);

		unset($this[$offset]);

		return $r;
	}
}