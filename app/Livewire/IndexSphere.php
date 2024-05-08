<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Sphere;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class IndexSphere extends Component
{
    public function destroy(Sphere $sphere)
    {
        $sphere->tags()->detach();

        $sphere->delete();

        session()->flash('message', 'Sphere eliminato!');

        $this->render();
    }

    function renderTagLinks($text)
    {
        $pattern = '/#(\w+)/';
        return preg_replace_callback($pattern, function ($matches) {
            $tag = Tag::where('name', $matches[1])->first();
            if ($tag) {
                return '<a href="' . route('index.tag', $tag->id) . '">#' . $matches[1] . '</a>';
            } else {
                return '#' . $matches[1];
            }
        }, $text);
    }

    public function render()
    {
        $tags = Tag::all();

        $spheres = Sphere::orderBy('created_at', 'desc')->get();

        return view('livewire.index-sphere', compact('spheres'));
    }
}
