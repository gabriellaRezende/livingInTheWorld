<?php

require 'connection.php';

$query_cid = 'SELECT price, p.name processname, c.name catname, p.description processdesc, c.description catdesc FROM processo p, category c WHERE p.id_category = c.id_category AND c.id_category = 1';

$query_vis = 'SELECT price, p.name processname, c.name catname, p.description processdesc, c.description catdesc FROM processo p, category c WHERE p.id_category = c.id_category AND c.id_category = 2';

$query_doc = 'SELECT price, p.name processname, c.name catname, p.description processdesc, c.description catdesc FROM processo p, category c WHERE p.id_category = c.id_category AND c.id_category = 3';

/*cidadania*/
$result_cid = mysqli_query($connection, $query_cid);
$servico_cid = mysqli_fetch_assoc($result_cid);

$categoria_cid = $servico_cid['catname'];
$description_cid = $servico_cid['catdesc'];

/*visto*/
$result_vis = mysqli_query($connection, $query_vis);
$servico_vis = mysqli_fetch_assoc($result_vis);

$categoria_vis = $servico_vis['catname'];
$description_vis = $servico_vis['catdesc'];

/*documentação*/
$result_doc = mysqli_query($connection, $query_doc);
$servico_doc = mysqli_fetch_assoc($result_doc);

$categoria_doc = $servico_doc['catname'];
$description_doc = $servico_doc['catdesc'];


?>


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

        .bred {
            background-color: #FCF7F2;
            padding-top: 20px;
            padding-left: 20px;
        }
    </style>

</head>

<body>
    <!-- header -->
    <?php include "header.php"; ?>

    <ol class="bred breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
    </div>


    <div class="d-flex justify-content-between m-5">
        <a class="btn but" type="" id="btn_cid" href="#cidadania"> Cidadania</a>
        <a class="btn but" type="" id="btn_vis" href="#visto"> Visto</a>
        <a class="btn but" type="" id="btn_doc" href="#documentacao"> Documentação</a>
    </div>

    <div class="container ">

        <div class="row row-cols-1 row-cols-md-2 align-items-md-start g-5" id="cidadania">
            <div class="col d-flex flex-column align-items-start gap-2 pt-5">
                <h2 class="fw-bold text-body-emphasis"><?php echo $categoria_cid; ?></h2>
                <p class="text-body-secondary"><?php echo $description_cid; ?></p>
                <a href="#" class="btn btn-primary btn-lg">Iniciar Processo</a>
            </div>
            <?php
            foreach ($result_cid as $servico_cid) {

                $process = $servico_cid['processname'];
                $description_p = $servico_cid['processdesc'];
                $price = $servico_cid['price'];

            ?>
                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">
                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <i class="bi bi-2-circle"></i>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis"><?php echo $process; ?></h4>
                            <p class="text-body-secondary"><?php echo $description_p; ?></p>
                            <p class="text-body-secondary">a partir de <?php echo $price; ?> euros</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


        <div class="row row-cols-1 row-cols-md-2 align-items-md-start g-5" id="visto">
            <div class="col d-flex flex-column align-items-start gap-2 pt-5">
                <h2 class="fw-bold text-body-emphasis"><?php echo $categoria_vis; ?></h2>
                <p class="text-body-secondary"><?php echo $description_vis; ?></p>
                <a href="#" class="btn btn-primary btn-lg">Iniciar Processo</a>
            </div>

            <?php
            foreach ($result_vis as $servico_vis) {
                $process = $servico_vis['processname'];
                $description_p = $servico_vis['processdesc'];
                $price = $servico_vis['price'];
            ?>

                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">
                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <i class="bi bi-2-circle"></i>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis"><?php echo $process; ?></h4>
                            <p class="text-body-secondary"><?php echo $description_p; ?></p>
                            <p class="text-body-secondary">a partir de <?php echo $price; ?> euros</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-start g-5" id="documentacao">
            <div class="col d-flex flex-column align-items-start gap-2 pt-5">
                <h2 class="fw-bold text-body-emphasis"><?php echo $categoria_doc; ?></h2>
                <p class="text-body-secondary"><?php echo $description_doc; ?></p>
                <a href="#" class="btn btn-primary btn-lg">Iniciar Processo</a>
            </div>

            <?php
            foreach ($result_doc as $servico_doc) {
                $process = $servico_doc['processname'];
                $description_p = $servico_doc['processdesc'];
                $price = $servico_doc['price'];
            ?>

                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">
                        <div class="col d-flex flex-column gap-2">
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                                <i class="bi bi-2-circle"></i>
                            </div>
                            <h4 class="fw-semibold mb-0 text-body-emphasis"><?php echo $process; ?></h4>
                            <p class="text-body-secondary"><?php echo $description_p; ?></p>
                            <p class="text-body-secondary">a partir de <?php echo $price; ?> euros</p>
                        </div>


                    </div>
                </div>
            <?php } ?>
        </div>
    </div>






    <!-- Footer -->
    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#cidadania').show();
            $('#visto').hide();
            $('#documentacao').hide();
        })

        $('#btn_cid').click(function() {
            $('#cidadania').show();
            $('#visto').hide();
            $('#documentacao').hide();
        });

        $('#btn_vis').click(function() {
            $('#cidadania').hide();
            $('#visto').show();
            $('#documentacao').hide();
        });

        $('#btn_doc').click(function() {
            $('#cidadania').hide();
            $('#visto').hide();
            $('#documentacao').show();
        });
    </script>

</body>

</html>