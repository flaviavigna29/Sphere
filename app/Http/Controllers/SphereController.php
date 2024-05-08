<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Sphere;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SphereController extends Controller
{
   public function index()
   {
      return view('profilo');
   }

   public function edit(Sphere $sphere)
   {
      return view('editSphere', compact('sphere'));
   }

   public function show($userId)
   {
      $user = User::findOrFail($userId);
      $spheres = $user->spheres()->where('updated_at', '<=', now())->get();

      return view('profilo.show', compact('user', 'spheres'));
   }


   public function indexTag($tagId)
   {
      return view('tags', compact('tagId'));
   }

   public static function renderTagLinks($text)
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
}
