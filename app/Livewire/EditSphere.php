<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Sphere;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\UploadFile;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class EditSphere extends Component
{
    #[Validate('required', message: 'Inserisci il tuo sphere.')]
    public $body;

    use WithFileUploads;

    public $img;

    public function mount(Sphere $sphere)
    {
        $this->body = $sphere->body;
        $this->img = $sphere->img;
    }

    public $sphere;

    public function updateSphere()
    {
        $this->validate();

        $imgPath = $this->img;

        if ($this->img instanceof \Illuminate\Http\UploadedFile ) {

            Storage::delete($this->verse->img);

            $imgPath = $this->img->store('/public/imgSphere');

        } else {
            $imgPath = $this->sphere->img;
        }

        $this->sphere->update([
            'body' => $this->body,
            'img' => $imgPath,
        ]);

        $pattern = '/#(\w+)/';
        preg_match_all($pattern, $this->body, $matches);
        $tags = $matches[1];

        $tagIds = [];
        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $tagIds[] = $tag->id;
        }

        $this->sphere->tags()->sync($tagIds);

        $this->reset();
        
        session()->flash('message', 'Sphere modificato con successo');

        $this->redirect('/homepage');
    }


    public function render()
    {
        return view('livewire.edit-sphere');
    }
}
