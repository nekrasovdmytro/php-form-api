<?php

/**
  * Field class to generate reset button.
  *
  * @property string $type the type of the field (i.e. reset).
  * @property int $label label ID of Field
  *
  * @package formapi
  * @author Zoltan Siki <siki@agt.bme.hu> and Zoltan Koppanyi <zoltan.koppanyi@gmail.com>
  * @version 0.1
  */

class ResetField extends Field {

	protected $label;
	
	public function __construct($id, $name, $label, $help=NULL) {

		parent::__construct($id, $name, false, NULL, NULL, $help);
		$this->label = $label;
		$this->type = "reset";
	}

	public function generate($form, $lang) {
		$w = "<div><input type=\"reset\" value=\"" .
			$form->getMsg($this->label, $lang) . "\"" .
			" name=\"" . $this->name . "\"" .
			" title=\"" . $form->getMsg($this->help, $lang) . "\"" .
			" /></div>";
		return $w;
	}

	public function generateLabel($form, $lang) {
		$w = "<div>&nbsp;</div>";
		return $w;
	}

}

?>
