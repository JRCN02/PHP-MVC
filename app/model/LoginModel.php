<?php 
    class LoginModel{

        public function check($usu, $pas){
            include_once 'db/conection.php';
            $query = "SELECT * FROM usuarios WHERE user ='$usu' AND  pass='$pas'";
            $result = $conex->query($query);
            // Verificar si se obtuvieron resultados
            if ($result->num_rows > 0) {
                return $result;
            } 
            return "";
        }
    }
?>