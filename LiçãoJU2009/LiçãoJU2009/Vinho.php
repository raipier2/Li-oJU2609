<?php

class Vinho{

    private $nome;
    private $tipo;
    private $preco;
    private $safra;


    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function setSafra($safra){
        $this->safra = $safra;
    }

    public function getNome($nome){
        return $this->nome ;
    }

    public function getTipo($tipo){
        return $this->tipo ;
    }

    public function getPreco($preco){
        return $this->preco ;
    }

    public function getSafra($safra){
        return $this->safra ;
    }

    public function mostrarVinho(){
        return "Cadastro do Vinho Concluido";
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