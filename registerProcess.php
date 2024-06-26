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
                    <div class="form-group">
                        Name Completo*
                        <input type="text" class="form-control" placeholder="" >
                    </div>

                    <div class="form-group tab">
                        Gênero*
                        <select class="form-select " aria-label="Default select example" oninput="this.className = ''">
                                        <option selected>--</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Feminino</option>
                                        <option value="3">Prefiro não</option>
                                    </select>
                    </div>

                    <div class="form-group">
                        Data de Nascimento*
                        <input type="date" class="form-control" placeholder="" aria-label="Last name" oninput="this.className = ''">
                    </div>

                    <div class="form-group tab">
                        Local de Nascimento*
                        <input type="text" class="form-control" placeholder="" oninput="this.className = ''">
                    </div>

                    <div class="form-group tab">
                        País de Nascimento*
                        <input type="text" class="form-control" placeholder="" oninput="this.className = ''">
                    </div>

                    <div class="form-group tab">
                        Name do Pai*
                        <input type="text" class="form-control" placeholder="" oninput="this.className = ''">
                    </div>

                    <div class="form-group tab">
                        Name da Mãe*
                        <input type="text" class="form-control" placeholder="" oninput="this.className = ''">
                    </div>

                    <div class="form-group tab">
                        N° de Identificação Nacional
                        <input type="text" class="form-control" placeholder="CPF/Identidade/Habilitação" oninput="this.className = ''">
                    </div>

                    <div class="form-group tab">
                        Name Completo
                        <input type="text" class="form-control" placeholder="" oninput="this.className = ''">
                    </div>

                    <div class="form-group tab">
                        Name Completo
                        <input type="text" class="form-control" placeholder="" oninput="this.className = ''">
                    </div>

                    <div class="form-group tab">
                        Name Completo
                        <input type="text" class="form-control" placeholder="" oninput="this.className = ''">
                    </div>

                    <div class="form-group tab">
                        Name Completo
                        <input type="text" class="form-control" placeholder="" oninput="this.className = ''">
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