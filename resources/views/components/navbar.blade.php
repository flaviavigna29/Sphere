<div class="col-2 d-none d-lg-block">
    <div class="sticky container mt-5 pt-5">
        <div class="row d-flex align-items-center mx-lg-5 px-lg-5">
            <ul class="nav d-flex flex-column align-items-center col-3">

                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link text-white pe-0 fs-3" href="{{ route('homepage') }}"><i class="bi bi-house"></i></a>
                </li>

                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link text-white pe-0 fs-3" href="#"><i
                            class="bi bi-binoculars"></i></a>
                </li>

                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link text-white pe-0 fs-3" href="{{ route('editProfilo') }}"><i class="bi bi-gear"></i></a>
                </li>

                <form method="POST" action="{{ route('logout') }}" class="nav-item d-flex align-items-center pt-5">
                    @csrf
                    <button type="submit" class="bg-transparent btn"><i
                            class="bi bi-box-arrow-left ps-3 pe-0 fs-3 text-danger"></i></button>
                </form>
            </ul>
        </div>
    </div>
</div>

<div class="container d-block d-lg-none fixed-bottom bg_">
    <div class="row justify-content-center  align-items-center">
        <ul class="nav d-flex justify-content-evenly">
            <li class="nav-item d-flex align-items-center">
                <a class="nav-link text-white pe-0 fs-3" href="{{ route('homepage') }}"><i class="bi bi-house"></i></a>
            </li>

            <li class="nav-item d-flex align-items-center">
                <a class="nav-link text-white pe-0 fs-3" href="#"><i
                        class="bi bi-binoculars"></i></a>
            </li>

            <li class="nav-item d-flex align-items-center">
                <a class="nav-link text-white pe-0 fs-3" href="{{ route('editProfilo') }}"><i class="bi bi-gear"></i></a>
            </li>

            <form method="POST" action="{{ route('logout') }}" class="nav-item d-flex align-items-center">
                @csrf
                <button type="submit" class="bg-transparent btn"><i
                        class="bi bi-box-arrow-left ps-3 pe-0 fs-3 text-danger"></i></button>
            </form>
        </ul>
    </div>
</div>
