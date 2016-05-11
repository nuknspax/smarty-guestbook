<?php

/* Forms class 
 * 
 *
*/

class Guestbook_forms 
{
	/* $aFormInputs provide an array of possible input types and their attrs
	* each form attr will have its own input for value
	*/
	protected $aFormInputs;


	function __construct(){
		$this->aFormInputs = array(
			'text' => array(
				'attrs' => array('name', 'id', 'class'),
			),

			'checkbox' => array(
				'attrs' => array('name', 'label', 'id', 'class'),
			),

			'option' => array(
				'attrs' => array('name', 'label', 'id', 'class'),
			),
		);
	}

	function getInputTypes()
	{
		return array_keys($this->aFormInputs);
	}

	function getInput($s)
	{
		if(in_array($s, array_keys($this->aFormInputs)))
		{
			return $this->aFormInputs[$s]['attrs'];
		}
		else
			return false;
	}
}