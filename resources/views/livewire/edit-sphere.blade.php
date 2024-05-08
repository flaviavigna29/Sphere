<form class="container-fluid border-top border-bottom p-3" wire:submit="updateSphere" enctype="multipart/form-data">

    <x-display-message />

    <div class="row justify-content-center pb-3">
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
            <div class="my-3">
                <span class="form-label">Immagine attuale:</span>
                <img src="{{ Storage::url($sphere->img) }}" width="400">
            </div>
            <div class="row d-flex justify-content-between align-items-center mt-3">
                <div class="dropdown col-6 text-start dropend">
                    <input wire:model="img" class="form-control" type="file" id="formFile">
                </div>

                <div class="text-end col-6">
                    <button type="submit" class="btn btn-success px-3 py-2 bi">Posta</button>
                </div>
            </div>
        </div>
    </div>
</form>
