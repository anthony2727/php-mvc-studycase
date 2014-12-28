<?php 
namespace Anthony\App\helper;

class ParseUrl {

	private $urlParameters;

	public function processUrl($rawRequest){
		$request = filter_var($rawRequest, FILTER_SANITIZE_URL);
		if(strlen($request)>0){
			$urlParameters = explode("/", $request);	
		}
		return $urlParameters;
	}
}

 ?>