<x-layout2>
    <div class="container vh-100  justify-content-center align-items-center ">
        <div class="row  justify-content-center align-items-center vh-75">
            <div class="col-12">
                <a href="{{ route('welcome') }}" class="btn btn-secondary indietro"><i class="bi bi-backspace"></i></a>
            </div>

            <div class="col-12 col-lg-9 align-items-center pt-5 pt-lg-0">
                <form method="POST" action="{{ route('register') }}" class="p-5">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger p-0 my-2">
                            <ul class="my-1 ">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nickname</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="row">
                        <div class="mb-3 col">
                            <label for="firstname" class="form-label">Nome</label>
                            <input type="text" name="firstname" class="form-control" id="firstname">
                        </div>
                        <div class="mb-3 col">
                            <label for="surname" class="form-label">Cognome</label>
                            <input type="text" name="surname" class="form-control" id="surname">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center pt-5">
                        <button class="btn btn-secondary" type="submit">Registrati</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-3 position-relative mt-5 mt-md-3 mt-lg-0 ">
                <div class="position-absolute top-50 start-50 translate-middle d-flex flex-column justify-content-center align-items-center d-none d-lg-block">
                    <h5 class="text-center pb-3">Sei già Registrato?</h5>
                    <a href="{{ route('login') }}" class="btn btn-secondary">Accedi</a>
                </div>

                <div class="d-flex justify-content-evenly align-items-center d-block d-lg-none">
                    <h5 class="text-center ">Sei già Registrato?</h5>
                    <a href="{{ route('login') }}" class="btn btn-secondary">Accedi</a>
                </div>

            </div>
        </div>
    </div>

</x-layout2>
