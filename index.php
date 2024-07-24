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

    .but {
      background-color: #28306E;
      border: none;
    }

    .but:hover {
      background-color: #9E9E9E !important;
    }

    @media (max-width: 768px) {
      .card {
        flex: 1 1 100%;
        max-width: 100%;
      }

      .card-body {
        flex-direction: column;
        text-align: center;
      }

      .card-body .flex-fill {
        margin-bottom: 20px;
        text-align: center;
      }

      .form {
        width: 100%;
      }

      .irma {
        display: none;
      }

      .faixa {
        flex-wrap: wrap;
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

    <h5 class="D5 text-center" style="color: #28306E;">Escolha o processo ideal para você!!</h5>

    <div class="feat card-container ps-4 pe-4 pt-4 text-center">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="py-3">
          <h4 class="my-0 H4" style="color: #28306E;">Cidadania</h4>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <div>
              <p class="H6" style="color: #263238;"> Descendente </p>
              <p class="body14reg" style="color: #607D8B;"> Assistência completa para obter a sua cidadania portuguesa por descendência. </p>
            </div>
            <div>
              <p class="H6" style="color: #263238;"> Matrimónio </p>
              <p class="body14reg" style="color: #607D8B;"> Auxiliamos casais na obtenção da cidadania portuguesa por matrimônio. </p>
            </div>
          </div>
          <div>
            <button type="button" class="w-100 but btn btn-lg btn-primary">Escolher</button>
          </div>
        </div>
      </div>

      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="py-3">
          <h4 class="my-0 H4" style="color: #28306E;">Visto</h4>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <div>
              <p class="H6" style="color: #263238;"> Temporário </p>
              <p class="body14reg" style="color: #607D8B;"> Facilitamos a obtenção de vistos temporários para Portugal, seja para turismo, estudos ou negócios. </p>
            </div>
            <div>
              <p class="H6" style="color: #263238;"> Residência </p>
              <p class="body14reg" style="color: #607D8B;"> Suporte completo para a obtenção de vistos de residência em Portugal. </p>
            </div>
            <div>
              <p class="H6" style="color: #263238;"> Procura de Trabalho </p>
              <p class="body14reg" style="color: #607D8B;"> Ajudamos você a obter o visto de procura de trabalho em Portugal, permitindo que você busque oportunidades de emprego no país. </p>
            </div>
          </div>
          <div>
            <button type="button" class="w-100 but btn btn-lg btn-primary">Escolher</button>
          </div>
        </div>
      </div>

      <div class="card w-75 mb-4 rounded-3 shadow-sm">
        <div class="py-3">
          <h4 class="my-0 H4" style="color: #28306E;">Documentação</h4>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <div>
              <p class="H6" style="color: #263238;"> Obtenção de NIF</p>
              <p class="body14reg" style="color: #607D8B;"> Assistimos na obtenção do NIF (Número de Identificação Fiscal), essencial para qualquer atividade financeira em Portugal. </p>
            </div>
            <div>
              <p class="H6" style="color: #263238;"> Obtenção de NISS </p>
              <p class="body14reg" style="color: #607D8B;"> Oferecemos suporte para a obtenção do NISS (Número de Identificação da Segurança Social), necessário para trabalhar e acessar benefícios sociais em Portugal </p>
            </div>
            <div>
              <p class="H6" style="color: #263238;"> Consultoria Juridica </p>
              <p class="body14reg" style="color: #607D8B;"> Disponibilizamos assessoria jurídica especializada para todas as suas necessidades em Portugal. </p>
            </div>
          </div>
          <div>
            <button type="button" class="w-100 but btn btn-lg btn-primary">Escolher</button>
          </div>
        </div>
      </div>
    </div>

    <div class="faixa card-conteiner w-100 d-flex flex-row  justify-content-between align-items-center">
      <div>
        <h1 class="D1 ps-5">100% SEGURO</h1>
      </div>
      <div>
        <h4 class="H4 pe-5"> Seguindo as leis de compartilhamento de dados. </h4>
      </div>
    </div>

    <div class="container col-xxl-8 mt-4 mb-4 bg-white rounded p-3">
      <div class="d-flex flex-wrap align-items-center">
        <div class="col-lg-6">
          <img src="./images/timer-outline.svg" class="d-block mx-lg-auto img-fluid" style="color: #28306E;" alt="Bootstrap Themes" width="200" height="200" loading="lazy">
        </div>
        <div class="col-10 col-sm-8 col-lg-6">
          <h1 class="D4 mb-3" style="color: #28306E;">Resposta Rápida, Processo Rápido</h1>
          <p class="H5" style="color: #28306E;">Nossos feedbacks demoram entre 1 a 2 dias úteis.</p>
        </div>
      </div>
    </div>

    <div class="container col-xxl-8 mt-4 mb-4 bg-white rounded">
      <div class="d-flex flex-wrap align-items-center p-3">
        <div class="col-lg-6">
          <h1 class="D6 mb-3" style="color: #28306E;">Acompanhamento 100% pelo portal do usuário</h1>
          <p class="H5" style="color: #28306E;">Todas as informações sobre o seu processo fica registrado no portal do cliente para ser visualizado a qualquer hora.</p>
        </div>
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="./images/desktop-outline.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="200" height="200" loading="lazy">
        </div>
      </div>
    </div>

    <div class="row justify-content-between flex-wrap align-items-center mx-2 mb-5">
      <div class="col-md-4  bg-white p-2 rounded">
        <div class="d-flex gap-2">
          <img class="rounded-circle" src="./images/Rectangle-2.png" width="100" height="100" />
          <div class="flex-fill">
            <div class="d-flex justify-content-between ps-4 pe-2">
              <h5 class="H5">Jorge Ferreira</h5>
              <div class="stars" style="color: #FFC107 ;">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
            </div>
            <div>
              <p class="body12reg text-center">Estou extremamente satisfeito com o serviço prestado pela Cidadania Matos. A equipe foi muito atenciosa e me ajudou em todas as etapas do processo de obtenção da cidadania portuguesa. Recomendo a todos!</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4  bg-white p-2 rounded">
        <div class="d-flex gap-2">
          <img class="rounded-circle" src="./images/Rectangle-1.png" width="100" height="100" />
          <div class="flex-fill">
            <div class="d-flex justify-content-between ps-4 pe-2">
              <h5 class="H5">Luiza Santos</h5>
              <div class="stars" style="color: #FFC107 ;">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
            </div>
            <div>
              <p class="body12reg text-center">A Cidadania Matos facilitou muito a minha mudança para Portugal. Eles cuidaram de toda a documentação e me mantiveram informada durante todo o processo. Excelente atendimento e profissionalismo!</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4  bg-white p-2 rounded">
        <div class="d-flex gap-2">
          <img class="rounded-circle" src="./images/Rectangle.png" width="100" height="100" />
          <div class="flex-fill">
            <div class="d-flex justify-content-between ps-4 pe-2">
              <h5 class="H5">Lian Jabari</h5>
              <div class="stars" style="color: #FFC107 ;">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
            </div>
            <div>
              <p class="body12reg text-center">Tive uma experiência incrível com a Cidadania Matos. Eles foram rápidos, eficientes e sempre disponíveis para tirar minhas dúvidas. Graças a eles, consegui meu visto de residência sem complicações. Muito obrigado!</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center flex-wrap align-items-center mx-2 mb-5 gap-3">
      <div class="col-md-4 p-2 rounded w-25 h-auto" style="background-color: #28306E;">
        <div class=" card-body text-center">
          <img src="./images/flag.svg" />
          <h5 class="H1" style="color: white;">Missão</h5>
          <p class="H5" style="color: white;">Oferecer um olhar humanizado e menos burocrático para alcançar os objetivos de seus clientes</p>
        </div>
      </div>
      <div class="col-md-4 p-2 rounded w-25 h-auto" style="background-color: #28306E;">
        <div class="card-body text-center">
          <img src="./images/eye.svg" />
          <h5 class="H1" style="color: white;">Visão</h5>
          <p class="H5" style="color: white;">Consideramos que processos jurídicos e imigratórios podem ser fáceis se tiver o devido encaminhamento.</p>
        </div>
      </div>
      <div class="col-md-4 p-2 rounded w-25 h-auto" style="background-color: #28306E;">
        <div class=" card-body text-center">
          <img src="./images/diamond.svg" />
          <h5 class="H1" style="color: white;">Valores</h5>
          <p class="H5" style="color: white;"> - Integridade <br> - Profissionalismo <br> - Dedicação para alcançar os melhores resultados.</p>
        </div>
      </div>
    </div>


    <h5 class="D5 text-center">Perguntas Frequentes</h5>

    <div class="accordion w-90 m-5" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="body20reg accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Quem tem direito a cidadania portuguesa?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body body20reg">
            <strong>1. Descendentes de Portugueses:</strong>Filhos e netos de cidadãos portugueses podem solicitar a cidadania por descendência. <br>
            <strong>2. Cônjuges de Portugueses:</strong> Pessoas casadas ou em união estável com cidadãos portugueses por pelo menos três anos podem solicitar a cidadania por matrimônio. <br>
            <strong>3. Nascidos em Portugal:</strong>Indivíduos nascidos em Portugal, filhos de estrangeiros, podem ter direito à cidadania se um dos pais residir legalmente no país há pelo menos dois anos.<br>
            <strong>4. Naturalização:</strong>Estrangeiros que residem legalmente em Portugal por pelo menos cinco anos podem solicitar a cidadania por naturalização, desde que cumpram certos requisitos, como conhecimento básico da língua portuguesa.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="body20reg accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Quantas gerações têm direito à cidadania portuguesa?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body body20reg">
            O direito à cidadania portuguesa por descendência pode ser reivindicado até a terceira geração, ou seja, netos de cidadãos portugueses. No entanto, existem requisitos específicos que devem ser atendidos, como comprovação de laços efetivos com a comunidade portuguesa.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="body20reg accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Quanto custa o processo para o vistos para portugal?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body body20reg">
            O custo do processo para obtenção de vistos em Portugal pode variar dependendo do tipo de visto solicitado (temporário, residência ou procura de trabalho) e da complexidade do caso. Em geral, as taxas governamentais para vistos variam entre €75 e €90. Além disso, pode haver custos adicionais relacionados à preparação e tradução de documentos, bem como honorários de consultoria jurídica. Para obter uma estimativa precisa, recomendamos entrar em contato conosco para uma consulta personalizada.
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white mx-auto my-5 p-3 w-75">
      <div class="card-body d-flex gap-3">
        <div class="flex-fill ">
          <h1 class="talk D4 card-title">Fale com a gente!!!</h1>
          <p class="H4 card-text w-75 mt-4"> Envie sua dúvida que vamos retornar o mais rápido possível.</p>
        </div>

        <div class="form col-md-4 ">
          <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label body16reg">Nome</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label body16reg">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label body16reg">Assunto</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-1">
            <label for="exampleFormControlTextarea1" class="form-label body16reg">Dúvidas e Reclamações</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <a href="404page.php" class="but btn btn-primary">Enviar</a>
        </div>


      </div>
    </div>



  </div>


  <!-- Footer -->
  <?php include "footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>