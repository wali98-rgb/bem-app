<nav class="navbar">
    <div class="navbar-logo">
        <button type="button" id="hamburger-menu"><i class="bi bi-list"></i></button>
        <img src="{{ asset('img/bem.png') }}" alt="Logo-Bem" width="50rem">
        <label for="">BEM-<span>IM</span></label>
    </div>
    <div class="navbar-ex">
        <label for="">@yield('page')</label>
        <form action="" method="POST" id="formFilm">
            <input type="search" name="search" id="keyword" placeholder="Search Film">
        </form>
        <button type="button"><i class="bi bi-search"></i></button>
        <button type="button"><i class="bi bi-list"></i></button>
    </div>
</nav>