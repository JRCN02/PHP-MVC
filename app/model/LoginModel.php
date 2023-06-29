<?php 
    class LoginModel extends DBase{
    
        public $cco;
        public function __construct(){
            $this->cco = new DBase();
        }
        public function check($usu, $pas){

            $query = "SELECT * FROM usuarios WHERE user ='$usu' AND  pass='$pas'";
            $result = $this->cco->conect->query($query);
            // Verificar si se obtuvieron resultados
            if ($result->num_rows > 0) {
                return $result->fetch_assoc();
            } 
            return "";
        }
    }
?>