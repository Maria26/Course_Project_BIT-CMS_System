<?php
namespace system;

class FrontController {
	
	public $router = null;
	
	public $controller 	= null;
	public $method 		= null;
	
	public function __construct() {
		$this->router = new routers\BaseRouter();
	}
	
	public function dispatch() 
        {
		$uri  = $this->router->getURL();
		$newUri = explode('/', $uri);
		
		if($newUri[0]) {
                    $this->controller = $newUri[0];

                    if(isset($newUri[1])) {
                        $this->method = $newUri[1];
                    }
                    else {
                        $this->method = 'index';
                    }
		}
		else {
                    $this->controller 	= 'index';
                    $this->method   = 'index';
		}
                
		$className = 'application\controllers\\'. $this->controller;
		
		$newObject = new $className();
		$newObject->{$this->method}();
	}	
}