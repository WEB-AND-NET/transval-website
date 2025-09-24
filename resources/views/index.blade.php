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
                <hgroup style="color: #ffffff">
                    <h1 style="color: #ffffff">SOLUCIONES SISTEMAS DE GESTIÓN Y OPERACIONES LOGÍSTICAS</h1>
                    {{-- <p class="pt-3">Expertos en operaciones logísticas y sistemas de gestión.</p> --}}
                </hgroup>
            </div>
        </div>
    </div>
    <!-------- Hero ---------->

    <!----------- about us ------------->
    <div class="bg-primary row justify-content-center" style="margin-right: 0px !important">
        <div class="col-sm-12 col-md-4" style="color: #ffffff; padding: 4rem 0rem 4rem 0rem;">
            <h2 class="text-center pb-4" style="color: #ffffff;">PROPÓSITO</h2>
            <p class="text-justify p-4">
                Transval S&S, desarrolla estrategias logísticas a la medida de los requerimientos de nuestros clientes, con
                una adecuada administración del riesgo y de los recursos y un enfoque a los resultados planificados; así como, 
                una experiencia grata al obtener las diferentes certificaciones para los sistemas de gestión, y el mantenimiento 
                de estos, aportando al crecimiento y desarrollo organizacional.
            </p>
        </div>
        <div class="col-1"></div>
        <div class="col-sm-12 col-md-4" style="color: #ffffff; padding: 4rem 0rem 4rem 0rem;">
            <h2 class="text-center pb-4" style="color: #ffffff;">VISIÓN</h2>
            <p class="text-justify p-4">
                Ser reconocidos en el medio como una nueva alternativa para realizar las operaciones de comercio exterior de forma 
                segura, cumpliendo con todos los requisitos establecidos en la norma legal vigente. <br>
                Ser uno de los consultores más confiables a nivel nacional en la implementación de los sistemas de gestión y el 
                mantenimiento de los mismos
            </p>
        </div>
    </div>
    <!----------- about us ------------->

    <!-- Services -->
    @if (!empty($servicesPage))
        @foreach ($servicesPage->blocks as $c)
            @switch($c->type)
                @case('intro')
                    <div class="container-fluid py-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo $c->data->blocks?>
                                </div>
                                    <div class="col-lg-6">
                                    <img src={{ asset('/storage/' . $c->data->url) }} alt="intro_image" class="rounded" style="max-height: 20rem; width: 100%; object-fit: contain;">
                                </div>
                            </div>
                        </div>
                    </div>
                        @break
                @case('heading')
                    <div class="container-fluid pt-5 pb-4">
                        <div class="mx-auto text-center" style="max-width: 900px;">
                                <{{ $c->data->level }} class="my-3 text-primary">{{$c->data->blocks}}</{{ $c->data->level }}>
                        </div>
                    </div>
                    @break
                @case('paragraph')
                    <div class="container-fluid py-4">
                        <div class="container">
                            <?php echo $c->data->blocks ?>
                        </div>
                    </div>
                    @break
                @case('mark_down_paragraph')
                    <!------------------ markdown content Start ------------------>
                    <div class="container-fluid py-2">
                        <div class="container">
                            <?php echo $c->data->blocks ?>
                        </div>
                    </div>
                    <!------------------ markdown content End ------------------>
                    @break
                @case('image')
                        <div class="container-fluid py-2">
                            <div class="container text-{{  $c->data->alignment }}">
                                <img src={{ asset('/storage/' . $c->data->url) }} alt="{{ $c->data->alt }}" class="rounded img-fluid my-3">
                            </div>
                        </div>
                    @break
                @case('two_columns_paragraph')
                    <div class="container-fluid py-2">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <?php echo $c->data->column_1 ?>
                                </div>
                            <div class="col-lg-6">
                                    <?php echo $c->data->column_2 ?>
                                </div>
                            </div>
                        </div>
                    </div>
                @break
                @case('image_row')
                    <div class="container-fluid py-2">
                        <div class="container">
                            <div class="row my-5 align-items-center">
                                @foreach ($c->data->urls as $index => $image_url)
                                    <div class="col-lg-3 col-md-4 col-sm-12 mb-3 mx-auto">
                                        <img class="img-fluid rounded" style="max-height: 20rem; width: 100%; object-fit: contain; padding-top: auto; padding-bottom: auto;" src={{ asset('/storage/' . $image_url) }} alt="list-image-{{ $index }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @break
                @case('link')
                    <div class="container-fluid py-2">
                        <div class="container" style="display: flex; justify-content: {{ $c->data->alignment }}">
                            <a class='btn btn-primary text-light btn-md mb-3' href={{ $c->data->url }} target="_blanck" style="display: flex; height: 3rem; width: 10rem;; justify-content: center; align-items: center;">{{ $c->data->text }}</a>
                        </div>
                    </div>
                @break

            @endswitch   
        @endforeach
    @endif

    <!---------- JAVASCRIPT ---------->
    @include('partials.footer')
</body>
<footer>
    @include('partials.footer-info')
</footer>

</html>