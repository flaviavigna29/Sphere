<nav class="navbar navbar-dark bg-dark fixed-top bg_" aria-label="First navbar example">
    <div class="container-fluid justify-content-between">
        <a class="mx-lg-5 px-lg-5" href="#">
            <img src="/storage/img/logo.png" alt="logo" width="150">
        </a>
        <div class="d-flex">
            <h3 class="pe-3">{{ Auth::user()->name }}</h3>
            <a class="nav-link text-white fs-3 me-lg-5 pe-lg-5" href="{{ route('index.profilo') }}"><i
                    class="bi bi-person-square"></i></a>
        </div>
    </div>
</nav>
