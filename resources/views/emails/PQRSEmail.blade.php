<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif
        }
    </style>
</head>

<body>
    <main>
        <article>
            <header>
                <p style="margin-bottom: 3rem">Este correo ha sido enviado desde la section "PQRS" que se
                    encuentra en el sitio web {{env('WEBSITE_TITLE')}}</p>
            </header>
            <!----- Datos del reporte ----->
            @php
            use Carbon\Carbon;

            $format_date = Carbon::parse($reportePQRS['fecha'])
                ->locale("es")
                ->translatedFormat('l j \de F Y h:i:s A');
            @endphp

            <p><strong>Fecha: </strong>{{ $format_date }}</p>
            <p><strong>Cliente: </strong>{{ $reportePQRS['nombreCliente'] }}</p>
            <p><strong>Nombre de quien reporta: </strong>{{ $reportePQRS['nombreReportante'] }}</p>
            <p><strong>Cargo: </strong>{{ $reportePQRS['cargoReportante'] }}</p>
            <p style="margin-bottom: 2rem"><strong>Servicio: </strong>{{ $reportePQRS['nombreServicio'] }}</p>
            <p><strong>Descripción de la queja, reclamo o sugerencia</strong></p>
            <p>{{ $reportePQRS['texto'] }}</p>
        </article>
    </main>

    @php
    $imagePath = public_path('main-website-logo.png');
    $image = file_get_contents($imagePath);
    @endphp

    <img src={{ $message->embedData($image, 'main-website-logo.png') }} alt="main-website-logo" style="width: 300px;">
</body>

</html>