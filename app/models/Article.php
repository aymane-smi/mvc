<?php
    class Article{
        private $db;
        
        public function __construct(){
            $this->db = new DB();
        }
    }
?>