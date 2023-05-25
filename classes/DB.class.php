<?php

class DB {

    private $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'bg21c_u021', 'passwort', 'bg21c_u021');
    }

    public function getDatabaseConnection() {
        return $this->db;
    }


}