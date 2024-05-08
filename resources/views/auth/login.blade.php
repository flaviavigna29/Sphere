<x-layout2>
    <div class="container vh-100 py-5">
        <div class="row justify-content-center align-items-center vh-100 position-relative">
            <div class="col-12">
                <a href="{{ route('welcome') }}" class="btn btn-secondary indietro"><i class="bi bi-backspace"></i></a>
            </div>
            <div class="col-12 col-md-6 align-items-center pb-5">
                <form method="POST" action="{{ route('login') }}" class="p-5">
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
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="d-flex justify-content-center py-5">
                        <button class="btn btn-secondary" type="submit">Accedi</button>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-5">
                        <h5>Non Sei ancora Registrato?</h5>
                        <a href="{{ route('register') }}" class="btn btn-secondary">Registrati</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout2>
