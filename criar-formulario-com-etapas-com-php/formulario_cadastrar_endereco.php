<!-- Formulário da etapa 2, cadastrar endereço -->
<form method="POST" action="" class="form-adm">

    <h2 class="title">Endereço</h2>

    <?php
    $logradouro = "";
    if (isset($dados['logradouro'])) {
        $logradouro = $dados['logradouro'];
    }
    ?>
    <div class="row-input">
        <div class="column">
            <label class="title-input">Logradouro: </label>
            <input type="text" name="logradouro" class="input-adm" placeholder="Avenida, Rua ..." value="<?php echo $logradouro; ?>">
        </div>
    </div>


    <?php
    $numero = "";
    if (isset($dados['numero'])) {
        $numero = $dados['numero'];
    }
    ?>
    <div class="row-input">
        <div class="column">
            <label class="title-input">Número: </label>
            <input type="text" name="numero" class="input-adm" placeholder="Número da residência" value="<?php echo $numero; ?>">
        </div>
    </div>


    <button type="submit" name="cadEndereco" class="btn-success" value="Cadastrar">Cadastrar</button>
    <button type="submit" name="novoUsuario" class="btn-primary" value="NovoUsuario">Novo Usuário</button>

</form>