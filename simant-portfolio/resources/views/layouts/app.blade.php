
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Simant Kumar | Software Engineer')</title>

    <meta name="description"
          content="@yield('description', 'Software engineering portfolio of Simant Kumar.')">

    <meta name="theme-color" content="#090d16">

    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
