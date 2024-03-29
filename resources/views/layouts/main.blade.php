<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog :: Home</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }} "></script>
    <script src="{{ asset('assets/js/loader.js') }} "></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <title>Blog :: Home</title>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('main.index') }}">Блог</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('category.index') }}">Категории</a>
                    </li>
                    <li class="nav-item active">
                        @auth()
                            <a class="nav-link" href="{{ route('personal.main.index') }}">Личный кабинет</a>
                        @endauth
                        @guest()
                            <a class="nav-link" href="{{ route('personal.main.index') }}">Войти</a>
                        @endguest
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h1 class="banner-title">Не обязательно, но можно проверить.</h1>
            <div class="banner-btns-wrapper">
                <button class="btn btn-success"><img src="{{ asset('assets/images/apple@1x.svg') }} " alt="ios"
                                                                                                                                      class="mr-2"> App Store
                </button>
                <button class="btn btn-success"><img src="{{ asset('assets/images/android@1x.svg') }} " alt="android"
                                                                                                                   class="mr-2">Google Play
                </button>
            </div>
            <p class="banner-text">Кликай </p>
        </div>
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">

                <p class="contact-details ">ItsBlog</p>
                <p class="contact-details text-primary">hello@blog.com</p>
                <p class="contact-details text-danger">8 800 555 35 35</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                    <a href="#!"><i class="fab fa-behance"></i></a>
                    <a href="#!"><i class="fab fa-dribbble"></i></a>
                </nav>
            </div>
            <div class="col-md-3">
                <div class="dropdown footer-country-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-ru flag-icon-squared"></span> Русский <i
                            class="fas fa-chevron-down ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-ru flag-icon-squared"></span> Русский
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-content">
            <nav class="nav footer-bottom-nav">
                <a href="#!">Всем</a>
                <a href="#!">Привет</a>
                <a href="#!">!!!</a>
            </nav>
            <p class="mb-0">© Kirill Chirkov</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }} "></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }} "></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }} "></script>
<script src="{{ asset('assets/js/main.js') }} "></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
