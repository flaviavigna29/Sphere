<x-layout>

    <div class="col-12 col-lg-9 mt-3 p-0">
        <h2 class="mt-5 pt-5 text-center roboto-slab">Modifica il profilo</h2>
        <div class="container vh-75 pb-5">
            <div class="row vh-75">
                <form method="POST" action="{{ route('updateProfilo') }}" enctype="multipart/form-data" class="p-5">
                    @method('PUT')
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
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ Auth::user()->email }}" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nickname</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ Auth::user()->name }}" id="name">
                            </div>

                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="firstname" class="form-label">Nome</label>
                                    <input type="text" name="firstname" class="form-control"
                                        value="{{ Auth::user()->firstname }}" id="firstname">
                                </div>
                                <div class="mb-3 col">
                                    <label for="surname" class="form-label">Cognome</label>
                                    <input type="text" name="surname" class="form-control"
                                        value="{{ Auth::user()->surname }}" id="surname">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 ms-md-5 mt-3 mt-md-0 d-flex flex-column my-auto">
                            <span class="pb-3">Immagine Attuale</span>
                            <span class="pb-3">
                                <img src="{{ Auth::user()->img }}" alt="" width="125">
                            </span>
                            <input class="form-control" type="file" id="img" name="img">
                        </div>
                    </div>

                    <div class="d-flex justify-content-start pt-5">
                        <button class="btn btn-secondary" type="submit">Modifica dati</button>
                    </div>

                </form>

            </div>
        </div>

</x-layout>
