<?php
class Conexao{

    //conectando o banco de dados da agencia tipi
    public static function LigarConexao(){
        $conn = new PDO('mysql:dbname=cloudwise;host=localhost', 'root', '');
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }    
    
}

// = atribui
// == compara
// === compara valor e tipo

// public acessa de qualquer lugar
// private acsso privado a quem esta dentro da classe