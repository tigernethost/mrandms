<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mr and Ms SPCF 2018</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/creative.css') }}" rel="stylesheet">
    </head>
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-left js-scroll-trigger" href="#page-top"><img class="img-responsive" src="img/logobnw.png" style="height:40px; width:auto;"/></a>
            <button class="navbar-toggler custom-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="/login">LOGIN</a>
                </li>
                <li cl{{-- ass="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#services">CANDIDATES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contact">VOTE NOW</a>
                </li> --}}
              </ul>
            </div>
          </div>
        </nav>

        <header class="masthead text-center text-white d-flex" id="starshine">
          <div class="template shine" id="shiner"></div>
          <div class="container my-auto mx-auto">
            <div class="row text-center">
              
        <!--           <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
                <a class="btn btn-primary btn-lg js-scroll-trigger" href="#about">Find Out More</a>
              </div> -->
              <center>
                  <img class="img img-fluid" id="logomain" src="img/logo.png" alt="Logo">
                  <h1>MARCH 06, 2018 | SPCF Gymnasium</h1>
                  <p class="subhead">BALIBAGO, ANGELES CITY</p>
              </center>

            </div>
          </div>
        </header>

        <footer>
          <p class="text-center"> © SPCF ICTDU 2018 </p>
        </footer>
        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Plugin JavaScript -->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- Custom scripts for this template -->
        <script src="{{ asset('js/creative.min.js') }}"></script>
        <script src="{{ asset('js/shine.js') }}"></script>

    </body>
</html>
