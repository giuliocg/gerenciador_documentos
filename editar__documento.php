<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Gerenciador de Documentos - Editar</title>

</head>
<body>

    <?php
        include ("conexao.php");

        $id = (int) $_GET['id'];
        $sql = "SELECT * FROM documentos WHERE nome = $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);
    ?>

    <div class="container">
            <div class="row">
            <h1 class="titulo__caixa">Gerenciador de Documentos / Editar</h1>
            <div class="info__documento">
                <form action="editar__script.php" method="POST">
                <input class="nome" type="text" name="nome" placeholder="Nome do Documento" required value="<?php echo $linha['nome']?>">
                <input class="date" type="date" name="data" required value="<?php echo $linha['data']?>">
                <input class="localizacao" type="text" name="localizacao_fisica" placeholder="Localização Física do documento" required value="<?php echo $linha['localizacao_fisica']?>">
                    <select class="categoria" name="categorizacao" required value="<?php echo $linha['categorizacao']?>">
                    <option value="">Selecione a Categoria</option>
                    <option value="documentos__diversos">Documentos diversos</option>
                    <option value="documentos__importantes">Documentos importantes</option>
                    <option value="imagens">Imagens</option>
                    <option value="outros">Outros</option>
                    </select>
                <input class="arquivo" type="file" name="acesso_usuarios" required value="<?php echo $linha['acesso_usuarios']?>">
                <button class="botao__cadastro" type="submit" value="Salvar Alterações">Editar</button>
                <input type="hidden" name="id" value="<?php echo $linha['id']?>">
                </form>
                </div>
                </div>
            </div>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
    </body>
</html>