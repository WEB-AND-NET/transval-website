<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Línea Ética | {{ env('WEBSITE_TITLE') }}</title>
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

    <div class="container py-4">
        <h1 class="text-center text-primary">Línea Ética</h1>

        <form action="{{ url("reporte/linea-etica") }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="tipoDeReporte">Seleccione el tipo de reporte</label>
                <select class="form-control" name="tipoDeReporte" id="report-type">
                    <option value="">---</option>
                    <option value="Operation sospechosa" {{ old("tipoDeReporte") == "Operation sospechosa" ? "selected" : "" }}>Operation sospechosa</option>
                    <option value="Corrupción" {{ old("tipoDeReporte") == "Corrupción" ? "selected" : "" }}>Corrupción</option>
                    <option value="Soborno" {{ old("tipoDeReporte") == "Soborno" ? "selected" : "" }}>Soborno</option>
                </select>
                @error("tipoDeReporte")
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="fecha">Fecha</label>
                <input class="form-control" type="datetime-local" name="fecha" id="fecha" value="{{ old("fecha") }}"></input>
                @error("fecha")
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <p>
                    Por favor describa la situación presentada teniendo en consideración
                    los siguientes aspectos: ¿Qué sucedió?, ¿Cuándo sucedió?, ¿Dónde sucedió?,
                    ¿Quién (es) intervinieron?
                </p>
            </div>
            <div class="mb-4">
               <textarea class="form-control" cols="10" rows="5" name="descripcion" id="descripcion">{{old("descripcion")}}</textarea>
                @error("descripcion")
                    <p class="text-danger my-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <h4 class="text-primary">Información De La Persona Que Reporta (opcional)</h4>
            </div>
            <div class="mb-4">
                <p>
                    Recuerde que “La Línea Ética” es un canal anónimo y confidencial, por lo 
                    que usted no está obligado a suministrarnos ninguno de sus datos de 
                    contacto. En caso de querer ser contactado por favor diligencie la 
                    siguiente información. 
                </p>
            </div>
            <div class="mb-4">
                <label for="relacionConLaEmpresa">Relacion Con La Empresa</label>
                <select class="form-control" name="relacionConLaEmpresa" id="relacionConLaEmpresa">
                    <option value="">---</option>
                    <option value="Colaborador">Colaborador</option>
                    <option value="Cliente">Cliente</option>
                    <option value="Proveedor">Proveedor</option>
                    <option value="Tercero">Tercero</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="nombreDenunciante">Nombre</label>
                <input class="form-control" name="nombreDenunciante" id="nombreDenunciante">
            </div>
            <div class="mb-4">
                <label for="telefonoDenunciante">Telefono</label>
                <input class="form-control" name="telefonoDenunciante" id="telefonoDenunciante">
            </div>
            <div class="mb-4">
                <label for="emailDenunciante">E-mail</label>
                <input class="form-control" name="emailDenunciante" id="emailDenunciante">
            </div>
            <div class="mb-4">
                <p>Gracias por su tiempo e información</p>
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