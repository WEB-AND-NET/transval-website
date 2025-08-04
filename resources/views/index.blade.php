<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Inicio | {{ env('WEBSITE_TITLE') }}</title>
    @include('partials.header')
</head>

<body>
    <!-- Spinner Start -->
    @include('partials.spinner')
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        @include('partials.navbar')
    </div>
    <!-- Navbar End -->

    <!-------- Hero ---------->
    <div class="hero-section" style="background-image: url({{ asset('img/carousel/carousel-image-1.webp') }}); ">
        <div class="col-sm-12 col-md-5 bg-primary h-100" style="padding: 8rem 6rem 4rem 8rem; opacity: 0.8;">
            <div class="d-flex align-items-center">
                <div style="color: #ffffff">
                    <h1 style="color: #ffffff">SOLUCIONES <br>EN COMERCIO <br>EXTERIOR</h1>
                    <p class="pt-3">Expertos en operaciones logísticas y <br>sistemas de gestión.</p>
                </div>
            </div>
        </div>
    </div>
    <!-------- Hero ---------->


    <!---------- JAVASCRIPT ---------->
    @include('partials.footer')
</body>
<footer>
    @include('partials.footer-info')
</footer>

</html>