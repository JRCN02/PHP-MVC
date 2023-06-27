<?php
    class Login extends Controller{
        public function __construct(){

        }
        public function index(){
            $this->loadView('Login');
        }
        public function check(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['user'];
                $password = $_POST['pass'];
                echo "Usuario recibido ".$username;
                
            }
        }
    }
?>