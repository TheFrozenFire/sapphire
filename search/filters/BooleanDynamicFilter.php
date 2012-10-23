<?php
/**
 * @package framework
 * @subpackage search
 */

/**
 * Checks if boolean specified by value is set true. Useful for DropdownField.
 * 
 * @todo documentation
 * 
 * @package framework
 * @subpackage search
 */
class BooleanDynamicFilter extends SearchFilter {
	public function apply(DataQuery $query) {
		if($this->isEmpty()) return $query;
		$this->model = $query->applyRelation($this->getValue());
		return $query->where(sprintf(
			"%s = 1",
			Convert::raw2sql($this->getValue())
		));
	}
	
	public function isEmpty() {
		return $this->getValue() == null || $this->getValue() == '';
	}
}
