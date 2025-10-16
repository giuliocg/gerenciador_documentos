    <?php
        $hostname = 'localhost';
        $bancodedados = 'gerenciador-documentos';
        $usuario = 'root';
        $senha = '';

        if ($conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados)) {
          //  echo "Conectado!";
        } else {
            echo "Erro";
        }

        function mostra_data($data) {
            $d = explode('-', $data);
            $escreve = $d[2] . '/' . $d[1] . '/' . $d[0];
            return $escreve;
        }

    ?>