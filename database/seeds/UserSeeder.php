<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'nom' => 'admin',
            'prenom' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),
            'idfonction' => 1,
            'tel1' => '32008600',
            'idgroupe' => 0,
            'etat' => 1,
            'iddepot' => 1233,
        ]);

        User::create([
            'nom' => 'vendeur',
            'prenom' => 'vendeur',
            'username' => 'vendeur',
            'email' => 'vendeur@gmail.com',
            'password' => Hash::make('vendeur1234'),
            'idfonction' => 3,
            'tel1' => '32008600',
            'idgroupe' => 0,
            'etat' => 1,
            'iddepot' => 1233,
        ]);     User::create([

            'nom' => 'gerent',
            'prenom' => 'gerent',
            'username' => 'gerent',
            'email' => 'gerent@gmail.com',
            'password' => Hash::make('gerent1234'),
            'idfonction' => 2,
            'tel1' => '32008600',
            'idgroupe' => 0,
            'etat' => 1,
            'iddepot' => 1233,
        ]);
    }
}
