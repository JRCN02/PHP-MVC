<?php
    class Home extends Controller{
        public function __construct(){
            
        }
        public function index(){
            $m = $this->modelo('User');
            $datos = $m->viewUser();
            //print_r();
            $this->loadView('home',$datos);
        }

        public function logout(){
            session_destroy();
            header('Location: /php-mvc/');
        }

        public function add(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['nombre'];
                $uu = $_POST['user'];
                $pp = $_POST['pass'];
                $m = $this->modelo('User');
                
                $m->insert($name,$uu,$pp);

                header('Location: /php-mvc/home');
                
            }else{
                echo "nd";
            }
        }
    }

?>