<?php
namespace system\base;

class BaseModel {
    
    public $db = null;

    public function __construct() {
        $this->db = database\simpleDb::getInstance();
    }
    
}