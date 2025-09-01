<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head></head>

<body>
    <p style="margin-bottom: 3rem">Este correo ha sido enviado automaticamente desde la section "Línea Ética" que se
        encuentra en el sitio web {{env('WEBSITE_TITLE')}}</p>

    <!----- Datos del reporte ----->
    <div style="margin-bottom: 2rem">
        <p><strong>Tipo de Reporte: </strong>{{ $reporteLineaEtica['tipoDeReporte']}}</p>
        <p><strong>Fecha: </strong>{{ $reporteLineaEtica['fecha']}}</p>
        <p><strong>Descripcion: </strong>{{ $reporteLineaEtica['descripcion']}}</p>
    </div>
    <!----- Datos del usuario ----->
    <div style="margin-bottom: 2rem">
        <p style="margin-bottom: 1rem">A continuación, se listan los datos del usuario:</p>
        <p><strong>Nombre:</strong> {{ ucfirst($reporteLineaEtica['nombreDenunciante']) }}</p>
        <p><strong>Telefono:</strong> {{ $reporteLineaEtica['telefonoDenunciante'] }}</p>
        <p><strong>E-mail:</strong> {{ $reporteLineaEtica['emailDenunciante'] }}</p>
    </div>

    @php
    $imagePath = public_path('main-website-logo.png');
    $image = file_get_contents($imagePath);
    @endphp

    <img src={{ $message->embedData($image, 'main-website-logo.png') }} alt="main-website-logo" style="width: 300px;">
</body>

</html>