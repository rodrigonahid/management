<?php

class ValidateForm{
    private $data;
    private $errors = [];
    private static $fields = ['nome','email','senha','repetir-senha'];

    public function __construct($postData){
        $this->data=$postData;
    }
    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field não existe em data");
                return;
            }
        }
        $this->validateNome();
        $this->validateEmail();
        $this->validateSenha();
        return $this->errors;
    }
    public function validateNome(){
        $value=trim($this->data['nome']);
        if(empty($value)){
            $this->addError('nome','Campo em branco');
        }
    }
    public function validateEmail(){
        $email=$this->data['email'];
        if(empty($email)){
            $this->addError('email','Campo em branco');
        }
    }
    public function validateSenha(){
        $senha = trim($this->data['senha']);
        $repetirSenha = trim($this->data['senha']);
        if(empty($senha)){
            $this->addError('senha','Campo em branco');
        }
        if(empty($repetirSenha)){
            $this->addError('repetir-senha','Campo em branco');
        }
        //PAREI AQUI, FUNÇAO PARA VALIDAR SE A SENHA NAO REPETIR
    }
    public function addError($key,$value){
        $this->errors[$key]=$value;
    }
    public function errorCheck($input){
        if($this->errors[$input]){
            echo "error";
        }else{
            echo "success";
        }
        
    }

}