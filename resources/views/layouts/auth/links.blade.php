<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ucfirst(auth()->user()->roles[0]->name) }} {{ $pageTitle != null ? '- ' . $pageTitle : '' }}</title>
    <!-- PICK ONE OF THE STYLES BELOW -->
    <link href="{{ asset('main/css/modern.css') }}" rel="stylesheet">
    <link href="{{ asset('main/css/classic.css') }}" rel="stylesheet">
    <link href="{{ asset('main/css/dark.css') }}" rel="stylesheet">
    <link href="{{ asset('main/css/light.css') }}" rel="stylesheet">



    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Lightbox library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('main/js/settings.js') }}"></script>
    <script src="{{ asset('build/assets/app-15048491.js') }}"></script>


</head>

<body class="antialiased">
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>

    <!-- Page Wrapper -->
    <div class="wrapper">
