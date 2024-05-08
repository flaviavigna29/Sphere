<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PublicController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    public function homepage()
    {
        return view('homepage');
    }

    public function editProfilo()
    {
        $user = Auth::user();

        return view('profilo/editProfilo', compact('user'));
    }

    public function updateProfilo(Request $request) {

        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:users,name,'.$user->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'firstname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->firstname = $request->firstname;
        $user->surname = $request->surname;

        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('public/img');
            $user->img = Storage::url($imagePath);
        }

        $user->save();

        return redirect()->route('index.profilo')->with('success', 'Profilo aggiornato con successo!');
    }
}
