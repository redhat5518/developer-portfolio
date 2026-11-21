
<!DOCTYPE html>
    <html lang="en">
    <head>

    <title>@yield('title', 'Simant Kumar | Senior Software Engineer')</title>

    <meta name="description"
        content="@yield('meta_description', 'Explore the portfolio, software engineering experience, projects and technical articles of Simant Kumar.')">

    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Simant Kumar | Senior Software Engineer')">
    <meta property="og:description" content="@yield('meta_description', 'Explore my software engineering portfolio and technical articles.')">
    <meta property="og:url" content="{{ url()->current() }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <meta name="description"
          content="@yield('description', 'Software engineering portfolio of Simant Kumar.')">

    <meta name="theme-color" content="#090d16">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
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
