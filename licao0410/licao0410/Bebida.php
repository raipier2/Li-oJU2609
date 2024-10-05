<?php
abstract Class Bebida{
    private $nome;
    private $preco;

public function setNome($nome){
    $this->nome = $nome;
}
public function setPreco($preco){
    $this->preco = $preco;
}


public function getNome(){
    return $this->nome;
}
public function getPreco(){
    return $this->preco;
}


abstract function mostrarBebida();
abstract function verificarPreco();


}
?>