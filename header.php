  <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
  }
  ?>


  <nav class="shadow-sm navbar navbar-expand-lg" style="background-color: var(--cor-Bgcomponente)" ;>
    <div class="container-fluid">
      <a class="body20reg navbar-brand me-4" href="#">
        <img src="./images/logo CR.svg" alt="Cidadania Matos" width="30" height="30">
        Cidadania Matos
      </a>
      <button class="navbar-toggler border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="align-items: center;">
          <li class="nav-item">
            <a class="body16reg nav-link h1" style="margin-bottom:0;" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="body16reg nav-link" aria-current="page" href="about.php">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="body16reg nav-link" href="servicos.php">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="body16reg nav-link " aria-disabled="true" href="contacto.php">Contato</a>
          </li>
        </ul>

        <div class="d-flex" role="search">
          <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
            <form method="post" class="d-inline">
              <button type="submit" name="logout" class="body16reg btn">Logout</button>
            </form>
            <button type="button" class="btn"> <i class="bi bi-person-circle"></i> </button>
          <?php else : ?>
            <a href="login.php" class="body16reg btn">Login</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>