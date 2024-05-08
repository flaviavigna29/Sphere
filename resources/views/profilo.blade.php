<x-layout>
    <div class="col-12 col-md-10 col-lg-6 mt-5 mt-md-0 p-0 mx-auto">

        <div class="row p-3 mt-5 bg_">
            <div class="col-12 d-flex justify-content-center">

                <x-display-message />

                <div class="col-5 d-flex justify-content-center align-items-center">
                    <img src="{{ Auth::user()->img }}" alt="" class="rounded-circle d-block mx-auto" height="100">
                </div>
                <div class="col-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class="roboto-slab my-3 text-center roboto-slab">@ {{ Auth::user()->name }}</h3>
                    <h5 class="text-center my-3 text-uppercase roboto-slab">{{ Auth::user()->firstname }}
                        {{ Auth::user()->surname }}
                    </h5>
                </div>

            </div>

            <div class="row mt-5">
                <h2 class="roboto-slab text-center">I miei Sphere</h2>
            </div>
        </div>

        <livewire:index-profile />
    </div>
    <div class="col-lg-3 bg_col d-none d-lg-block sticky3"></div>



</x-layout>
