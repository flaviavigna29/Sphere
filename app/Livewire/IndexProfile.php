<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Sphere;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class IndexProfile extends Component
{
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

    public function destroy(Sphere $sphere)
    {
        $sphere->tags()->detach();

        $sphere->delete();

        session()->flash('message', 'Sphere eliminato!');

        $this->render();
    }

        public function render()
    {
        $tags = Tag::all();
        
        $spheres = Sphere::where('user_id', Auth::user()->id)->orderBy('created_at' , 'desc')->get();

        return view('livewire.index-profile', compact('spheres', 'tags'));
    }
}
