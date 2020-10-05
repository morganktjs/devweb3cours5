<?php
    class dbModel {
        static private $PDOInstance;
        private $host = '127.0.0.1';
        private $db = 'db_cours2';
        private $db_user = 'root';
        private $db_password = '';
        private $db_charset = 'utf8mb4';
        private $options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES=>false];

        public function __construct()
        {
            if(is_null(self::$PDOInstance))
            {
                $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->db_charset";
                try
                {
                    self::$PDOInstance = new PDO($dsn, $this->db_user, $this->db_password, $this->options);
                }
                catch(PDOException $e)
                {
                    throw new PDOException($e->getMessage(), (int)$e->getCode());
                }
            }
        } 

        protected function GetPDOInstance()
        {
            return self::$PDOInstance;
        }
    }   
?>