<?php
require_once 'Bebida.php';
Class Refrigerante extends Bebida{
   

    private $retornavel;
     
    public function setRetornavel($retornavel){
        $this->retornavel = $retornavel;
    }
     
    public function getRetornavel($retornavel){
         return $this->retornavel ;
    }

    public function mostrarBebida(){
        return "Nome" . $this->nome; "Retornavel" . $this->retornavel;
    }

    public function verificarPreco(){
        if($preco < 5){
            return true;
        }else{
            return false;
        }
    }
}

?>