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


</style>


<body>
    <div>
        <img src="./images/Logo_name Azul.png" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <form id="regForm" action="">

                    <h1>Register:</h1>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>

                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">Name:
                        <p><input placeholder="First name..." oninput="this.className = ''"></p>
                        <p><input placeholder="Last name..." oninput="this.className = ''"></p>
                    </div>

                    <div class="tab">Contact Info:
                        <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
                        <p><input placeholder="Phone..." oninput="this.className = ''"></p>
                    </div>

                    <div class="tab">Birthday:
                        <p><input placeholder="dd" oninput="this.className = ''"></p>
                        <p><input placeholder="mm" oninput="this.className = ''"></p>
                        <p><input placeholder="yyyy" oninput="this.className = ''"></p>
                    </div>

                    <div class="tab">Login Info:
                        <p><input placeholder="Username..." oninput="this.className = ''"></p>
                        <p><input placeholder="Password..." oninput="this.className = ''"></p>
                    </div>

                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>

                </form>

                <form action="" method="post">
                    <div id="step_1" class="step">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div id="step_2" class="step">
                        <div class="form-group">
                            <label for="end">Endereço:</label>
                            <input type="text" name="end" id="end" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="fone">Telefone:</label>
                            <input type="tel" name="fone" id="fone" class="form-control">
                        </div>
                    </div>
                    <div id="step_3" class="step">
                        <div class="form-group">
                            <label for="cep">CEP:</label>
                            <input type="text" name="cep" id="cep" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro:</label>
                            <input type="text" name="bairro" id="bairro" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <button class="btn btn-block btn-secondary" id="prev">Anterior</button>
            </div>
            <div class="col-lg-6">
                <button class="btn btn-block btn-secondary" id="next">Próximo</button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>