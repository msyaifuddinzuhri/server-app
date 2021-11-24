<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
            'name' => 'Mochammad Syaifuddin Zuhri',
            'email' => 'mochammadsyaifuddinz@gmail.com',
            'phone' => '085648989767',
            'address' => 'Watuagung Prigen Pasuruan',
            'photo' => 'uploads/images/avatar.jpg',
            'password' => Hash::make('password')
        ]);
        // \App\Models\User::factory(10)->create();
        $this->call([
            TourSeeder::class
        ]);
    }
}
