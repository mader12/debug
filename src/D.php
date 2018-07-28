<?php
/**
 * Created by PhpStorm.
 * User: mad
 * Date: 28.07.18
 * Time: 15:28
 */

namespace D;


class D
{
	public function __construct($var)
	{
		self::dump($var);
	}
	
	public static function dump($var)
	{
		echo '<pre style="background-color:#222; color: darkcyan; padding:20px;">';
		var_dump($var);
		echo '</pre>';
		exit;
	}
	
	public static function v($var)
	{
		echo '<pre style="background-color:#222; color: darkcyan;">';
		var_dump($var);
		echo '</pre>';
	}
}