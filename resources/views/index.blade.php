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
        <div class="col-sm-12 col-md-5 bg-primary h-100" style="padding: 8rem 6rem 4rem 3rem; opacity: 0.8;">
            <div class="d-flex align-items-center">
                <div style="color: #ffffff">
                    <h1 style="color: #ffffff">SOLUCIONES EN COMERCIO EXTERIOR</h1>
                    <p class="pt-3">Expertos en operaciones logísticas y sistemas de gestión.</p>
                </div>
            </div>
        </div>
    </div>
    <!-------- Hero ---------->

    <!----------- about us ------------->
    <div class="bg-primary d-flex justify-content-center">
        <div class="col-7" style="color: #ffffff; padding: 8rem 0rem 8rem 0rem;">
            <h2 class="text-center pb-4" style="color: #ffffff;">Nosotros</h2>
            <p class="text-center">
                Transval S&S, desarrolla estrategias logísticas a la medida de los requerimientos de nuestros clientes, con
                una adecuada
                administración del riesgo y de los recursos y un enfoque a los resultados planificados; así como, una
                experiencia grata al
                obtener las diferentes certificaciones para los sistemas de gestión, y el mantenimiento de estos, aportando
                al crecimiento y
                desarrollo organizacional.
            </p>
        </div>
    </div>
    <!----------- about us ------------->


    <!---------- JAVASCRIPT ---------->
    @include('partials.footer')
</body>
<footer>
    @include('partials.footer-info')
</footer>

</html>