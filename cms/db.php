<?php
    function selectBanco(){
        $host = "localhost";
        $database = "mydb";
        $user = "root";
        $password = "bcd127";

        if(!$conexao = mysqli_connect($host, $user, $password, $database)){
            echo("Erro na conexão com banco de dados.");
        }

        $sql = "SELECT * from tbl_contatos";
        
        return mysqli_query($conexao, $sql);
    }
?>