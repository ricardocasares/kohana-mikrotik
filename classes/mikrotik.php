<?php defined('SYSPATH') or die('No direct script access.');

class Mikrotik extends Mikrotik_Api{
	function __construct()
	{	// Load config file
		$config = Kohana::$config->load('mikrotik');
		$params = $config->get('mikrotik');
		// Initiliaze parent with params
		parent::__construct($params);
	}
}