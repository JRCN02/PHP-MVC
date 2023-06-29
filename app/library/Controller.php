<?php 
    class Controller{
    
        public function modelo($model){
            require_once '../app/model/'.$model.'Model.php';
            //instanciar modelo
            $model = $model.'Model';
            //print_r($model);
            return new $model();
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