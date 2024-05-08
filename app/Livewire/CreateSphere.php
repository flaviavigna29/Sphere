<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Sphere;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateSphere extends Component
{
    #[Validate('required', message: 'Inserisci il tuo sphere.')]
    public $body;

    use WithFileUploads;

    public $img;

    public function store()
    {
        $this->validate();

        $imgPath = null;

        if ($this->img) {
            $imgPath = $this->img->store('/public/imgSphere');
        }

        $pattern = '/#(\w+)/';
        preg_match_all($pattern, $this->body, $matches);
        $tags = $matches[1];


        // $bodyWithoutTags = preg_replace('/#\w+\b/', '', $this->body);

        // $bodyWithoutTags = preg_replace('/\s+/', ' ', $bodyWithoutTags);

        $sphere= Sphere::create([
            'body'=> $this->body,
            'img'=> $imgPath,
            'user_id'=> Auth::user()->id
        ]);

        $tagIds = [];
        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $tagIds[] = $tag->id;
        }

        $sphere->tags()->attach($tagIds);

        $this->reset();

        session()->flash('message', 'Hai condiviso il tuo Sphere!');

        $this->redirect('homepage');
    }
    
    public function render()
    {
        return view('livewire.create-sphere');
    }
}
