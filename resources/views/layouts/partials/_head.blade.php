<head>

    <!-- *Metadados -->
    <meta charset="UTF-8" />
    <meta name="author" content="Erivelton da Silva" />
    <meta name="description" content="Sistema de Gerenciamento Escolar" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- *Aba de título do navegador -->
    <title>{{ $head_title ?? 'SGE' }}</title>
    <link rel="shortcut icon" href="icon.svg" type="image/x-icon" />


    <!-- *Fontes: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />


    <!-- *Icons: fontawesome_6.2.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- *Styles: ### -->
    {{-- TODO: minificar o código abaixo antes de ir para a produção --}}
    <link rel="stylesheet" href="/dist/css/adminlte.css" />

    <link rel="stylesheet" href="/dist/css/app.css" />


    <!-- *Scripts: jQuery_3.6.0 | Bootstrap_4.6.1 | AdminLTE_app -->
    <script src="/dist/js/vendors/jquery/jquery.min.js" defer></script>

    <script src="/dist/js/vendors/bootstrap/js/bootstrap.bundle.min.js" defer></script>

    {{-- TODO: minificar o código abaixo antes de ir para a produção --}}
    <script src="/dist/js/adminlte.js" defer></script>

    <script src="/dist/js/app.js" defer></script>

</head>
