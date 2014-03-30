<?php defined('SYSPATH') or die('No direct script access.');

class View_Front extends KodiCMS_View_Front {
	
	public static function factory($file = NULL, array $data = NULL)
	{
		if (self::is_smarty_template($file))
		{
			return Smarty_View::factory($file, $data);
		}
		else
		{
			return parent::factory($file, $data);
		}
	}
	
}