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
                
                $m = $this->modelo('Login');
                
                $result = $m->check($username,$password);

                if($result!=""){
                    session_start();
                    $_SESSION['id'] = $result['id'];
                    $_SESSION['user'] = $result['user'];
                    $_SESSION['nombre'] = $result['nombre'];
                    header('Location: /php-mvc/home');
                }else{
                    header('Location: /php-mvc/');
                }
                
            }
        }
    }
?>