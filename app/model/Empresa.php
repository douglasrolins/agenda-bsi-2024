<?php


class Empresa {

    private $id;
    private $nome;
    private $cnpj;
    private $endereco;
    private $telefone;


    function __construct($nome, $cnpj, $endereco, $telefone)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->telefone = $telefone;

    }

    //Getter e Setter

    function getId(){
        return $this->id;
    }

    function getNome(){
        return $this->nome;
    }

    function getCnpj(){
        return $this->cnpj;
    }

    function getEndereco(){
        return $this->endereco;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function setId($id){
        $this->id  = $id;
    }

    function setNome($nome){
        $this->nome  = $nome;
    }

    function setCnpj($cnpj){
        $this->cnpj  = $cnpj;
    }

    function setEndereco($endereco){
        $this->endereco  = $endereco;
    }

    function setTelefone($telefone){
        $this->telefone  = $telefone;
    }

    // Método para incluir empresa no BD
    function cadastrar(){

    }

    // Método para atualizar empresa no BD
    function atualizar(){

    }

    // Método para apagar empresa no BD
    function apagar(){

    }




}




?>