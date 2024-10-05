<?php
require_once 'Bebida.php';
Class Suco extends Bebida{
   
    
   private $sabor;

    public function setSabor($sabor){
        $this->sabor = $sabor;
    }

    public function getSabor($sabor){
        return $this->sabor ;
    }

    public function mostrarBebida(){
        return "Nome" . $this->nome; "Sabor" . $this->sabor;
    }

    public function verificarPreco(){
        if($preco < 2.5){
            return true;
        }else{
            return false;
        }
    }
}
?>