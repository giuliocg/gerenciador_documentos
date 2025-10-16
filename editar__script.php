<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        include ("conexao.php");

        $id = $_POST['id'];
        $nome = $_POST['nome'] ?? '';
        $data = $_POST['data'] ?? '';
        $localizacao_fisica = $_POST['localizacao_fisica'] ?? '';
        $categorizacao = $_POST['categorizacao'] ?? '';
        $acesso_usuarios = $_POST['acesso_usuarios'] ?? '';

        $sql = "UPDATE `documentos` set `nome` = '$nome', `data` = '$data', `localizacao_fisica` = '$localizacao_fisica', `categorizacao` = '$categorizacao', `acesso_usuarios` = '$acesso_usuarios' WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            echo "Editado com sucesso";
        } else {
            echo "Não foi possível editar";
        }

    ?>
    <a href="index.php" class="btn btn-info">Voltar para o início</a>
</html>