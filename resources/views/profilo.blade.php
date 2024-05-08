<x-layout>
    <div class="col-12 col-md-6 mt-3 border-start border-end p-0">

        <div class="row d-flex justify-content-center mt-5 sticky2">

            <x-display-message />

            <div class="col-5 d-flex justify-content-center align-items-center">
                <img src="{{ Auth::user()->img }}" alt="" class="rounded-circle " height="125">
            </div>
            <div class="col-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class="roboto-slab my-3 text-center roboto-slab">@ {{ Auth::user()->name }}</h3>
                <h5 class="text-center my-3 text-uppercase roboto-slab">{{ Auth::user()->firstname }}
                    {{ Auth::user()->surname }}
                </h5>
            </div>
            <div class="row mt-4">
                <h2 class="roboto-slab text-center">I miei Sphere</h2>
            </div>
            {{-- <div class="row">
                <div class="col-11">
                    <a href="{{ route('editProfilo') }}"><i class="bi bi-pencil-square"></i></a>
                </div>
            </div> --}}
        </div>

        <livewire:index-profile />
    </div>

</x-layout>
