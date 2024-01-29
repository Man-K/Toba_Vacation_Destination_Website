<!DOCTYPE html>
<html>

<head>
    @yield('title')
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.rateyo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mmenu.all.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/meanmenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('inner-page-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">

    {{-- Boostrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> --}}

    {{-- My Index Css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/signin.css') }}">

</head>

<body>
    <div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
        @include('partials.header')
        <!-- Header Close -->
        @yield('content')

        <!-- HOME -->
        <!-- Banner Close -->
        <div class="page-heading">
            @yield('heading')
        </div>

        <!-- Popular courses End -->
        <div class="learn-courses">
            @yield('learn')
        </div>

        <!-- Closed WhyUs section -->
        <section class="page-heading">
            @yield('heading2')
        </section>

        <section class="gallery-images-section" itemprop="image" itemscope itemtype=" http://schema.org/ImageGallery"
            id="gallery">
            @yield('gallery')
        </section>

        <!-- End of Events section -->
        <section class="what-other-say">
            @yield('heading3')
        </section>


        <!-- JENIS WISATA -->
        <!-- Banner Close Wisata -->
        <section class="course-listing-page">
            @yield('wisata')
        </section>

        <!-- HOTEL -->
        <!-- Banner Close -->
        <section class="page-heading">
            @yield('hotel1')
        </section>

        <section class="course-listing-page">
            @yield('hotel2')
        </section>

        <!-- TRAVEL -->
        <!-- Banner Close -->
        <section class="page-heading">
            @yield('travel1')
        </section>

        <section class="course-listing-page">
            @yield('travel2')
        </section>

        <!-- KULINER -->
        <!-- Banner Close -->
        <section class="page-heading">
            @yield('kuliner1')
        </section>

        <section class="course-listing-page">
            @yield('kuliner2')
        </section>


        <!-- EVENT -->
        <!-- Banner Close -->
        <section class="page-heading">
            @yield('event1')
        </section>

        <section class="upcomming events-section">
            @yield('event2')
        </section>

        <section class="button-section">
            @yield('event3')
        </section>

        <!-- INDEX -->
        <section class="page-heading">
            @yield('index1')
        </section>

        <div class="page-content" itemscope itemtype=" http://schema.org/Blog">
            @yield('form')
        </div>

        <!-- End of Query Section -->
        <footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
            <div class="footer-first-section">
                <div class="container">
                    <div class="box-wrap" itemprop="about">
                        <header>
                            <h1>about</h1>
                        </header>
                        <p>Website ini dibuat sebagai Proyek Akhir 1 mahasiswa dalam perkuliahan.</p>

                        <h4><a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></h4>
                        <h4><a href="mailto:info@educationpro.com"><i class="fas fa-envelope"></i>
                                TobaVacationDestination@gmail.com</a></h4>
                        <h4><a href=""><i class="fas fa-map-marker-alt"></i>IT DEL, Laguboti, Sumatra Utara</a></h4>
                    </div>
                    <div class="box-wrap">
                        <form action="{{ route('saran.store') }}" method="post">
                            @csrf
                            <header>
                                <h1>Saran</h1>
                            </header>
                            <section class="quick-contact">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Your Email*">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <textarea type="text" name="saran" class="form-control @error('saran') is-invalid @enderror"
                                    placeholder="Type your message*"></textarea>
                                @error('saran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <input type="submit" value="Send Message">
                            </section>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End of box-Wrap -->
            <div class="footer-second-section">
                <div class="container">
                    <hr class="footer-line">
                    <ul class="social-list">
                        <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-skype"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <hr class="footer-line">
                </div>
            </div>
            <div class="footer-last-section">
                <div class="container">
                    <p>Copyright Kelompok 9 ; TobaVacationDestination <span> | </span> Theme designed and developed by
                        <a href="https://labtheme.com">Lab Theme</a>
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.rateyo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
