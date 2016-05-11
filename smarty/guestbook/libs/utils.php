<?php

function bAjax()
{
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']))
		return true;
	else
		return false;
}