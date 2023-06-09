<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('includes.styles')

    <title>@yield('title')</title>

    <style>
        body {
            padding-top: 5%;
        }
    </style>

</head>

<body>

    <main>

        @yield('content')

    </main>

    @include('includes.scripts')
</body>