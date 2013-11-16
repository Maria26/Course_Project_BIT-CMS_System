<?php
namespace application\controllers;

class Sample extends \system\base\BaseController {
    
    public function data() {
        $this->view->display('index');
    }
    
    public function users() {
        $this->view->display('users');
                
    }
    
}