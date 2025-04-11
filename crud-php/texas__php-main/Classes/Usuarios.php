<?php

    class Usuarios{
        private $userId;
        private $userNome;
        private $userEmail;
        private $userSenha;

        //metodos sets para passar os valores
        public function setUserId($userId){
            $this-> userId = $userId;
        }

        public function setUserNome($userNome){
            $this->userNome = $userNome;
        }

        public function setUserEmail($userEmail){
            $this->userEmail = $userEmail;
        }

        public function setUserSenha($userSenha){
            $this->userSenha = $userSenha;
        }

        //meetodos gets para pegar e mostrar

        public function getUserId(){
            return $this->userId;
        }

        public function getUserNome(){
            return $this->userNome;
        }

        public function getUserEmail(){
            return $this->userEmail;
        }

        public function getUserSenha(){
            return $this->userSenha;
        }
    }

?>