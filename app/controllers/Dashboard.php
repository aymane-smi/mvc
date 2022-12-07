<?php
    class Dashboard extends Controller{

        private $DashModel;

        public function __construct(){
            $this->DashModel = $this->model('Article');
        }

        public function index(){
            echo 'Dashboard';
        }

        public function edit($id){
            echo $id;
        }

        public function settings(){
            $this->view('settings');
        }

    }
?>