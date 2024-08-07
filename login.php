<?php
session_start();

$email = "";
$pwd = "";
$msg = "";
$msgType = "";

if (isset($_POST["submit"])) {
    require("./connection.php");

    $email = $_POST["usermail"];
    $pwd = $_POST["userpsw"];

    $query = "SELECT psw FROM user WHERE email = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 0) {
        $msgType = "danger";
        $msg = "Usuário não cadastrado.";
    } else {
        $row = mysqli_fetch_assoc($result);
        $pwd_bd = $row["psw"];

        if (md5($pwd) === $pwd_bd) {
            // Definir variáveis de sessão
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $email; // Ou outro identificador de usuário

            // Redirecionar para a página inicial ou outra página
            header("Location: index.php");
            exit();
        } else {
            $msgType = "danger";
            $msg = "User ou email inválido.";
        }
    }
}

?>



<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cidadania Matos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./CSS/styles.css">
    <style>
        body {
            background-image: url(./images/bg\ login.png);
            background-repeat: no-repeat;
        }

        .btn {
            background-color: #28306E;
            border: none;
        }

        .btn:hover {
            background-color: #9E9E9E !important;
        }

        .fraselog {
            color: #90A4AE;
        }

        .fraselog a {
            color: #263238;
            text-decoration: none;
        }

        H5 {
            color: #28306E;
        }

        label {
            color: #263238;
        }

        @media (min-width: 768px) {
            .title-outside {
                display: block;
            }

            .title-inside {
                display: none;
            }
        }

        @media (max-width: 767px) {
            .title-outside {
                display: none;
            }

            .title-inside {
                display: block;
            }
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <!-- Título fora do formulário para telas maiores -->
                <h5 class="D6 title-outside text-center mt-3">Login</h5>
                <form class="mt-3 mb-5" method="post" enctype="multipart/form-data">
                    <div class="card align-items-center">
                        <!-- Título dentro do formulário para dispositivos móveis -->
                        <h5 class="D6 title-inside mt-3">Login</h5>
                        <div class="mt-3 alert alert-<?php echo $msgType; ?>" role="alert">
                            <?php echo $msg; ?>
                        </div>
                        <div class="card-body d-flex row p-0 m-3 align-items-center">
                            <div class="mb-2 p-0">
                                <label for="exampleInputEmail1" class="body16reg form-label mb-1">Email</label>
                                <input type="email" class="form-control" id="usermail" name="usermail" required value="<?php ?>" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 p-0">
                                <label for="exampleInputEmail1" class="body16reg form-label">Senha</label>
                                <input type="password" class="form-control" id="userpsw" name="userpsw" required value="<?php ?>" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" name="submit" class="body16md btn btn-primary">Login</button>
                            <p class="fraselog body12md card-text text-center mt-3">Não possui login? <a href="singup.php"> Cadastre-se</a>.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>