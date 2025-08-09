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
                <input class="form-control" type="datetime-local" name="fecha" id="fecha" value="{{ old("fecha") }}">
                @error("fecha")
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nombre-cliente">Cliente</label>
                <input class="form-control" type="text" name="nombreCliente" id="nombre-cliente" value="{{ old("nombreCliente") }}">
                @error("nombreCliente")
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nombre-reportante">Nombre de quien reporta</label>
                <input class="form-control" type="text" name="nombreReportante" id="nombre-reportante" value="{{ old("nombreReportante") }}">
                @error("nombreReportante")
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="cargo-reportante">Cargo</label>
                <input class="form-control" type="text" name="cargoReportante" id="cargo-reportante" value="{{ old("cargoReportante") }}">
                @error("cargoReportante")
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nombre-servicio">Seleccione el servicio</label>
                <select class="form-control" name="nombreServicio" id="nombre-servicio">
                    <option value="">---</option>
                    <option value="Operación logística" {{ old("nombreServicio") == "Operación logística" ? "selected" : "" }}>Operación logística</option>
                    <option value="Implementación de sistemas de gestión" {{ old("nombreServicio") == "Implementación de sistemas de gestión" ? "selected" : "" }}>Implementación de sistemas de gestión</option>
                    <option value="Mantenimiento de los sistemas de gestión" {{ old("nombreServicio") == "Mantenimiento de los sistemas de gestión" ? "selected" : ""}}>Mantenimiento de los sistemas de gestión</option>
                    <option value="Otro" {{ old("nombreServicio") == "Otro" ? "selected" : "" }}>Otro</option>
                </select>
                @error("nombreServicio")
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <p>Describa su petición, queja, reclamo o sugerencia</p>
                <textarea class="form-control" cols="10" rows="5" name="texto"
                    placeholder="Escriba su mensaje.....">{{old("texto")}}</textarea>
                @error("texto")
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <!------------- error validation messages ---------->
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <p>{{ session()->get('success') }}</p>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    <p>{{ session()->get('error') }}</p>
                </div>
            @endif
            <!--------------- recaptcha --------------->
            <div class="g-recaptcha mb-3" data-sitekey={{config('services.recaptcha.key')}}></div>
            <!--------------- End recaptcha --------------->
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