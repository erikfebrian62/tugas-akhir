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
            'role' => 'user',
            'name' => 'wawan',
            'email' => 'wawan123@gmail.com',
            'jenis_usaha' => 'warung klontong',
            'password' => bcrypt('user123')
        ]);

        User::create([
            'role' => 'admin',
            'name' => 'erik',
            'email' => 'erik123@gmail.com',
            'password' => bcrypt('admin123')
        ]);


    }
}
