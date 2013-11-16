<?php
namespace system;

include 'system/loader.php'; 

class Bootstrap {
	
	private $_config = null;
        private $_database = null;
	
	public function __construct() {
            \Loader::setAutoloader();
            $this->_config = Config::getInstance();

            $this->_database = \database\simpleDb::getInstance();
	}

        public function db_connect() 
        {
            $this->_database->connect('mysql', 'localhost', 'db_test', 'root', '');
        }

        public function init() {
            
            //$this->db_connect();
            
            $frontController = new FrontController();
            $frontController->dispatch();
	}
}