<style>
    .active {
        background: red;
    }

</style>
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Logo <span style="color: red;font-size:30px">.</span> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item {{ Route::is('home') ? 'active' : '' }} "><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="/">Home</a></li>
                <li class="nav-item {{ Route::is('laravel') ? 'active' : '' }}  "><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="{{ route('laravel') }}">Laravel</a></li>
                <li class="nav-item {{ Route::is('vuejs') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('vuejs') }}">Vue Js</a></li>
                <li class="nav-item {{ Route::is('php') ? 'active' : '' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('php') }}">PHP</a></li>
                <li class="nav-item {{ Route::is('javascript')?'active':'' }}"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('javascript') }}">Javascript</a></li>
            </ul>
        </div>
    </div>
</nav>
