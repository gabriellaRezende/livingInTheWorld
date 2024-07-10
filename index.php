<?php

session_start();

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

  .body{
    margin-top: 100px;
  }

  .bred{
    background-color: #FCF7F2;
    padding-top: 20px;
    padding-left: 20px;
  }

  </style>

</head>

<body class="vh-100 d-flex flex-column justify-content-between">
  <!-- header -->
   
  <div class="d-flex flex-column fixed-top mb-5">
  <?php include "header.php"; ?>

  
    <ol class="bred breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
    </ol>
  </div>


  <div class="body">
    
  <div> bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>
  <div>bla bla bla</div>

  </div>

  <!-- Footer -->
  <?php include "footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>