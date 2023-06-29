<?php
    class UserModel extends DBase{
        public $cco;
        public function __construct(){
            $this->cco = new DBase();
        }
        public function insert($n, $u,$p){
            $query = "INSERT INTO usuarios (nombre,user,pass) values('$n','$u','$p')";
            $result = $this->cco->conect->query($query);
        }
        public function viewUser(){
            $query = "SELECT * FROM usuarios";
            $result = $this->cco->conect->query($query);
            return $result;
        }
    }