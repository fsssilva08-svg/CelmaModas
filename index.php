<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celma Modas</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shorcut icon" href="imagens//borboletaL.png">
</head>
<body>
  
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="imagens/CelmaModas.png" title="Celma Modas">
    </a>



  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>


        <li class="nav-item">
         
              <a class="nav-link" href="vestidos">
                Vestidos
              </a>
         
        </li>

        <li class="nav-item">
         
              <a class="nav-link" href="camisas">
                Camisas 
              </a>
         
        </li>

        <li class="nav-item">
         
              <a class="nav-link" href="Quemsomos">
                Quem somos
              </a>
          
        </li>

        <li class="nav-item">
         
              <a class="nav-link" href="Entreemcontato">
                Entre em contato
              </a>
         
        </li>

        
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

 <main>
         <?php
              if(isset($_GET["param"])){
                $p = explode("/", $_GET["param"]);
              }
              $page =$p[0] ?? "home";

              $pagina = "paginas/{$page}.php";
          //verificar se existe o arquivo
          if (file_exists($pagina)) {
            include $pagina;
          } else {
            include "paginas/erro.php";
          }
          ?>



    </main>
    <footer class="footer">
       <p class="text-center">
         Desenvolvido por felipe
        </p>
      </footer>
<script src="js/bootstrap.bundle.min.js"></script>
<script sec="js/fslightbox.js"></script>
</body>
</html>