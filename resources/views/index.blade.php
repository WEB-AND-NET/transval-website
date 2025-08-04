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

    <!-- Navbar & Hero Start -->
    <div class="container-fluid p-0">
        <!-- Navbar Start -->
        @include('partials.navbar')
        <!-- Navbar End -->
    </div>
    <!-- Navbar & Hero End -->
    <!-- Carousel Start -->
    <div class="index-page-carousel">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src={{ asset('img/carousel/carousel-img-1.jpeg') }} alt="carousel-img">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('img/carousel/carousel-img-1.jpeg') }}  alt="carousel-img">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('img/carousel/carousel-img-1.jpeg') }} alt="carousel-img">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('img/carousel/carousel-img-1.jpeg') }} alt="carousel-img">
                </div>
                <div class="carousel-item">
                    <img src={{ asset('img/carousel/carousel-img-1.jpeg') }} alt="carousel-img">
                </div>
            </div>
            <div class="carousel-caption">
                <h1 class="text-light">Sample text</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Fugit, praesentium. Fuga eveniet quidem ut temporibus vitae
                unde aspernatur tenetur quam velit perferendis.
                Ipsa minus perspiciatis fugit? Assumenda recusandae ipsam
                delectus!</p>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!---------- JAVASCRIPT ---------->
    @include('partials.footer')
</body>
<footer>
    @include('partials.footer-info')
</footer>

</html>