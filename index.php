<!DOCTYPE html>
<!--
Arquivo criado para o  projeto do School of Net.
-->

<html>
<head>
    <?php    require_once 'head.php'; ?>
</head>

<body>
    <div class="jumbotron">
        <h1>Macarrone</h1>
        <p>Testando JS e Formulario</p>
        <?php require_once 'menu.php'; ?>
    </div>
    
    <div class="col-md-6 col-md-offset-3">
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <label for="name" class="col-lg-2 control-label">Nome</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control required" id="form-name" name="form-name" placeholder="Nome" />
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="email" class="form-control required" id="form-email" name="form-email" placeholder="Email" />
                </div>
            </div>
            <div class="form-group">
                <label for="assunto" class="col-lg-2 control-label">Assunto</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control required" id="form-subject" name="form-subject" placeholder="Assunto" />
                </div>
            </div>
            <div class="form-group">
                <label for="mensagem" class="col-lg-2 control-label">Mensagem</label>
                <div class="col-lg-10">
                    <textarea class="form-control required" rows="3" id="form-message" name="form-message" placeholder="Mensagem" /></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </div>
        </form>
        
        <bottom>
            <?php require_once 'bottom.php'; ?>
        </bottom>    
        
    </div>
    

    <script type="text/javascript" src="assets/js/contact-form.js"></script>
</body>

</html>


