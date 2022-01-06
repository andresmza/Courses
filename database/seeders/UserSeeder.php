<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
                'name' => 'Andrés',
                'email' => 'andres.mza25@gmail.com',
                'password' => bcrypt('12345') 
                ]);

        $user->assignRole('Admin');

        User::create([
            'name' => "Test",
            'email' => 'andres.mza27@gmail.com',
            'password' => bcrypt('12345') 
        ]);

        User::factory(98)->create();        
    }
}
