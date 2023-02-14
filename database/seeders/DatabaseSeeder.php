<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Usaha;
use App\Models\Pemilik;
use App\Models\Pelatihan;
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
        User::factory()->create([
            'name' => 'Admin Dinkop',
            'email' => 'adminkop@gmail.com',
            'password' => '$2a$12$Od/u8JgV3OqrosaGC2CAaOWsn6AjI.fK.lyNSJaV4V1kdIEHVvI5i'
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //User::factory(3)->create();
        
        // Pemilik::factory(20)->create();
        // Usaha::factory(20)->create();
    }
}
