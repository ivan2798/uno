<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>LIDERES DE GIMNASIO POKEMON</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('sust/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('sust/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('sust/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('sust/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sust/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sust/lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('sust/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('sust/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  

  
    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Galeria</h2>
          <p>Pokemons registrados</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="{{asset('sust/img/gallery/1i.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('sust/img/gallery/1i.jpg') }}" alt=""></a>
        <a href="{{asset('sust/img/gallery/2i.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('sust/img/gallery/2i.jpg') }}" alt=""></a>
        <a href="{{asset('sust/img/gallery/3i.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('sust/img/gallery/3i.jpg') }}" alt=""></a>
        <a href="{{asset('sust/img/gallery/4i.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('sust/img/gallery/4i.jpg') }}" alt=""></a>
        <a href="{{asset('sust/img/gallery/5i.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('sust/img/gallery/5i.jpg') }}" alt=""></a>
        <a href="{{asset('sust/img/gallery/6i.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('sust/img/gallery/6i.jpg') }}" alt=""></a>
        <a href="{{asset('sust/img/gallery/7i.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('sust/img/gallery/7i.jpg') }}" alt=""></a>
        <a href="{{asset('sust/img/gallery/8i.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('sust/img/gallery/8i.jpg') }}" alt=""></a>
      </div>

    </section>

    
    
    <!--==========================
      Contact Section
    ============================-->
     @yield('contactame')

  </main>


  <a href="{{asset('sust/#')}}" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('sust/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('sust/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('sust/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('sust/lib/easing/easing.min.js' ) }}"></script>
  <script src="{{asset('sust/lib/superfish/hoverIntent.js' ) }}"></script>
  <script src="{{asset('sust/lib/superfish/superfish.min.js' ) }}"></script>
  <script src="{{asset('sust/lib/wow/wow.min.js') }}"></script>
  <script src="{{asset('sust/lib/venobox/venobox.min.js') }}"></script>
  <script src="{{asset('sust/lib/owlcarousel/owl.carousel.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('sust/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('sust/js/main.js') }}"></script>
</body>

</html>