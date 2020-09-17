<?php
    class dbModel {
        protected $mysqli;
        
        public function __construct()
        {
            $this->mysqli= new mysqli("localhost", "root", "", "db_cours2","3306");
            if ($this->mysqli->connect_errno) {
                die ("Failed to connect to MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error);
            }
            $this->mysqli->set_charset("utf8");
            
        } 

        protected function escape_string($variable_to_escape){
            return $this->mysqli->escape_string($variable_to_escape);
        }
    }   
?>