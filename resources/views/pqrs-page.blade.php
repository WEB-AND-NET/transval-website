<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>PQRS | {{ env('WEBSITE_TITLE') }}</title>
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

    <!----------- about us ------------->

    <div class="container py-4" style="min-height: 40vh">
        <h1 class="text-center text-primary my-5">PQRS</h1>
        <form action="{{ url("/process-pqrs") }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="fecha">Fecha</label>
                <input class="form-control" type="datetime-local" name="fecha" id="fecha">
            </div>
            <div class="mb-4">
                <label for="nombre-cliente">Cliente</label>
                <input class="form-control" type="text" name="nombreCliente" id="nombre-cliente">
            </div>
            <div class="mb-4">
                <label for="nombre-reportante">Nombre de quien reporta</label>
                <input class="form-control" type="text" name="nombreReportante" id="nombre-reportante">
            </div>
            <div class="mb-4">
                <label for="cargo-reportante">Cargo</label>
                <input class="form-control" type="text" name="cargoReportante" id="cargo-reportante">
            </div>
            <div class="mb-4">
                <label for="nombre-servicio">Seleccione el servicio</label>
                <select class="form-control" name="nombreServicio" id="nombre-servicio">
                    <option value="">---</option>
                    <option value="Operación logística">Operación logística</option>
                    <option value="Implementación de sistemas de gestión">Implementación de sistemas de gestión</option>
                    <option value="Mantenimiento de los sistemas de gestión">Mantenimiento de los sistemas de gestión
                    </option>
                </select>
            </div>
            <div class="mb-4">
                <p>Describa su petición, queja, reclamo o sugerencia</p>
                <textarea class="form-control" cols="10" rows="5" name="texto"
                    placeholder="Escriba su mensaje....."></textarea>
            </div>
            <div class="mb-4">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
            <div class="my-4 text-center">
                <p class="col-12">Estaremos atendiendo su solicitud en la mayor brevedad posible.</p>
                <p class="col-12">Gracias por su información</p>
            </div>
        </form>
    </div>

    <!----------- End about us ------------->

    <!---------- JAVASCRIPT ---------->
    @include('partials.footer')
</body>
<footer>
    @include('partials.footer-info')
</footer>

</html>