<?php
class Dados{
        private $nome;
        private $email;

        public function setNome($nm){
            $this->nome = $nm;
        }

        public function setEmail($em){
            $this->email = $em;
        }    


        public function getEmail(){
            return  $this->email;
         }

        public function getNome(){
           return  $this->nome;
        }
    }
   ?>