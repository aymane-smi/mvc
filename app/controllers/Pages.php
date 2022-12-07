<?php
    class Pages{
        public function __construct(){
        }

        public function index(){
            echo 'index';
        }

        public function edit(){
            echo 'edit';
        }

        public function remove($id){
            echo $id;
        }
    }
?>