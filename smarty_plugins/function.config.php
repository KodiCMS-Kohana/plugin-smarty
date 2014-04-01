<?php

function smarty_function_config($params, Smarty_Internal_Template $template)
{
	if(empty($params['group']))
	{
		$params['group'] = 'site';
	}
	
	if(empty($params['key']))
	{
		$params['key'] = NULL;
	}
	
	if(empty($params['default']))
	{
		$params['default'] = NULL;
	}
	
	return Config::get($params['group'], $params['key'], $params['default']);
}