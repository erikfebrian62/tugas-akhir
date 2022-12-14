<?php

namespace Database\Seeders;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'img' => 'user.png',
            'name' => 'wawan',
            'email' => 'wawan123@gmail.com',
            'email_verified_at' => '2022-12-14 22:43:40',
            'jenis_usaha' => 'warung klontong',
            'password' => bcrypt('user123')
        ]);


    }
}
