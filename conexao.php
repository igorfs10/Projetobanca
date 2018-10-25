<?php
    function conexaoDb(){
        $host = "localhost";
        $database = "db_banca";
        $user = "root";
        $password = "bcd127";

        if(!$conexao = mysqli_connect($host,$user,$password,$database)){
            echo('Erro na conexão com o Banco de Dados');
        }
        
        return $conexao;
    }

?>