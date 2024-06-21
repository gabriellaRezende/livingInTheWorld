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

    .prof-img{
        filter: drop-shadow(0.35rem 0.35rem 0.4rem rgb(0,0,0,0.5));
    };

    .card-prof{
        width: auto; 
        /*não consigo entender pq desconfigura se eu tiro*/
    }

    .mg-infos{
        margin-top: 80px;
        margin-bottom: 80px;
    }
    </style>
</head>



<body class="vh-100 d-flex flex-column justify-content-between align-itens-center">

<div>
    <!-- header -->
    <?php include "header.php"; ?>
</div>
    

    <div class="mg-infos">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container col-lg-8 px-4" style="background-color: var(--cor-Bgcomponente);">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
                            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="container col-lg-8 px-4 rounded-2" style="background-color: var(--cor-Bgcomponente);">
                    <div class="row flex-lg-row-reverse align-items-center">
                        <div class="col-12 col-lg-6 pt-3">
                            <img src="./images/Irmã_nova_matos-removebgrop.png" class="d-block mx-lg-auto img-fluid prof-img" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Nome da Pessoa, 27 anos</h1>
                            <p class="lead fs-6">Na minha função, eu realizo uma série de atividades que visam facilitar o processo de obtenção da cidadania portuguesa para nossos clientes. Uma das minhas principais responsabilidades é conduzir pesquisas genealógicas detalhadas. Isso envolve investigar e confirmar a elegibilidade dos clientes para a cidadania portuguesa com base em suas origens familiares. Utilizo diversos recursos e bancos de dados para rastrear documentos históricos e estabelecer as conexões necessárias.</p>
                            

                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Fale Comigo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</div>
    

<div>
    <!-- Footer -->
        <?php include "footer.php"; ?>
</div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>