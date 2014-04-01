<?php

function smarty_function_url_match($params, Smarty_Internal_Template $template)
{
	if(empty($params['url']))
	{
		trigger_error("url_match: missing 'url' parameter", E_USER_WARNING);
		return;
	}
	
	return URL::match($params['url']);
}