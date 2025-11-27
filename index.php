<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celma Modas</title>
    <base href="http://localhost/WebModerna/CelmaModas/index.php">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shorcut icon" href="imagens/borboletaL.png">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">


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
         
              <a class="nav-link" href="home">
                Home <i class="bi bi-house-door-fill"></i>
              </a>
         
        </li>

        <li class="nav-item">
         
              <a class="nav-link" href="Roupas">
                Roupas <i class="bi bi-tags-fill"></i>
              </a>
         
        </li>


        <li class="nav-item">
         
              <a class="nav-link" href="Quemsomos">
                Quem somos <i class="bi bi-flag-fill"></i>
              </a>
          
        </li>

        <li class="nav-item">
         
              <a class="nav-link" href="formulario">  
               Entre em contato <i class="bi bi-chat-left-dots-fill"></i> 
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

    <h2 class="text-center">Celma Modas</h2>
        <p class="text-center" width="15px" > <!--texo -->
                <a href="https://facebook.com" title="facebook"> <!--link do facebook -->
                   <i class="bi bi-facebook"></i><!--icone do facebook -->
                </a>
            
            
                <a href="https://instagram.com" title="instagram"><!--link do instagram -->
                    <i class="bi bi-instagram"></i> <!--icone do instagram -->
                </a>    
            
            
                <a href="#" title="Whatsapp"><!--link do twitter -->
                    <i class="bi bi-whatsapp"></i><!--icone do twitter -->
                </a>

                 <a href="#"  title="Localização"> 
                  <i class="bi bi-geo-alt-fill"></i>
                </a>
        </p>

      </footer>
<script src="js/bootstrap.bundle.min.js"></script>
<script sec="js/fslightbox.js"></script>
<script>
  const form = document.getElementById("formContato");
const erro = document.getElementById("erro");
const limpar = document.getElementById("limpar");

form.addEventListener("submit", function (e) {
  e.preventDefault(); 
  let nome = document.getElementById("nome").value.trim();
  let email = document.getElementById("email").value.trim();
  let telefone = document.getElementById("telefone").value.trim();
  let cidade = document.getElementById("cidade").value.trim();
  let endereco = document.getElementById("endereco").value.trim();
  let opiniao = document.getElementById("opiniao").value.trim();

  if (nome === "") {
    erro.textContent = "Por favor, digite seu nome.";
    return;
  }
  if (email === "" || !email.includes("@")) {
    erro.textContent = "Digite um e-mail válido.";
    return;
  }
  if (telefone.length < 8) {
    erro.textContent = "Digite um número de telefone válido.";
    return;
  }
  if (cidade === "") {
    erro.textContent = "Por favor, informe sua cidade.";
    return;
  }
  if (endereco === "") {
    erro.textContent = "Digite seu endereço.";
    return;
  }
  if (opiniao.length < 5) {
    erro.textContent = "Escreva pelo menos uma frase na sua opinião.";
    return;
  }

  erro.textContent = "";
  alert("Formulário enviado com sucesso! ");
  form.reset();
});


limpar.addEventListener("click", function () {
  form.reset();
  erro.textContent = "";
});

</script>

</body>
</html>