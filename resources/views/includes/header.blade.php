  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="{{ route('accueil') }}"><span>SDK & Co</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
          <li class="active"><a href="{{ route('accueil') }}">Accueil</a></li>
            <li><a href=" {{ route('A-propos') }} ">A Propos</a></li>
            <li class="drop-down"><a href=" {{ route('services') }} ">Nos services</a>
              <ul>
                <li><a href=" {{ route('aubergine') }} ">Aubergine</a>
                <li><a href=" {{ route('piment') }} ">Piment bicson</a></li>
                <li><a href=" {{ route('oignon') }} ">Oignon rouge</a></li>
                <li><a href=" {{ route('accompagnement-coopérative') }} ">Accompagnement agricole</a></li>
              </ul>
            </li>
            <li><a href=" {{ route('notre-equipe') }} ">Notre équipe</a></li>
            <li><a href=" {{ route('clients') }} ">Nos clients</a></li>
            <li><a href=" {{ route('galerie') }} ">Galeries</a></li>
            <li><a href=" {{ route('contacts') }} ">Contact</a></li>

            {{-- <li class="get-started"><a href="#about">Get Started</a></li> --}}
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Vos talent agricole mis en avant</h1>
      <h2>Nous valorisons l'agriculture naturelle par des mécaniques industrielles</h2>
      <a href="#about" class="btn-get-started scrollto">Commencé votre visite</a>
    </div>
  </section><!-- End Hero -->

