<?php
class Spam {
    public function getEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Email Inválido", 10);
        } else {
            echo "Email cadastrado com sucesso";
        }
    }
}

$spam = new Spam;

try {
$spam->getEmail("joao@");
} catch(Exception $e) {
    echo $e->getMessage(). "<br>"
    ."Código de erro: ".$e->getCode(). "<br>"
    ."Arquivo: ".$e->getFile(). "<br>"
    ."Linha: ".$e->getLine();
    
    
    ;

}