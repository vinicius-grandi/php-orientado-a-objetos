<?php
class Pessoa {
    public static $nome;
    public static function estatica(){
        echo "Eu sou uma função estática e no meu nome, tenho ". self::$nome;
    }
}
Pessoa::$nome = "Jaimin";
Pessoa::estatica();