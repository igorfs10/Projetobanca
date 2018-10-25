<?php 
    include_once('db.php');
    
    $codigo = $_POST['idRegistro'];
    $select = selectContatoBanco($codigo);

    if($rs=mysqli_fetch_array($select)){
        $nome = $rs["nome"];
        $telefone = $rs["telefone"];
        $celular = $rs["celular"];
        $email = $rs["email"];
        $homepage = $rs["homepage"];
        $facebook = $rs["facebook"];
        $sugestao = $rs["sugestao"];
        $informacao = $rs["informacao"];
        $sexo = $rs["sexo"];
        $profissao = $rs["profissao"];
        
        if($sexo == "m"){
            $sexo = "Masculino";
        }else{
            $sexo = "Feminino";
        }
    }
?>

<html>
    <head>
        <title>Modal</title>    
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script>
            $(document).ready(function(){
                //Function para fechar a modal
               $('.fechar').click(function(){
                 $('#container').fadeOut(400);  
               });
            });
        </script>
    </head>
    <body>
        <table width="800px" height="500px" id="dadosContatos">
            <tr>
                <td colspan="2" class="tituloDados">
                    Dados do Contato
                    <a href="#" class="fechar">X</a>
                </td>
            </tr>
            <tr>
                <td class="linhaDados">
                    &ensp;&ensp;Telefone:
                </td>
                <td class="linhaDadosB">
                    <?php echo($telefone) ?>
                </td>
            </tr>
            <tr>
                <td class="linhaDados">
                    &ensp;&ensp;Celular:
                </td>
                <td class="linhaDadosB">
                    <?php echo($celular) ?>
                </td>
            </tr>
            <tr>
                <td class="linhaDados">
                    &ensp;&ensp;Email:
                </td>
                <td class="linhaDadosB">
                    <?php echo($email) ?>
                </td>
            </tr>
            <tr>
                <td class="linhaDados">
                    &ensp;&ensp;Homepage:
                </td>
                <td class="linhaDadosB">
                    <?php echo($homepage) ?>
                </td>
            </tr>
            <tr>
                <td class="linhaDados">
                    &ensp;&ensp;Facebook:
                </td>
                <td class="linhaDadosB">
                    <?php echo($facebook) ?>
                </td>
            </tr>
            <tr>
                <td class="linhaDados">
                    &ensp;&ensp;Sexo:
                </td>
                <td class="linhaDadosB">
                    <?php echo($sexo) ?>
                </td>
            </tr>
            <tr>
                <td class="linhaDados">
                    &ensp;&ensp;Profissão:
                </td>
                <td class="linhaDadosB">
                    <?php echo($profissao) ?>
                </td>
            </tr>
            <tr>
                <td class="linhaDadosTexto  " colspan="2">
                    Sugestão:
                </td>
            </tr>
            <tr>
                <td class="linhaDadosTexto" colspan="2">
                    <textarea rows="4" cols="60" disabled>
                        <?php echo($sugestao) ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td class="linhaDadosTexto" colspan="2">
                    Informação:
                </td>
            </tr>
            <tr>
                <td class="linhaDadosTexto" colspan="2">
                    <textarea rows="4" cols="60" disabled>
                        <?php echo($informacao) ?>
                    </textarea>
                </td>
            </tr>
        </table>
    </body>
</html>