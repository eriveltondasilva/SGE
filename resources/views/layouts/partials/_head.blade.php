<head>

    <!-- *Metadados -->
    <meta charset="UTF-8" />
    <meta name="author" content="Erivelton da Silva" />
    <meta name="description" content="Sistema de Gerenciamento Escolar" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- *Aba de título do navegador -->
    <title>{{ $head_title ?? 'SGE' }}</title>
    <link type="image/x-icon" href="{{ Vite::icon('school.png') }}" rel="shortcut icon" />


    <!-- *Fontes: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
          rel="stylesheet" />


    <!-- *Icons: fontawesome_6.2.1 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- *Scripts: jQuery_3.6.4 | Bootstrap_4.6.1 | jquery.mask_1.14.16 -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
            integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" defer></script>


    @vite(['resources/css/adminlte.css', 'resources/css/main.css', 'resources/js/vendors/bootstrap.bundle.js', 'resources/js/adminlte.js', 'resources/js/main.js'])

</head>
