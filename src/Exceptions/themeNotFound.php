<?php namespace Omt\CoreTheme\Exceptions;

class themeNotFound extends \Exception{

	public function __construct($themeName) {
		parent::__construct("Theme $themeName not Found", 1);
	}

}