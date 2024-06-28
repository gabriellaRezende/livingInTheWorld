<!-- Formulário da etapa 3, cadastrar empresa -->
<form method="POST" action="" class="form-adm">

    <h2 class="title">Empresa</h2>

    <?php
    $razao_social = "";
    if (isset($dados['razao_social'])) {
        $razao_social = $dados['razao_social'];
    }
    ?>
    <div class="row-input">
        <div class="column">
            <label class="title-input">Razão Social: </label>
            <input type="text" name="razao_social" class="input-adm" placeholder="Razão social" value="<?php echo $razao_social; ?>">
        </div>
    </div>

    <?php
    $cnpj = "";
    if (isset($dados['cnpj'])) {
        $cnpj = $dados['cnpj'];
    }
    ?>
    <div class="row-input">
        <div class="column">
            <label class="title-input">CNPJ: </label>
            <input type="text" name="cnpj" class="input-adm" placeholder="CNPJ" value="<?php echo $cnpj; ?>">
        </div>
    </div>

    <button type="submit" name="cadEmpresa" class="btn-success" value="Cadastrar">Cadastrar</button>
    <button type="submit" name="novoUsuario" class="btn-primary" value="NovoUsuario">Novo Usuário</button>

</form>