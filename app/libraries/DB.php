<?php
    class DB{
        private $USER = 'root';
        private $PASSWORD = '123@Password';
        private $DB = 'sinkMNT';
        private $PORT = 3306;
        private $HOST = 'localhost';

        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){
            $dsn = "mysql:host=".$this->HOST.";dbname=".$this->DB;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            try{
                $this->dbh = new PDO($dsn, $this->USER, $this->PASSWORD, $options);
            }catch(PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
    }
?>