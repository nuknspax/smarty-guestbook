<?php

header('Content-type: application/json');

require_once("libs/Guestbook_forms.lib.php");

if(isset($_POST) && !empty($_POST))
{
	$oForms = new Guestbook_forms;

	$aInputTypes = $oForms->getInputTypes();

	if(in_array($_POST['type'], array_keys($aInputTypes)))
	{
		$oForms->
	}
}