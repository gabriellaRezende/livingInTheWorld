
<?php include 'breadcrumb.php'; ?>

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

        .form label{
            color: #263238;
        }

        .but {
            background-color: #28306E;
            border: none;
        }

        .but:hover {
            background-color: #9E9E9E !important;
        }

        .talk{
            color:#28306E;
        }

        p{
            color: #607D8B;
        }

        h5{
            color: #28306E;
        }

        .accordion-button:active{
            background-color: #9E9E9E;
        }

        @media (max-width: 768px) {
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

        .but {
            background-color: #28306E;
            border: none;
            width: 100%;
        }

        .but:hover {
            background-color: #9E9E9E !important;
        }
    }
    </style>
</head>



<body class="vh-100 d-flex flex-column justify-content-between align-itens-center">

<div class="d-flex flex-column fixed-top mb-5">
    <?php include "header.php"; ?>
  </div>

  <div class="bred"> <?php echo generateBreadcrumb(); ?> </div>
    <div class="">
    

        <div class="card mb-5 mt-5 ms-5 me-5">
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

    <div>
        <!-- Footer -->
        <?php include "footer.php"; ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>