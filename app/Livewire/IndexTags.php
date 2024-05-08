<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Sphere;
use Livewire\Component;

class IndexTags extends Component
{
    public $tagId;

    public function mount($tagId)
    {
        $this->tagId = $tagId;
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
        $tag = Tag::findOrFail($this->tagId);

        $spheres = $tag->spheres()->get();

        return view('livewire.index-tags', compact('spheres', 'tag'));
    }

    public function destroy(Sphere $sphere)
    {
        $sphere->tags()->detach();

        $sphere->delete();

        session()->flash('message', 'Sphere eliminato!');

        $this->render();
    }
}
