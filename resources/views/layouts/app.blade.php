<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Open+Sans+Condensed:wght@700&family=Roboto&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100  sm:items-center">
        <x-top-nav :active="$current_page" :title="isset($story)?$story->name:''"/>
        @yield('content')
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
