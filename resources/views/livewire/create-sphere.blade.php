<form class="container-fluid p-3 mt-0 sticky2 bg_" wire:submit="store" enctype="multipart/form-data">

    <x-display-message />

    <div class="row justify-content-center pb-3 mt-lg-5">
        <div class="col-2 p-3">
            <img src="{{ Auth::user()->img }}" alt="" width="50" class="rounded-circle d-block mx-auto">
        </div>
        <div class="col-10 mt-3">
            <textarea wire:model="body" class="form-control" name="body" rows="3" placeholder="Scrivi il tuo sphere!">{{ old('body') }}</textarea>
            <div class="text-danger">
                @error('body')
                    {{ $message }}
                @enderror
            </div>
            <div class="row d-flex justify-content-between align-items-center mt-3">
                <div class="dropdown col-5 dropend">
                    <button class="btn" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-images fs-5"></i>
                    </button>
                    <ul class="dropdown-menu align-items-center mx-2 p-0">
                        <input wire:model="img" class="form-control" type="file" id="formFile">
                    </ul>
                </div>

                <div class="col-5 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success px-3 py-2 bi">Posta</button>
                </div>
            </div>
        </div>
    </div>
</form>
