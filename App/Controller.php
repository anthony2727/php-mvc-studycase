<?php 
namespace Anthony\App;

class Controller {

	// private $data = array();

	public function view($view, $parameters){
		if(file_exists(__DIR__.'/view/'.$view.'.html')){
			if(!empty($parameters)){
				foreach ($parameters as $key => $value) {
					$$key = $value;
				}
			}
			include(__DIR__.'/view/'.$view.'.html');
		}
	}

	// public function __set($variable, $value){
	// 	$this->data[$variable] = $value;
	// }

	// public function __get($variable){
	// 	if(array_key_exists($variable, $this->data)){
	// 		return $this->data[$variable];
	// 	}
	// }

	public function model($model){
		if(file_exists(__DIR__.'/model/'.$model.'.php')){
			$model_path = "\\Anthony\\App\\model\\".$model;
			return new $model_path();
			/*
			NOTE: To instantiate a class as part of a namespace using a variable containing the class's name
			use the above construction. 
			The below code won't work:
			return new Anthony\App\model\$model ; IT WILL FAIL!!!

			*/
		}
	}	

}

 ?>