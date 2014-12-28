<?php 
namespace Anthony\App\helper;

class ParseUrl {

	public function processUrl($rawRequest){
		$urlParameters = null;
		$request =$this->filterUrl($rawRequest);
		if(strlen($request)>0){
			$urlParameters = $this->getParameters($request);
		}
		return $urlParameters;
	}
	public function filterUrl ($url){
		return filter_var($url, FILTER_SANITIZE_URL);
	}
	public function getParameters($url_string){
		return explode('/',rtrim($url_string,'/'));
	}
}

 ?>