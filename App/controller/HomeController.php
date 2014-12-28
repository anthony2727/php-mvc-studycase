<?php 
namespace Anthony\App\controller;

use \Anthony\App\Controller as Controller;

class HomeController extends Controller{

	public function index(){
		$user = $this->model('User');
		$this->view('home', array("name"=>$user->getName(), "lastname"=>$user->getLastname()));
	}

}

?>
