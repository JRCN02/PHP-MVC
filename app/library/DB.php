<?php
    class DBase{
        private $db;
        private $host;
        private $user;
        private $pass;
        public $conect;
        public function __construct(){
            $this->db = 'php-mvc';
            $this->host = 'localhost';
            $this->user = 'root';
            $this->pass = '';

            $this->conect = new mysqli($this->host,$this->user,$this->pass,$this->db);
            if ($this->conect->connect_error) {
                die("Error de conexión: " . $this->conect->connect_error);
            }
        }
    }