<?php
// Verificar se o usuário clicou no botão cadastrar usuário
if (isset($dados['cadUsuario'])) {

    // Verificar se os campos estão preenchidos
    if (empty($dados['nome'])) {
        $mensagem = "<div class='alert-danger'>Erro: Necessário preencher o campo nome!</div>";
    }elseif (empty($dados['email'])) {
        $mensagem = "<div class='alert-danger'>Erro: Necessário preencher o campo e-mail!</div>";
    } else {
        // Criar a QUERY cadastrar no banco de dados
        $query_usuario = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";

        // Preparar a QUERY
        $cad_usuario = $conn->prepare($query_usuario);

        // Substituir os links pelos valores do formulário
        $cad_usuario->bindParam(':nome', $dados['nome']);
        $cad_usuario->bindParam(':email', $dados['email']);

        // Executar a QUERY
        $cad_usuario->execute();

        // Verificar se cadastrou no banco de dados
        if ($cad_usuario->rowCount()) {

            // Recuperar o ultimo id inserido
            $_SESSION['usuario_id'] = $conn->lastInsertId();

            // Salvar o número da próxima etapa na sessão
            $_SESSION['etapa'] = 2;

            // Criar mensagem de sucesso
            $mensagem = "<div class='alert-success'>Dados do usuário cadastrado com sucesso!</div>";

        } else {

            // Criar mensagem de sucesso
            $mensagem = "<div class='alert-danger'>Dados do usuário não cadastrado!</div>";
        }
    }
}
