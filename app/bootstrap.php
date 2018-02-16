<?php 
	

	// Load config 
	require_once 'config/config.php';

	// Autoload Core libraries
	spl_autoload_register(function($class_name){
		require_once 'libraries/' . $class_name . '.php';
	});