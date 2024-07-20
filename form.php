<?php

session_start(); // Iniciar a sessão

// Incluir o arquivo com conexão ao banco de dados
include_once './conexao.php';

// Verificar se está criada a sessão para controlar as etapas
if (!isset($_SESSION['etapa'])) {

    // Criar a sessão para armazenar a etapa
    $_SESSION['etapa'] = 1;
}
//$_SESSION['etapa'] = 1;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <title>Celke</title>
</head>

<body>

    <div class="form-container">
        <?php

        // Criar a variável para receber as mensagens de erro ou sucesso
        $mensagem = "";

        // Receber os dados do formulário
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        // Verificar se o usuário clicou no botão novo usuário
        if (isset($dados['novoUsuario'])) {

            // Atribuir a etapa um para cadastrar novo usuário
            $_SESSION['etapa'] = 1;
        }

        /************* SALVAR OS DADOS DO USUÁRIO ***************/
        include_once './cadastrar_usuario.php';

        /************* SALVAR OS DADOS DO ENDEREÇO ***************/
        include_once './cadastrar_endereco.php';

        /************* SALVAR OS DADOS DA EMPRESA ***************/
        include_once './cadastrar_empresa.php';

        // Incluir o arquivo com as etapas
        include_once './etapas.php';

        ?>
        <div class="content">
            <?php

            // Imprimir as mensagens de erro ou sucesso
            echo $mensagem;
            $mensagem = "";

            // Verificar se deve carregar o formulário da etapa 1
            if ($_SESSION['etapa'] == 1) {

                // Incluir o arquivo com o formulário cadastrar usuário
                include_once './formulario_cadastrar_usuario.php';
            } elseif ($_SESSION['etapa'] == 2) {  // Verificar se deve carregar o formulário da etapa 2

                // Incluir o arquivo com o formulário cadastrar endereço
                include_once './formulario_cadastrar_endereco.php';
            } elseif ($_SESSION['etapa'] == 3) {  // Verificar se deve carregar o formulário da etapa 3

                // Incluir o arquivo com o formulário cadastrar empresa
                include_once './formulario_cadastrar_empresa.php';
            }
            ?>
        </div>
    </div>

</body>

</html>