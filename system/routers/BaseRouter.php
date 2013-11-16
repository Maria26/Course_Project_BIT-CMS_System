<?php
namespace system\routers;

class BaseRouter implements IRouter{
	
	public function getURL() {
		return ltrim(($_SERVER['PATH_INFO']), '/');		
	}
}