<head>
    <title>{{ setting('site.title') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ Module::asset('main:img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ Module::asset('main:lib/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ Module::asset('main:lib/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ Module::asset('main:lib/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ Module::asset('main:lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ Module::asset('main:css/index.css') }}">


    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>



    {!! htmlScriptTagJsApi([
    'callback_then' => 'callbackThen',
    'callback_catch' => 'callbackCatch',
    ]) !!}


</head>