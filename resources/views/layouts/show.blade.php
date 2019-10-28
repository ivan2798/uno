<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>LIDERES DE GIMNASIO POKEMON</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('sust/img/favicon.png') }}" rel="icon">
  <link href="{{asset('sust/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('sust/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('sust/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{asset('sust/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{asset('sust/lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{asset('sust/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('sust/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  

  
  <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>PREGUNTAS </h2>
        </div>

		
        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="{{asset('sust/#faq1') }}">Que tiers manejara el Torneo? <i class="fa fa-minus-circle"></i></a>
                  <div id="{{asset('sust/faq1') }}" class="collapse" data-parent="#faq-list">
                    <p>
                      Se aceptan las tiers OU, UU y RU
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="{{asset('sust/#faq2') }}" class="collapsed">Habra sleep-cl y change-cl como las clasicas reglas de smogon? <i class="fa fa-minus-circle"></i></a>
                  <div id="{{asset('sust/faq2') }}" class="collapse" data-parent="#faq-list">
                    <p> 
			 	                	Se seguiran todas las reglas de smogon(incluido dichas reglas)
                    </p>
                  </div>
                </li>
      
              </ul>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>REGISTRADOS</h2>
          <p>LISTA DE REGISTRADOS</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a href = "{{route('lideres.index')}}" class="btn btn-succes">LISTA</a>
          </li>
        </ul>

        <h3 class="sub-heading">La zona VGC sera de un tiempo limite de 20 minutos, la zona individual tendra 30 minutos 
                               y la zona por equipo un limite de 10 minutos		</h3>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          @yield('tabla')
           
        </div>
     </div>
          <!-- End Schdule Day 1 -->
    </section> 
  

  


  <a href="{{asset('#')}}" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('sust/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{asset('sust/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{asset('sust/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('sust/lib/easing/easing.min.js') }}"></script>
  <script src="{{asset('sust/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{asset('sust/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{asset('sust/lib/wow/wow.min.js') }}"></script>
  <script src="{{asset('sust/lib/venobox/venobox.min.js') }}"></script>
  <script src="{{asset('sust/lib/owlcarousel/owl.carousel.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('sust/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('sust/js/main.js') }}"></script>
</body>

</html>