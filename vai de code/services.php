<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Vai de Code</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/images/favicon.ico" />

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/code.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->


  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Sobre Nós</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services.php">Nossos Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Fale Conosco</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary" href="Login/login.php" role="button">Entrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <!--<div class="col-md-12">
          <h1>Nossos Serviços</h1>
          <span>Já conectamos mais de 1000 jovens com Empresas de TI</span>
        </div>-->
      </div>
    </div>
  </div>

  <div class="single-services">
    <div class="container">
      <div class="row" id="tabs">
        <div class="col-md-4">
          <ul>
            <li><a href='#tabs-1'>Para Jovens <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-2'>Para empresa<i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-3'>Para Instituição de Ensino <i class="fa fa-angle-right"></i></a></li>

          </ul>
        </div>
        <div class="col-md-8">
          <section class='tabs-content'>
            <article id='tabs-1'>
              <img src="assets/images/single_service_01.jpg" alt="">
              <h4>Se interessou?
                <a href="Login/cadastro.php" class="filled-button">Vem com a gente</a>
              </h4>

            </article>
            <article id='tabs-2'>
              <img src="assets/images/single_service_02.jpg" alt="">
              <h4>Se interessou?
                <a href="Login/cadastro.php" class="filled-button">Seja nosso parceiro</a>
              </h4>
            </article>
            <article id='tabs-3'>
              <img src="assets/images/single_service_03.jpg" alt="">
              <h4>Se interessou?
                <a href="Login/cadastro.php" class="filled-button">Seja nosso parceiro</a>
              </h4>
            </article>
            <article id='tabs-4'>
              <!--<img src="assets/images/single_service_04.jpg" alt="">
              <h4>Overall Evaluation</h4>
              <p>Integer vehicula sapien quis dolor efficitur, eget molestie eros tempus. Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis. Ut ultricies maximus turpis, in sollicitudin ligula posuere vel.
                <br><br>Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique. Etiam suscipit ante a odio consequat, in ornare lacus suscipit. Cras ac libero massa. Quisque rhoncus velit feugiat vulputate mollis. Donec nisl eros, malesuada sed nisi id, condimentum condimentum quam.</p>-->
            </article>
          </section>
        </div>
      </div>
    </div>
  </div>






  <!-- Footer Starts Here -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 footer-item">
          <h4>Menu</h4>
          <ul class="menu-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Sobre Nós</a></li>
            <li><a href="services.php">Nossos Serviços</a></li>
            <li><a href="contact.php">Fale Conosco</a></li>
          </ul>
        </div>

      </div>
    </div>
  </footer>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

</body>

</html>