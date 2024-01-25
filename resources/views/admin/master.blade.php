<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- My CSS --}}
    @include('admin.partials.css')
    @stack('css')
    
    <title>@yield('title')</title>
</head>
<body>
    {{-- Navbar Start --}}
    @include('admin.partials.navbar')
    {{-- Navbar End --}}
    
    {{-- Main Start --}}
    <div class="main">
        {{-- Left Sidebar Start --}}
        @include('admin.partials.sidebar-left')
        {{-- Left Sidebar End --}}
        
        {{-- Content Start --}}
        <section class="content-admin">
            <div class="title-content">
                @yield('title-page')
            </div>
            @yield('content')
            
            {{-- Footer Start --}}
            @include('admin.partials.footer')
            {{-- Footer End --}}
        </section>
        {{-- Content End --}}

        {{-- Right Sidebar Start --}}
        @include('admin.partials.sidebar-right')
        {{-- Right Sidebar End --}}
    </div>
    {{-- Main End --}}

    
    {{-- My JavaScript --}}
    @include('admin.partials.script')
    @stack('script')
</body>
</html>