<?php
// Verificar se o usuário clicou no botão cadastrar empresa
if (isset($dados['cadEmpresa'])) {

    // Verificar se os campos estão preenchidos
    if (empty($dados['razao_social'])) {
        $mensagem = "<div class='alert-danger'>Erro: Necessário preencher o campo razão social!</div>";
    }elseif (empty($dados['cnpj'])) {
        $mensagem = "<div class='alert-danger'>Erro: Necessário preencher o campo CNPJ!</div>";
    } else {
        // Criar a QUERY cadastrar no banco de dados
        $query_empresa = "INSERT INTO empresas (razao_social, cnpj, usuario_id) VALUES (:razao_social, :cnpj, :usuario_id)";

        // Preparar a QUERY
        $cad_empresa = $conn->prepare($query_empresa);

        // Substituir os links pelos valores do formulário
        $cad_empresa->bindParam(':razao_social', $dados['razao_social']);
        $cad_empresa->bindParam(':cnpj', $dados['cnpj']);
        $cad_empresa->bindParam(':usuario_id', $_SESSION['usuario_id']);

        // Executar a QUERY
        $cad_empresa->execute();

        // Verificar se cadastrou no banco de dados
        if ($cad_empresa->rowCount()) {

            // Salvar o número da próxima etapa na sessão
            $_SESSION['etapa'] = 1;

            // Criar mensagem de sucesso
            $mensagem = "<div class='alert-success'>Empresa cadastrada com sucesso!</div>";
        } else {

            // Criar mensagem de sucesso
            $mensagem = "<div class='alert-danger'>Empresa não cadastrada!</div>";
        }
    }
}
