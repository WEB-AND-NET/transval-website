<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head></head>

<body>
    <h2 style="margin-bottom: 2rem">Hola! {{ ucfirst($notifycationData['nombreDenunciante']) }}</h2>
    <p style="margin-bottom: 2rem">Recibimos su correo electronico, pronto recibirá una respuesta acerca del reporte
        enviado a través de la section "Linea Ética" de nuestro sitio web.
    </p>
    

    @php
        $imagePath = public_path('main-website-logo.png');
        $image = file_get_contents($imagePath);
    @endphp

    <img src={{ $message->embedData($image, 'main-website-logo.png') }} alt="main-website-logo" style="width: 300px;">
</body>

</html>