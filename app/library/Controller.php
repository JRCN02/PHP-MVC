<?php 
    class Controller{
    
        public function modelo($model){
            require_once '../app/model'.$model.'.php';
            //instanciar modelo
            
            return new $model;
        }

        public function loadView($vist,$datos = []){
            if(file_exists('../app/view/'.$vist.'.php')){
                require_once '../app/view/'.$vist.'.php';
            }else{
                die('view no existe');
            }
        }
        
    }

?>