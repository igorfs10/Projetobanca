<?php
    include_once "conexao.php";
    function selectBanco(){
        $sql = "SELECT * from tbl_contatos";
        
        return mysqli_query(conexaoDb(), $sql);
    }

    function deleteBanco($id){
        $sql = "DELETE FROM tbl_contatos WHERE id= " . $id;
        mysqli_query(conexaoDb(), $sql);
        header('location:faleconosco.php');
    }
?>