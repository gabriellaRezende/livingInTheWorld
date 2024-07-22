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
      margin-top: 100px;
    }

    

  </style>

</head>

<body class="vh-100 d-flex flex-column justify-content-between">
  <!-- header -->

  <div class="d-flex flex-column fixed-top mb-5">
    <?php include "header.php"; ?>
  </div>
  
  <ol class="bred breadcrumb">
    <li class="breadcrumb-item"><a href="#" class="body16md" style="color: #28306E;">Home</a></li>
  </ol>

  <div class="body">

    


  </div>

  <!-- Footer -->
  <?php include "footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>