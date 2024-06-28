

<!-- Formulário da etapa 1, cadastrar usuário -->
<form method="POST" action="" class="form-adm">

    <h2 class="title">Dados do Usuário</h2>

    <?php
    $nome = "";
    if (isset($dados['nome'])) {
        $nome = $dados['nome'];
    }
    ?>
    <div class="row-input">
        <div class="column">
            <label class="title-input">Nome: <span class="text-danger">*</span></label>
            <input type="text" name="nome" class="input-adm" placeholder="Nome completo" value="<?php echo $nome; ?>">
        </div>
    </div>

    <?php
    $email = "";
    if (isset($dados['email'])) {
        $email = $dados['email'];
    }
    ?>
    <div class="row-input">
        <div class="column">
            <label class="title-input">E-mail: <span class="text-danger">*</span></label>
            <input type="email" name="email" class="input-adm" placeholder="Melhor e-mail" value="<?php echo $email; ?>">
        </div>
    </div>

    <p class="obrigatorio">* Campo Obrigatório</p>

    <button type="submit" name="cadUsuario" class="btn-success" value="Cadastrar">Cadastrar</button>

</form>