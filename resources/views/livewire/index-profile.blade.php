<div>
    @foreach ($spheres as $sphere)
        <div class="row my-5 d-flex mx-auto justify-content-center">

            <div class="col-12 col-md-9 col-lg-12 justify-content-center px-4">

                <div class="card mx-auto rounded-5" style="width: 100%;">

                    {{-- Intestazione --}}
                    <div class="row d-flex justify-content-evenly align-items-center">

                        {{-- img --}}
                        <div class="col-2 p-3 mt-3">
                            <img src="{{ Auth::user()->img }}" alt="" width="50"
                                class="rounded-circle d-block mx-auto">
                        </div>

                        {{-- nome utente --}}
                        <div class="col-7 mt-3">
                            <h5 class="card-title roboto-slab">{{ $sphere->user->name }}</h5>
                        </div>
                        
                        <div class=" col-2 mt-3 btn-group">
                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        </div>

                    </div>

                    {{-- contenuto del testo --}}
                    <div class="card-body border-top">
                        <p class="card-text text-center">{!! $this->renderTagLinks($sphere->body) !!}</p>

                        <p class="card-text text-center">
                            @if ($sphere->tags->isNotEmpty())
                                @foreach ($sphere->tags as $tag)
                                    <a href="{{ route('index.tag', compact('tag')) }}"
                                        class="text-primary-emphasis text-decoration-underline">#{{ $tag->name }}</a>
                                @endforeach
                            @endif
                        </p>

                        @if ($sphere->img)
                            <img src="{{ Storage::url($sphere->img) }}" class="card-img-top rounded-5" alt="img">
                        @endif
                    </div>

                </div>
            </div>
        </div>
    @endforeach
</div>
