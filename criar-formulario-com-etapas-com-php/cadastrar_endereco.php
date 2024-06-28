<?php
// Verificar se o usuário clicou no botão cadastrar endereço
if (isset($dados['cadEndereco'])) {

    // Verificar se os campos estão preenchidos
    if (empty($dados['logradouro'])) {
        $mensagem = "<div class='alert-danger'>Erro: Necessário preencher o campo logradouro!</div>";
    }elseif (empty($dados['numero'])) {
        $mensagem = "<div class='alert-danger'>Erro: Necessário preencher o campo número!</div>";
    } else {
        // Criar a QUERY cadastrar no banco de dados
        $query_endereco = "INSERT INTO enderecos (logradouro, numero, usuario_id) VALUES (:logradouro, :numero, :usuario_id)";

        // Preparar a QUERY
        $cad_endereco = $conn->prepare($query_endereco);

        // Substituir os links pelos valores do formulário
        $cad_endereco->bindParam(':logradouro', $dados['logradouro']);
        $cad_endereco->bindParam(':numero', $dados['numero']);
        $cad_endereco->bindParam(':usuario_id', $_SESSION['usuario_id']);

        // Executar a QUERY
        $cad_endereco->execute();

        // Verificar se cadastrou no banco de dados
        if ($cad_endereco->rowCount()) {

            // Salvar o número da próxima etapa na sessão
            $_SESSION['etapa'] = 3;

            // Criar mensagem de sucesso
            $mensagem = "<div class='alert-success'>Endereço cadastrado com sucesso!</div>";
        } else {

            // Criar mensagem de sucesso
            $mensagem = "<div class='alert-danger'>Endereço não cadastrado!</div>";
        }
    }
}
