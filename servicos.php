<?php

require 'connection.php';

$query_cid = 'SELECT icon_svg, p.name processname, c.name catname, p.description processdesc, c.description catdesc FROM processo p, category c WHERE p.id_category = c.id_category AND c.id_category = 1';

$query_vis = 'SELECT icon_svg, p.name processname, c.name catname, p.description processdesc, c.description catdesc FROM processo p, category c WHERE p.id_category = c.id_category AND c.id_category = 2';

$query_doc = 'SELECT icon_svg, p.name processname, c.name catname, p.description processdesc, c.description catdesc FROM processo p, category c WHERE p.id_category = c.id_category AND c.id_category = 3';

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

        .iniciar {
            background-color: #28306E;
            border: none;
        }

        .iniciar:hover {
            background-color: #9E9E9E !important;
        }

        .tag {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background-color: #28306E;
            border-radius: 5px;
            width: 48px;
            height: 48px;
            color: white;
        }
    </style>

</head>

<body>
    <!-- header -->
    <div class="d-flex flex-column fixed-top mb-5">
        <?php include "header.php"; ?>
    </div>

    <ol class="bred breadcrumb">
        <li class="breadcrumb-item"><a href="index.php" class="crumb1 body16md">Home</a></li>
        <li class="breadcrumb-item"><a href="#" class="crumb2 body16md">Sobre Nós</a></li>
    </ol>


    <div class="d-flex justify-content-between m-4">
        <a class="body16md btn but" type="" id="btn_cid" href="#cidadania"> Cidadania</a>
        <a class="body16md btn but" type="" id="btn_vis" href="#visto"> Visto</a>
        <a class="body16md btn but" type="" id="btn_doc" href="#documentacao"> Documentação</a>
    </div>

    <div class="container">

        <div class="row align-items-start g-5 pt-5 mb-3" id="cidadania">
            <div class="col-md-4 d-flex flex-column align-items-start gap-2 m-0 pt-0 w-100">
                <h2 class="D3"><?php echo $categoria_cid; ?></h2>
                <p class="H5"><?php echo $description_cid; ?></p>
                <a href="#" class="body16md iniciar btn btn-primary btn-lg align-self-start">Iniciar Processo</a>
            </div>
            <div class="col-md-8 w-100">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <?php
                    foreach ($result_cid as $servico_cid) {
                        $process = $servico_cid['processname'];
                        $description_p = $servico_cid['processdesc'];
                        $icon_svg = $servico_cid['icon_svg'];
                    ?>
                        <div class="col d-flex flex-column gap-2">
                            <div class="tag">
                                <?php echo $icon_svg; ?>
                            </div>
                            <h4 class="H4"><?php echo $process; ?></h4>
                            <p class="body16md"><?php echo $description_p; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="row align-items-start g-5 pt-5 mb-3" id="visto">
            <div class="col-md-4 d-flex flex-column align-items-start gap-2 m-0 pt-0 w-100">
                <h2 class="D3"><?php echo $categoria_vis; ?></h2>
                <p class="H5"><?php echo $description_vis; ?></p>
                <a href="#" class="body16md iniciar btn btn-primary btn-lg align-self-start">Iniciar Processo</a>
            </div>
            <div class="col-md-8 w-100">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <?php
                    foreach ($result_vis as $servico_vis) {
                        $process = $servico_vis['processname'];
                        $description_p = $servico_vis['processdesc'];
                        $icon_svg = $servico_vis['icon_svg'];
                    ?>
                        <div class="col d-flex flex-column gap-2">
                            <div class="tag">
                                <?php echo $icon_svg; ?>
                            </div>
                            <h4 class="H4"><?php echo $process; ?></h4>
                            <p class="body16md"><?php echo $description_p; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="row align-items-start g-5 pt-5 mb-3" id="documentacao">
            <div class="col-md-4 d-flex flex-column align-items-start gap-2 m-0 pt-0 w-100">
                <h2 class="D3"><?php echo $categoria_doc; ?></h2>
                <p class="H5"><?php echo $description_doc; ?></p>
                <a href="#" class="body16md iniciar btn btn-primary btn-lg align-self-start">Iniciar Processo</a>
            </div>
            <div class="col-md-8 w-100">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <?php
                    foreach ($result_doc as $servico_doc) {
                        $process = $servico_doc['processname'];
                        $description_p = $servico_doc['processdesc'];
                        $icon_svg = $servico_doc['icon_svg'];
                    ?>
                        <div class="col d-flex flex-column gap-2">
                            <div class="tag">
                                <?php echo $icon_svg; ?>
                            </div>
                            <h4 class="H4"><?php echo $process; ?></h4>
                            <p class="body16md"><?php echo $description_p; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>






    <!-- Footer -->
    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    <script>
        /*const urlParams = new URLSearchParams(window.location.search);
        const section = urlParams.get('section');
        
        if (section === 'cidadania') {
            $('#cidadania').show();
        } else if (section === 'visto') {
            $('#visto').hide();
        } else if (section === 'documentacao') {
            $('#documentacao').hide();
        }*/


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