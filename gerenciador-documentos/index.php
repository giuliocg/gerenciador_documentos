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

    <title>Gerenciador de Documentos</title>

  </head>
  <body>
    
    <?php
      $nome = $_POST['nome'] ?? '';

      include ("conexao.php");

      $sql = "SELECT * FROM documentos WHERE nome LIKE '%$nome%'";

      $dados = mysqli_query($conn, $sql);
    ?>

      <div class="container">
        <div class="row">
          <h1 class="titulo__caixa">Gerenciador de Documentos</h1>
          <div class="info__documento">
            <form action="documento__cadastrado.php" method="POST">
              <input class="nome" type="text" name="nome" placeholder="Nome do Documento" required>
              <input class="date" type="date" name="data" required>
              <input class="localizacao" type="text" name="localizacao_fisica" placeholder="Localização Física do documento" required>
                <select class="categoria" name="categorizacao" required>
                  <option value="">Selecione a Categoria</option>
                  <option value="documentos__diversos">Documentos diversos</option>
                  <option value="documentos__importantes">Documentos importantes</option>
                  <option value="imagens">Imagens</option>
                  <option value="outros">Outros</option>
                </select>
              <input class="arquivo" type="file" name="acesso_usuarios" required>
              <button class="botao__cadastro" type="submit">Cadastrar Documento</button>
            </form>
          </div>
            <div class="coluna__arquivos" action="documento__cadastrado.php" method="POST">
              <div class="row arquivos">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Data</th>
                      <th scope="col">Localização</th>
                      <th scope="col">Categoria</th>
                      <th scope="col">Acesso</th>
                      <th scope="col">Funções</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      
                      while ($linha = mysqli_fetch_assoc($dados)) {
                        $id = $linha['id'];
                        $nome = $linha['nome'];
                        $data = $linha['data'];
                        $data = mostra_data($data);
                        $localizacao = $linha['localizacao_fisica'];
                        $categoria = $linha['categorizacao'];
                        $arquivo = $linha['acesso_usuarios'];

                        echo "<tr>
                                <th scope='row'>1</th>
                                <td>$nome</td>
                                <td>$data</td>
                                <td>$localizacao</td>
                                <td>$categoria</td>
                                <td>$arquivo</td>
                                <td>
                                  <a href='editar__documento.php?id=$nome' class='btn btn-success btn-sm'>Editar</a>
                                  <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirmacao'
                                  onclick=" . '"' ."pegar__dados($id)" .'"' .">Excluir</a>
                                </td>
                              </tr>";
                      }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="modal fade" id="confirmacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form action="excluir__script.php" method="POST">
                    <p>Você tem certeza que quer excluir os documentos selecionados?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    <input type="hidden" name="id" id="exclusao" value="">
                    <input type="submit" class="btn btn-danger" value="Sim">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script type="text/javascript">
      function pegar__dados(id) {
        document.getElementById('exclusao').value = id;
      }
    </script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
  </body>
</html>