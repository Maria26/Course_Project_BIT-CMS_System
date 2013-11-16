<?php

namespace system\base;

class BaseController {
    

    public $view = null;

    public function __construct() {
        $this->view = BaseView::getInstance();
    }
    
    
    public function  get_data() {
        echo "Sample data from front controller";
    }
    
}