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


<body>
    <form>
        <div class="container log">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card align-items-center">
                        <h5 class="">Singup</h5>
                        <div class="card-body d-flex row p-0 m-3 align-items-center">
                            <div class="mb-2 p-0">
                                <label for="exampleInputEmail1" class="form-label mb-1">Nome*</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" required value="<?php  ?>" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-2 p-0">
                                <label for="exampleInputEmail1" class="form-label mb-1">Email*</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" required value="<?php  ?>" aria-describedby="emailHelp">
                            </div>
                            <div class="row gap-3 ">
                                <div class="col p-0 mb-2">
                                    <label for="exampleInputEmail1" class="form-label mb-1">Gênero</label>
                                    <select class="form-select " aria-label="Default select example">
                                        <option selected>--</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Feminino</option>
                                        <option value="3">Prefiro não</option>
                                    </select>
                                </div>
                                <div class="col p-0 mb-2">
                                    <label for="exampleInputEmail1" class="form-label mb-1">Data de Nascimento*</label>
                                    <input type="date" class="form-control" placeholder="" aria-label="Last name">
                                </div>
                            </div>
                            <div class="mb-2 p-0">


                            </div>

                            <div class="mb-3 p-0">
                                <label for="exampleInputEmail1" class="form-label">Endereço*</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" required value="<?php  ?>" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 p-0">
                                <label for="exampleInputEmail1" class="form-label">Cód. Postal*</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" required value="<?php  ?>" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 p-0">
                                <label for="exampleInputEmail1" class="form-label">Senha*</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" required value="<?php  ?>" aria-describedby="emailHelp">
                            </div>

                            <a href="#" class="btn btn-primary">Cadastrar</a>
                            <p class="card-text"> Já possui login? <a href="login.php"> Login</a>.</p>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>