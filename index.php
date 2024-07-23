<?php

session_start();

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
    .body {
      margin-left: ;
    }

    .feat {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      flex-wrap: wrap;
    }

    .card {
      flex: 1 1 calc(33.333% - 20px);
      max-width: calc(33.333% - 20px);
    }

    .apresenta {
      background-color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px;
      border-radius: 5px;
      margin-bottom: 20px;
      width: 75%;
      max-width: 100%;
      margin: 20px auto;
      box-sizing: border-box;
    }

    .apresenta img {
      max-width: 100%;
      height: auto;
      flex: 1;
    }

    .irma {
      padding-right: 16px;
    }

    .faixa {
      background-color: #28306E;
      color: white;
    }

    @media (max-width: 768px) {
      .card {
        flex: 1 1 100%;
        max-width: 100%;
      }

      .irma {
        display: none;
      }
      .faixa {
        flex-direction: column;
        text-align: center;
     }

    }
  </style>

</head>

<body class="vh-100 d-flex flex-column">
  <!-- header -->

  <div class="d-flex flex-column fixed-top mb-5">
    <?php include "header.php"; ?>
  </div>

  <ol class="bred breadcrumb">
    <li class="breadcrumb-item"><a href="#" class="body16md" style="color: #28306E;">Home</a></li>
  </ol>

  <div class="body">

    <div class="apresenta card-container w-75">
      <img src="./images/Logo_index.svg" alt="Logo">
      <img class="irma" src="./images/irmãs_index.svg" alt="Irmãs">
    </div>

    <h5 class="D5 text-center">Escolha o processo ideal para você!!</h5>

    <div class="feat card-container ps-4 pe-4 pt-4 text-center">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="py-3">
          <h4 class="my-0 fw-normal">Cidadania</h4>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <div>
              <p class="H6"> Descendente </p>
              <p class="body14reg"> Assistência completa para obter a sua cidadania portuguesa por descendência. </p>
            </div>
            <div>
              <p class="H6"> Matrimónio </p>
              <p class="body14reg"> Auxiliamos casais na obtenção da cidadania portuguesa por matrimônio. </p>
            </div>
          </div>
          <div>
            <button type="button" class="w-100 btn btn-lg btn-primary">Escolher</button>
          </div>
        </div>
      </div>

      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="py-3">
          <h4 class="my-0 fw-normal">Visto</h4>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <div>
              <p class="H6"> Temporário </p>
              <p class="body14reg"> Facilitamos a obtenção de vistos temporários para Portugal, seja para turismo, estudos ou negócios. </p>
            </div>
            <div>
              <p class="H6"> Residência </p>
              <p class="body14reg"> Suporte completo para a obtenção de vistos de residência em Portugal. </p>
            </div>
            <div>
              <p class="H6"> Procura de Trabalho </p>
              <p class="body14reg"> Ajudamos você a obter o visto de procura de trabalho em Portugal, permitindo que você busque oportunidades de emprego no país. </p>
            </div>
          </div>
          <div>
            <button type="button" class="w-100 btn btn-lg btn-primary">Escolher</button>
          </div>
        </div>
      </div>

      <div class="card w-75 mb-4 rounded-3 shadow-sm">
        <div class="py-3">
          <h4 class="my-0 fw-normal">Documentação</h4>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <div>
              <p class="H6"> Obtenção de NIF</p>
              <p class="body14reg"> Assistimos na obtenção do NIF (Número de Identificação Fiscal), essencial para qualquer atividade financeira em Portugal. </p>
            </div>
            <div>
              <p class="H6"> Obtenção de NISS </p>
              <p class="body14reg"> Oferecemos suporte para a obtenção do NISS (Número de Identificação da Segurança Social), necessário para trabalhar e acessar benefícios sociais em Portugal </p>
            </div>
            <div>
              <p class="H6"> Consultoria Juridica </p>
              <p class="body14reg"> Disponibilizamos assessoria jurídica especializada para todas as suas necessidades em Portugal. </p>
            </div>
          </div>
          <div>
            <button type="button" class="w-100 btn btn-lg btn-primary">Escolher</button>
          </div>
        </div>
      </div>
    </div>

    <div class="faixa card-conteiner w-100 d-flex flex-row justify-content-between align-items-center">
      <div>
        <h1 class="D1 ps-5">100% SEGURO</h1>
      </div>
      <div>
        <h4 class="H4 pe-5"> Seguindo as leis de compartilhamento de dados. </h4>
      </div>
    </div>

    <div class="container col-xxl-8 px-4 py-5 ">
      <div class="row flex-lg-row-reverse align-items-center g-5 bg-white">
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Resposta Rápida, Processo Rápido</h1>
          <p class="lead">Nossos feedbacks as requisições de processos demoram entre 1 a 2 dias úteis.</p>
        </div>
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="./images/stopwatch.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="200" height="200" loading="lazy">
        </div>
      </div>
    </div>

  </div>


  <!-- Footer -->
  <?php include "footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>