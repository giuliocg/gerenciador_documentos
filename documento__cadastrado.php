<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        include ("conexao.php");

        $nome = $_POST['nome'] ?? '';
        $data = $_POST['data'] ?? '';
        $localizacao_fisica = $_POST['localizacao_fisica'] ?? '';
        $categorizacao = $_POST['categorizacao'] ?? '';
        $acesso_usuarios = $_POST['acesso_usuarios'] ?? '';

        $sql = "INSERT INTO `documentos`(`nome`, `data`, `localizacao_fisica`, `categorizacao`, `acesso_usuarios`) VALUES 
        ('$nome','$data','$localizacao_fisica','$categorizacao','$acesso_usuarios')";

        if (mysqli_query($conn, $sql)) {
            echo "Cadastrado com sucesso";
        } else {
            echo "Não cadastrado";
        }

    ?>
    <a href="index.php" class="btn btn-info">Voltar para o início</a>
</html>