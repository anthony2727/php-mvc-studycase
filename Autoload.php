<?php 

spl_autoload_register(function($class){

	// Project specific namespace
	$prefix = "Anthony\\App";

	$files_dir = __DIR__."/App/";
	
	//Does the class use the namespace prefix?
	$len = strlen($prefix);
	if (strncmp($prefix, $class, $len)!==0){
		// Process the next registered autoload
		return ;
	}
	
	$requested_class = substr($class, $len);

	$file = $files_dir . str_replace("\\", "/", $requested_class).'.php';

	if(file_exists($file)){
		require($file);
	}

});

?>