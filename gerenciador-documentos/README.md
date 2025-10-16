#Gerenciador de Documentos

##Descrição

###Gerenciador de documentos onde é possível cadastrar, editar e excluir documentos com detalhes como: nome, data, localização física do documento, categorização e upload de arquivos em formatos como PDF, PNG, JPG, DOCX, etc.
###Foi utilizado PHP como linguagem principal. HTML5 e CSS3 no Front End e MySQL para o banco de dados. Também foi utilizado um script com Javascript Vanilla para um script que faz a exclusão dos dados cadastrados.

##Instrução de instalação

###Pre requisitos

1. Instale o XAMPP Control Panel v.3.3.0 e siga os passos de instalação

-Certifique de que seja instalado no 'Disco Local (C:)' para que não ocorra problemas nos próximos passos

2. Faça download do arquivo .zip na página do projeto 'Gerenciador de Documentos'

3. Extraia e copie a pasta 'gerenciador-documentos' para a pasta 'C:\xampp\htdocs' na sua máquina

###Etapas

1. Clique em 'Start' no painel de controle do XAMPP nos módulos 'Apache' e 'MySQL'

2. Abra o arquivo copiado na sua IDE de preferência (Obs: Este projeto foi desenvolvido no Microsoft VSCode)

3. No seu navegador, digite: 'localhost:gerenciador-documentos/index.php' (sem aspas)

4. Pronto, agora você já pode gerenciar seus documentos!

##Instrução de uso

1. Na página inicial, temos o gerenciador, onde podemos preencher os campos:
   'Nome do Documento', por exemplo, 'Documentos antigos';
   'Data', por exemplo, '10-15-2025', que será exibida em formato americano de datas: mm-dd-yyyy;
   'Localização Física do documento', por exemplo, 'Armário 1, gaveta 2';
   'Categoria', por exemplo, 'Documentos diversos, Documentos importantes, imagens, etc';
   'Botão de upload de arquivos', por exemplo, 'arquivos.txt, foto.jpg';

2. Com os dados preenchidos, podemos clicar no botão 'Cadastrar Documento', estes dados serão enviados para o MySQL e armazenados no banco de dados, que poderá ser visualizado clicando no botão 'Admin' do módulo MySQL no painel de controle XAMPP ou digitar em seu navegador 'localhost/phpmyadmin' e irá abrir a página do PHPMyAdmin. Na página, no canto superior esquerdo temos as estruturas criadas, você vai clicar na estrutura 'gerenciador-documentos', depois na tabela 'documentos', onde vai ser possível visualizar os dados cadastrados.

3. Assim que o documento for cadastrado, será possível visualizar logo abaixo do botão 'Cadastro', uma tabela onde mostra os dados que foram cadastrados, juntamente com os botões 'Editar' e Excluir ao lado.

4. Ao clicar no botão 'Editar', iremos para a página de edição do gerenciador, onde temos um visual muito parecido com a página inicial e é possível editar os dados previamente cadastrados, após a edição, basta clicar no botão 'Editar'. A partir disso, nos leva à página com a confirmação de edição dos dados, inclui também um link para voltar para a página inicial. Ao voltar para a página inicial, podemos visualizar os dados editados.

5. Ao clicar no botão 'Excluir', é exibido um Modal de confirmação de exclusão, com o texto: 'Você tem certeza de que quer excluir os documentos selecionados?' e temos 3 opções:
   -Botão para fechar o Modal (X)
   -Botão 'Não': fecha o Modal
   -Botão 'Sim': leva para outra página com a confirmação da exclusão e um link para voltar à página inicial.
   Ao voltar para a página inicial, podemos ver que os dados selecionados foram excluídos.

6. O projeto chegou ao fim, espero que tenha gostado!
