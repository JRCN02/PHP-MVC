<?php
    class Home extends Controller{
        public function __construct(){
            
        }
        public function index(){
            $datos = [
                'title' => 'Home Page',
                'content' => 'I am one content'

            ];
            $this->loadView('home',$datos);
        }

        public function user($NUMERO){
            echo '<br>ID: '.$NUMERO;
        }
    }

?>