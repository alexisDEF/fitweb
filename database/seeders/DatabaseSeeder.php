<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email'=>'cyprien@test.fr',
            'password'=>Hash::make('1234'),
            'firstname' => 'Cyprien',
            'lastname' => 'Rimbaud',
            'isAdmin'=>false,
        ]);
        User::create([
            'email'=>'alexis@test.fr',
            'password'=>Hash::make('12345678'),
            'firstname' => 'Dylan',
            'lastname' => 'Def',
            'isAdmin'=>false,
        ]);

        User::create([
            'email'=>'admin@fitweb.fr',
            'password'=>Hash::make('1234'),
            'firstname'=>'admin',
            'lastname'=>'admin',
            'isAdmin'=>true,
        ]);
    }
}
