<!DOCTYPE html>
<html lang="pt-BR">
    <?php
        include ("conexao.php");

        $id = $_POST['id'] ?? '';

        $sql = "DELETE from `documentos` WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            echo "Excluído com sucesso";
        } else {
            echo "Não foi possível excluir";
        }

    ?>
    <a href="index.php" class="btn btn-info">Voltar para o início</a>
</html>