<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- My CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />

    {{-- My Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,600;1,100;1,200;1,400;1,600&display=swap"
        rel="stylesheet">

    {{-- My Icon --}}
    <link rel="icon" href="{{ asset('img/bem.png') }}">

    <!-- My Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>BEM-IM | Badan Eksekutif Mahasiswa Indonesia Mandiri</title>
</head>

<body>
    {{-- Navbar Start --}}
    @include('partials.navbar')
    {{-- Navbar End --}}

    {{-- Hero Start --}}
    @yield('hero')
    {{-- Hero End --}}

    {{-- Content Start --}}
    @yield('content')
    {{-- Content End --}}

    {{-- Footer Start --}}
    @include('partials.footer')
    {{-- Footer End --}}

    {{-- My JavaScript --}}
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
