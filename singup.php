<?php
require 'connection.php';

$msgtype = "";
$msg = "";
$display = "none";


if (isset($_POST["cadastrar"])) {
    $nome = mysqli_real_escape_string($connection, $_POST["nome"]);
    $mail = mysqli_real_escape_string($connection, $_POST["mail"]);
    $genero = mysqli_real_escape_string($connection, $_POST["genero"]);
    $dtnas = $_POST["dtnas"];
    $endereco = mysqli_real_escape_string($connection, $_POST["endereco"]);
    $cod = mysqli_real_escape_string($connection, $_POST["cod"]);
    $psw1 = md5(mysqli_real_escape_string($connection, $_POST["psw1"]));
    $psw2 = md5(mysqli_real_escape_string($connection, $_POST["psw2"]));

    $query = "SELECT`email`FROM user WHERE email = '$mail'";

    $result = mysqli_query($connection, $query);

    //verificar se o email ja esta cadastrado
    if (mysqli_num_rows($result) > 0) {
        $msgtype = "danger";
        $msg = "Este email ja encontra-se cadastrado no portal.";
        $display = "block";
    } else if ($psw1 != $psw2) {
        $msgtype = "danger";
        $msg = "As senhas não são iguais, tente novamente.";
        $display = "block";
    } else {
        $query = "insert into user (`name`, `email`, `psw`, `dt_nascimento`, `cod_postal`, `endereco`, `genero`) values ('$nome', '$mail', '$psw1', '$dtnas', '$cod', '$endereco', ' ')";

        print_r($query);

        $result = mysqli_query($connection, $query);

        if (!$result) {
            $msgtype = "danger";
            $msg = "Algo aconteceu. Não cconseguimos criar o utilizador, tente novamente mais tarde";
            $display = "block";
        } else {
            $msgtype = "success";
            $msg = "Felicidade";
            $display = "block";
            header("location: index.php");
        }
    }
};



?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cidadania Matos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./CSS/styles.css">

</head>

<style>
    body {
        background-image: url(./images/bg\ login.png);
        background-repeat: no-repeat;
    }
</style>


<body class="container-fluid">
    <div class="w-100 d-flex flex-row justify-content-center">
        <form class="mt-5 mb-5" method="post" enctype="multipart/form-data">
            <div class="container log ">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="card align-items-center">
                            <h5 class="">Signup</h5>
                            <div class="alert alert-<?php echo $msgtype; ?>" role="alert" style="display:<?php echo $display; ?>">
                                <?php echo $msg; ?>
                            </div>
                            <div class="card-body d-flex row p-0 m-3 align-items-center">
                                <div class="mb-2 p-0">
                                    <label for="exampleInputEmail1" class="form-label mb-1">Nome*</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="nome" required value="<?php  ?>" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-2 p-0">
                                    <label for="exampleInputEmail1" class="form-label mb-1">Email*</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" required value="<?php  ?>" aria-describedby="emailHelp">
                                </div>
                                <div class="row gap-3 ">
                                    <div class="col p-0 mb-2">
                                        <label for="exampleInputEmail1" class="form-label mb-1">Gênero</label>
                                        <select class="form-select " name="genero" aria-label="Default select example">
                                            <option selected>--</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                            <option value="3">Prefiro não</option>
                                        </select>
                                    </div>
                                    <div class="col p-0 mb-2">
                                        <label for="exampleInputEmail1" class="form-label mb-1">Data de Nascimento*</label>
                                        <input type="date" class="form-control" placeholder="" name="dtnas" aria-label="Last name">
                                    </div>
                                </div>
                                <div class="mb-2 p-0">


                                </div>

                                <div class="mb-3 p-0">
                                    <label for="exampleInputEmail1" class="form-label">Endereço*</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="endereco" required value="<?php  ?>" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 p-0">
                                    <label for="exampleInputEmail1" class="form-label">Cód. Postal*</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="cod" required value="<?php  ?>" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 p-0">
                                    <label for="exampleInputEmail1" class="form-label">Senha*</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" name="psw1" required value="<?php  ?>" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3 p-0">
                                    <label for="exampleInputEmail1" class="form-label">Confirmar Senha*</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" name="psw2" required value="<?php  ?>" aria-describedby="emailHelp">
                                </div>

                                <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                                <p class="card-text"> Já possui login? <a href="login.php"> Login</a>.</p>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>