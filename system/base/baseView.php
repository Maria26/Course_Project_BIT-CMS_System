<?php

namespace system\base;

 class BaseView {
     
     public static $instance = null;
     
     private function __construct() {
         
     }
     
     private function __clone() {
         
     }
     
     
     public static function getInstance() {
         if(self::$instance == NULL) {
             self::$instance = new BaseView();
         }
         return self::$instance;
     }
     
     
     public function display($view) {
         
         $view_path = APP. DS. 'application' . DS . 'views' . DS. $view . '.php';
         include $view_path;
     }
     
 }