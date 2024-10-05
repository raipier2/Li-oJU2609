<?php
 require_once 'Bebida.php';

class Vinho extends Bebida{
 
    private $tipo;
    private $safra;

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setSafra($safra){
        $this->safra = $safra;
    }

    public function getTipo($tipo){
        return $this->tipo ;
    }
    public function getSafra($safra){
        return $this->safra ;
    }

    public function mostrarBebida(){
        return "Nome" . $this->nome; "Tipo" . $this->tipo; "Safra" . $this->safra;
    }

    public function verificarPreco($preco){
        if($preco < 25){
            return true;
        }else{
            return false;
        }
    }

}
?>