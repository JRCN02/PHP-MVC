<?php
    //mapeo de la url
    //controller/metodo/(param)
    class Core{
        //controlador actual
        protected $controllerCurrent;
        protected $methodCurrent;
        protected $param = [];

        public function __construct(){
            $this->controllerCurrent='Login';
            $this->methodCurrent = 'index';
            //print_r($this->getUrl() );
            $url = $this->getUrl();
            //existencia de controller
            if(isset($url[0])){//Posicion del controlador 
                $file = '../app/controller/'. ucwords($url[0]).'Controller.php';
                if(file_exists($file)){
                    $this->controllerCurrent = ucwords($url[0]);
                    //controlador que recibi se quito
                    unset($url[0]);
                }
            }    
            //Tenemos la clase y el archivo controller
            require_once '../app/controller/'.ucwords($this->controllerCurrent).'Controller.php';
            //instanciando objeto
            $this->controllerCurrent = new $this->controllerCurrent();
            //Obtendremos el metodo
            if(isset($url[1])){ //posicion del metodo
                if(method_exists($this->controllerCurrent, $url[1])){
                    $this->methodCurrent = $url[1];
                    //metodo que se recibe se quito
                    unset($url[1]);
                }
            }
            //Metodo en caso de existir sino se mantiene por defecto
            //echo $this->methodCurrent;

            //Operacion ternaria

            $this->param = $url ? array_values($url): [];
            
            
            call_user_func_array([$this->controllerCurrent,$this->methodCurrent], $this->param);
            
        }
        public static function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'],'/'); 
                //echo $url;
                $url = filter_var($url,FILTER_SANITIZE_URL);
                $url = explode('/',$url);

                return $url; //retorna un array
                
            }
        }
    }