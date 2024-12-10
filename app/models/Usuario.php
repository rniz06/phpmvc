<?php

    class Usuario
    {

        protected $db;

        public function __construct(){

            $this -> db = new Database();

        }

        public function obtenerUsuarios(){

            $this -> db -> query('SELECT * FROM usuarios');
            $resultados = $this -> db -> registros();

            return $resultados;
        }

        public function obtenerUsuarioParaLogin($usuario){

            $this -> db -> query("SELECT * FROM usuarios WHERE username = '$usuario'");
            $resultados = $this -> db -> registro();

            return $resultados;
        }

    }


?>