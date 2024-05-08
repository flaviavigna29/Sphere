<x-layout>
    <div class="col-6 mt-3 border-start border-end p-0">
        {{-- <div class="row">
            <h3 class="roboto-slab mb-3 text-center">{{ Auth::user()->name }}</h3>
            <img src="https://picsum.photos/200" height="200" alt="">
        </div> --}}

        @foreach ($spheres as $sphere)
            <div class="row my-5 d-flex mx-auto justify-content-center">

                <div class="col-12 justify-content-center px-4">

                    <div class="card mx-auto rounded-5" style="width: 100%;">

                        {{-- Intestazione --}}
                        <div class="row d-flex justify-content-evenly align-items-center">

                            <div class="col-2 p-3 mt-3">
                                <img src="{{ Auth::user()->img }}" alt="" width="50"
                                    class="rounded-circle d-block mx-auto">
                            </div>

                            <div class="col-7 mt-3">
                                <a href="#" class="text-decoration-none text-white">
                                    <h5 class="card-title roboto-slab">{{ $sphere->user->name }}</h5>
                                </a>
                            </div>

                            <div class=" col-2 mt-3 btn-group">
                                @if (Auth::user()->id == $sphere->user->id)
                                    <button class="btn btn-sm" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="bi bi-three-dots fs-4"></i>
                                    </button>
                                    <ul class="dropdown-menu text-center">
                                        <li class="d-flex mx-auto">
                                            <a href={{ route('edit.sphere', compact('sphere')) }} class="dropdown-item">
                                                <i class="bi bi-pencil-square"></i>
                                                <p><small>Modifica</small></p>
                                            </a>
                                        </li>

                                        <li class="d-flex mx-auto">
                                            <button wire:click="destroy({{ $sphere }})" class="dropdown-item">
                                                <i class="bi bi-trash3-fill"></i>
                                                <p><small>Elimina</small></p>
                                            </button>
                                        </li>
                                    </ul>
                                @endif

                            </div>

                        </div>

                        {{-- contenuto del testo --}}
                        <div class="card-body border-top">
                            <p class="card-text">
                                {!! \App\Http\Controllers\SphereController::renderTagLinks($sphere->body) !!}
                            </p>

                            <p class="card-text">
                                @if ($sphere->tags->isNotEmpty())
                                    @foreach ($sphere->tags as $tag)
                                        <a href="{{ route('index.tag', compact('tag')) }}"
                                            class="text-primary text-decoration-underline">{{ $tag->name }}</a>
                                    @endforeach
                                @endif
                            </p>

                            @if ($sphere->img)
                                <img src="{{ Storage::url($sphere->img) }}" class="card-img-top rounded-5"
                                    alt="img">
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-layout>
