<?php

namespace database;

class simpleDb {
    
    private function __construct()  {}
    private function __clone()      {}
    
    public $dbConnection = null;

    public static $instance = null;
    
    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new simpleDb();
        }
        return self::$instance;
    }
    
    public function connect($provider, $host, $db, $user, $pass) {
        
        $connectionString = "$provider:host=$host;dbname=$db";
        $connect = new \PDO($connectionString, $user, $pass);
        
        if($connect) {
            $this->dbConnection = $connect;
        }
        else {
            throw new Exception("Unable to connect to the server");
        }
    }
    
    public function query($sql) {
        $this->dbConnection->query($sql);
    }
}