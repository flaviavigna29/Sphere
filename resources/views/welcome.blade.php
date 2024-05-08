<x-layout2>
    <div class="container vh-100 py-5 d-flex justify-content-center align-items-center ">
        <div class="row justify-content-center align-items-center vh-50 vh-lg-100 mx-auto px-2">
            <div class="col-11 col-lg-6 d-flex justify-content-center ">
                <img src="storage/img/sphere.png" alt="sphere" class="img_rotate rounded">
            </div>
            <div class="col-11 col-lg-6 d-flex flex-column align-items-center py-0 py-lg-5">
                <img src="storage/img/logo.png" alt="logo" class="py-3 logo">
                <div class="d-flex justify-content-around py-3">
                    <a href="{{ route('login') }}" class="btn btn-secondary mx-5">Accedi</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary mx-5">Registrati</a>
                </div>
            </div>
        </div>
    </div>
</x-layout2>
