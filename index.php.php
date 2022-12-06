<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <!--Google fontes-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!--css do projeto-->
    <link rel="stylesheet" href="Meucss/projeto.css">
    <!-- JavaScript bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  </head>
  <body >
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id = "navbar">
   <div class="container py-3">
    <a class="navbar-brand" href="index.php">
      <span> <i class="bi bi-robot"></i> IA-Inteligencia artificial</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-items">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Cadastre-se no blog</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="?page=quemsomos">Quem somos</a>
        </li>
        <button type="button" class="btn btn-primary">Login</button>
      </ul>
    </div>
   </div>
 </nav>
   <div  class="container">
     <div class="row">
       <div class="col mt-5">

        <?php
         include("config.php");
         switch(@$_REQUEST["page"]){
           case "novo":
             include("cadastro.php");
           break;
           case "listar":
             include("listar.php");
           case "salvar";
              include("salvar.php");
            break;
           case "quemsomos":
             include("quemsomos.php");
           break;
           case "machine":
            include("machinelearning.php");
          break;
          case "deep":
            include("deeplearning.php");
          break;
          case "IA":
            include("IA.php");
          break;
           default:
              print "<h2>Tudo sobre Inteligência Artificial, Machine learning e Deep learning, confira:</h2>";
           }
        ?> 

    </div>
  </div>
 </div>


 <div class="container" id="slider-container">
      <div id="slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#slider"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#slider"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#slider"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagens/machinelearning.jpg" class="d-block w-100" alt="Casa 1" />
            <div class="carousel-caption">
              <h5>inteligencia artificial</h5>
              <a href="?page=IA" class="btn btn-dark">Ler sobre</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imagens/ml.jpg" class="d-block w-100" alt="Casa 2" />
            <div class="carousel-caption">
              <h5>Entenda Machine Learning</h5>
              <a href="?page=machine" class="btn btn-dark">Ler sobre</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imagens/deeplearning.jpg" class="d-block w-100" alt="Casa 3" />
            <div class="carousel-caption">
              <h5>Entenda deep learning</h5>
              <a href="?page=deep" class="btn btn-dark">Ler sobre</a>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#slider"
          data-bs-slide="prev"
        >
          <i class="bi bi-chevron-compact-left"></i>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#slider"
          data-bs-slide="next"
        >
          <i class="bi bi-chevron-compact-right"></i>
          <span class="visually-hidden">Next</span>
        </button>
</div>
<footer>
    <div id="contact-area" class = "div  div-dark bg-dark">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Entre em contato conosco</h3>
            </div>
            <div class="col-md-4 contact-box">
             <i class="bi bi-telephone-fill"></i>
              <p><span class="contact-tile">Ligue para:</span> (83)999840272</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="bi bi-envelope-fill"></i>
              <p><span class="contact-tile">Envie um email:</span> contato@sjagency.com.br</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="bi bi-pin-fill"></i>
              <p><span class="contact-tile">Venha tomar um café:</span>  Água Fria, João Pessoa - PB, 58053-000</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Ou nos deixe uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="dados.php" method = "post">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="assunto">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="mensagem"></textarea>
                <input type="submit" class="main-btn">
              </form>
            </div>
          </div>
      </div>
    </div>
    <div id="copy-area">
      <div class="container container-dark bg dark">
        <div class="row">
            <div  id="copyright"class="col-md-12">
              <p><b>Desenvolvido por <a href="https://www.unipe.edu.br/" target="_blank">SJ Agency</a> &copy; 2022</p>
            </div>
        </div>
      </div>
    </div>
  </footer>


 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
  


</html>