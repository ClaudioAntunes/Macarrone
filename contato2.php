<!DOCTYPE html>
<!--
Arquivo criado no projeto do School of Net.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Macarrone | <?php echo end(explode("/",$_SERVER['PHP_SELF']));
        ?></title>
    </head>
    <body>
    <?php 
        require_once('menu.php');
    ?>
    <div>
        
        <fieldset title="Formulario de Contato">
          <form name="form1" method="post" action="">
            <legend>Formulário de Contato</legend>
                <label for="email">Nome</label>
                <input type="text" name="nome" id="nome"><br>
            
                <label for="email">Email</label>
                <input type="text" name="email" id="email"><br>
                
                <label for="email">Assunto</label>
                <input type="text" name="assunto" id="assunto"><br>
            
                <label for="email">Mensagem</label>
                <input type="text" name="mensagem" id="mensagem"><br>
          </form>
      </fieldset>
    
    </div>
    
        <?php
            echo "Todos os direitos reservados - ", date('Y');
        ?>
    </body>
</html>
