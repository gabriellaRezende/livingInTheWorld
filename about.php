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

        @media (max-width: 767px){
            .flex-lg-row-reverse {
                flex-direction: column !important;
            }

            .container{
                margin: 16px;
            }

            .col-lg-6 {
                width: 100%;
                padding: 0;
            }

            .prof-img {
                margin-bottom: 20px;
                display: none;
            }
        }

    .prof-img{
        filter: drop-shadow(0.35rem 0.35rem 0.4rem rgb(0,0,0,0.5));
    };

    .card-prof{
        width: auto; 
        /*não consigo entender pq desconfigura se eu tiro*/
    }

    .mg-infos{
        margin-top: 20px;
        margin-bottom: 80px;
    }


    .but{
        background-color: #28306E;
        border: #28306E;
    }

    H1{
        color: #28306E;
    }

    p{
        color: #28306E;
    }

    </style>
</head>



<body class="vh-100 d-flex flex-column justify-content-between align-itens-center">

<div class="d-flex flex-column fixed-top mb-5">
    <?php include "header.php"; ?>
  </div>
  
  <ol class="bred breadcrumb">
    <li class="breadcrumb-item"><a href="index.php" class="crumb1 body16md">Home</a></li>
    <li class="breadcrumb-item"><a href="#" class="crumb2 body16md">Sobre Nós</a></li>
  </ol>
    

    <div class="mg-infos">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="container col-lg-8 px-4 rounded-2 w-100" style="background-color: var(--cor-Bgcomponente);">
                    <div class="row flex-lg-row-reverse align-items-center">
                        <div class="col-12 col-lg-6 pt-3">
                            <img src="./images/Irmã_velha_matos-removebg-preview menor.png" class="d-block mx-lg-auto img-fluid prof-img d-none d-md-block" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="D5 mb-3" >Clara Matos, 41 anos</h1>
                            <p class="H5 mb-3">Graduada em Direito pela Universidade do Porto, com especialização em direito internacional.</p>
                            <p class="H6 mb-3"> 18 anos de experiência em consultoria jurídica e processos de vistos </p>
                            <p class="body16reg descri">Forneço consultoria especializada em documentação e legalização para nossos clientes, analisando cada caso individualmente e oferecendo soluções personalizadas para a obtenção de documentos necessários. Gerencio e acompanho processos de legalização de documentos, como certidões de nascimento, casamento e antecedentes criminais, preparando e revisando toda a documentação necessária para garantir que esteja em conformidade com as exigências das autoridades portuguesas. Além disso, participo de webinars e eventos online para educar o público sobre os processos de legalização de documentos.</p>
                            

                            <div class="d-grid gap-2 d-md-flex justify-content-md-start pb-4">
                                <button type="button" class=" but btn btn-primary btn-lg px-4 me-md-2">Fale Comigo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="container col-lg-8 px-4 rounded-2 w-100" style="background-color: var(--cor-Bgcomponente);">
                    <div class="row flex-lg-row-reverse align-items-center">
                        <div class="col-12 col-lg-6 pt-3">
                            <img src="./images/Irmã_nova_matos-removebgrop.png" class="d-block mx-lg-auto img-fluid prof-img d-none d-md-block" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="D5 lh-1 mb-3">Ana Matos, 32 anos</h1>
                            <p class="H5 lh-1 mb-3">Graduada em Direito pela Universidade de Lisboa</p>
                            <p class="H6 lh-1 mb-3"> 10 anos de experiencia em processos de imigração e naturalização. </p>
                            <p class="body16reg">Meu trabalho envolve fornecer consultoria especializada para pessoas que desejam imigrar para Portugal ou obter a cidadania portuguesa. Analiso cada caso individualmente e ofereço soluções personalizadas para atender às necessidades específicas de cada cliente. Gerencio e acompanho todos os processos de imigração, incluindo vistos de residência, trabalho e estudo, preparando e revisando toda a documentação necessária para garantir que tudo esteja em conformidade com as exigências das autoridades portuguesas. Represento nossos clientes em processos administrativos e judiciais relacionados à imigração e me mantenho atualizada sobre as mudanças nas leis de imigração e cidadania em Portugal para oferecer o melhor serviço possível. Realizo reuniões presenciais e virtuais com nossos clientes para discutir suas necessidades e preocupações, oferecendo suporte contínuo durante todo o processo de imigração, garantindo que nossos clientes se sintam seguros e bem informados.</p>
                            

                            <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
                                <button type="button" class="but btn btn-primary btn-lg px-4 me-md-2">Fale Comigo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev "  type="button"  data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="step carousel-control-prev-icon" aria-hidden="true" " ></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
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