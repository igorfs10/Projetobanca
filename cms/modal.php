<?php 
    include_once('db.php');
    
    $codigo = $_POST['idRegistro'];
    $select = selectBanco();

    if($rs=mysqli_fetch_array($select))
    {
        $nome = $rs["nome"];
        $telefone = $rs["telefone"];
        $celular = $rs["celular"];
        $email = $rs["email"];
    }
?>

<html>
    <head>
        <title>Modal</title>    
        <script src="js/jquery.js"></script>
        
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
        <table width="98%" id="dadosContatos">
            <tr>
                <td colspan="2" class="tituloDados">
                    Dados do Contato
                    <a href="#" class="fechar">X</a>
                </td>
            </tr>
            <tr>
                <td class="linhaDados">
                    Telefone:
                </td>
                <td class="linhaDadosB">
                    <?php echo($telefone) ?>
                </td>
            </tr>
            <tr>
                <td>
                    Celular:
                </td>
                <td>
                    <?php echo($celular) ?>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <?php echo($email) ?>
                </td>
            </tr>
        </table>
    </body>
</html>