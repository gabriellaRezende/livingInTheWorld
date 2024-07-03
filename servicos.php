<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cidadania Matos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./CSS/styles.css">

    <style>
        .but {
            color: #28306E;
            border-color: #28306E;
            border-radius: 50px;
        }

        .but:hover {
            color: white;
            border-color: #28306E;
            border-radius: 50px;
            background-color: #28306E;
        }

        .but:active {
            color: white;
            border-color: #28306E;
            border-radius: 50px;
            background-color: #28306E;
        }
    </style>

</head>

<body>
    <!-- header -->
    <?php include "header.php"; ?>


    <div class="d-flex justify-content-between m-5">
        <button class="btn but" type="">Cidadania</button>
        <button class="btn but" type="">Visto</button>
        <button class="btn but" type="">Documentação</button>
    </div>

    <div class="container ">

        <div class="row row-cols-1 row-cols-md-2 align-items-md-start g-5">
            <div class="col d-flex flex-column align-items-start gap-2 pt-5">
                <h2 class="fw-bold text-body-emphasis">Categoria</h2>
                <p class="text-body-secondary">Descrição da categoria que vai estar no banco.</p>
                <a href="#" class="btn btn-primary btn-lg">Iniciar Processo</a>
            </div>

            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="bi bi-2-circle"></i>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Processo da categoria</h4>
                        <p class="text-body-secondary">Descrição da categoria</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="bi bi-2-circle"></i>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
                        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="bi bi-2-circle"></i>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
                        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="bi bi-2-circle"></i>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Featured title</h4>
                        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Footer -->
    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>