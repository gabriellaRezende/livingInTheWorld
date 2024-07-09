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

body{
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
                    <h5 class="">Login</h5>
                        <div class="card-body d-flex row p-0 m-3 align-items-center">
                            <input name="email" type="text" class="form-control mb-2" id="username" placeholder="Login" required value="<?php  ?>">
                            <input name="psw" type="password" class="form-control mb-2" id="pwd" placeholder="Password" required value="<?php ?>">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                            <p class="card-text">Não possui login? <a href="singup.php"> Cadastre-se</a>.</p>
                            
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>