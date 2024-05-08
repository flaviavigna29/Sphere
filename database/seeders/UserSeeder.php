<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Aries',
            'firstname' => 'Flavia',
            'surname' => 'Vignanelli',
            'img'=> Storage::url('public/img/default.jpg'),
            'email' => 'flavia@email.it',
            'password' => (Hash::make('password1')),
        ]);
    }
}
