<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />

        <title>@yield('title')</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="128x128" href="favicon.png" />

        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" />

        <!-- CSS -->
        <link rel="stylesheet" href="/css/normalize.css" />
        <link rel="stylesheet" href="/css/dashboard.css" />
    </head>

    <body>
        @yield('header')
        @yield('navbar')

        @yield('content')

        <script src="{{ 'settings.site_url' }}/admin/js/time.js"></script>
        <script src="{{ 'settings.site_url' }}/admin/js/main.js"></script>
    </body>

</html>
